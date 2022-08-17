<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class ES_Handle_Post_Notification {

	public $is_wp_5 = false;

	public $is_rest_request = false;

	public $do_post_notification_via_wp_5_hook = false;

	public $do_post_notification_for = 0;

	public function __construct() {
		global $wp_version;
		global $wpdb;

		// Action is available after WordPress 2.3.0+
		add_action( 'transition_post_status', array( $this, 'es_post_publish_callback' ), 10, 3 );

		// Action is available WordPress 5.0+
		add_action( 'rest_after_insert_post', array( $this, 'handle_post_publish' ), 10, 3 );

		// Filter is available after WordPress 4.7.0+
		add_filter( 'rest_pre_insert_post', array( $this, 'prepare_post_data' ), 10, 2 );

		if ( version_compare( $wp_version, '5.0.0', '>=' ) ) {
			$this->is_wp_5 = true;
		}

		add_action( 'ig_es_refresh_post_notification_content', array( $this, 'refresh_post_content' ), 10, 2 );
	}

	public function prepare_post_data( $prepared_post, $request ) {
		$this->is_rest_request = true;
		return $prepared_post;
	}

	public function handle_post_publish( $post, $requst, $insert ) {
		// If it's inserted for the first time????
		// Not able to check whether it'a first time post or nth times
		if ( is_object( $post ) && ( $post instanceof WP_Post ) ) { // Do it for the first time only

			if ( $this->do_post_notification_via_wp_5_hook ) {
				$post_id = $post->ID;
				if ( $post_id == $this->do_post_notification_for ) {
					$this->queue_post_notifications( $post_id );
				}
			}
		}

	}

	public function es_post_publish_callback( $post_status, $original_post_status, $post ) {

		if ( ( 'publish' == $post_status ) && ( 'publish' != $original_post_status ) ) {

			if ( is_object( $post ) ) {

				$post_id = $post->ID;
				if ( ! empty( $post_id ) ) {

					if ( $this->is_wp_5 && $this->is_rest_request ) {
						$this->do_post_notification_via_wp_5_hook = true;
						$this->do_post_notification_for           = $post_id;
					} else {
						$this->queue_post_notifications( $post_id );
					}
				}
			}
		}
	}

	public function queue_post_notifications( $post_id ) {

		if ( ! empty( $post_id ) ) {

			$notifications = ES()->campaigns_db->get_campaigns_by_post_id( $post_id );

			if ( count( $notifications ) > 0 ) {
				foreach ( $notifications as $notification ) {
					$template_id = $notification['base_template_id'];
					$template    = get_post( $template_id );    // to confirm if template exists in ES->Templates
					if ( is_object( $template ) ) {
						$list_id = $notification['list_ids'];
						$list_id = explode( ',', $list_id );

						$post = get_post( $post_id );

						if ( is_object( $post ) ) {

							/*
							* Prepare Subject
							* Prepare Body
							* Add entry into mailing queue table
							*/

							// Prepare subject
							$post_subject = self::prepare_subject( $post, $template );

							// Prepare body
							$template_content = $template->post_content;
							$post_content     = self::prepare_body( $template_content, $post_id, $template_id );

							$guid = ES_Common::generate_guid( 6 );

							$data = array(
								'hash'        => $guid,
								'campaign_id' => $notification['id'],
								'subject'     => $post_subject,
								'body'        => $post_content,
								'count'       => 0,
								'status'      => 'In Queue',
								'start_at'    => '',
								'finish_at'   => '',
								'created_at'  => ig_get_current_date_time(),
								'updated_at'  => ig_get_current_date_time(),
								'meta'        => maybe_serialize(
									array(
										'post_id' => $post_id,
										'type'    => 'post_notification',
									)
								),
							);

							// Add entry into mailing queue table
							$mailing_queue_id = ES_DB_Mailing_Queue::add_notification( $data );
							
							if ( $mailing_queue_id ) {
								$mailing_queue_hash = $guid;
								$campaign_id        = $notification['id'];
								ES_DB_Sending_Queue::do_insert_from_contacts_table( $mailing_queue_id, $mailing_queue_hash, $campaign_id, $list_id );
							}
						}
					}
				}
			}
		}
	}

	public static function prepare_subject( $post, $template ) {
		// convert post subject here

		$post_title     = $post->post_title;
		$template_title = $template->post_title;

		$blog_charset = get_option( 'blog_charset' );

		$post_title   = html_entity_decode( $post_title, ENT_QUOTES, $blog_charset );
		$post_subject = str_replace( '{{POSTTITLE}}', $post_title, $template_title );

		$post_link    = get_permalink( $post );
		$post_subject = str_replace( '{{POSTLINK}}', $post_link, $post_subject );

		return $post_subject;

	}

	/**
	 * jasper20211202 1629 发布通知方法
	 * @param  [type] $es_templ_body     [description]
	 * @param  [type] $post_id           [description]
	 * @param  [type] $email_template_id [description]
	 * @return [type]                    [description]
	 */
	public static function prepare_body( $es_templ_body, $post_id, $email_template_id ) {
		global $wpdb;

		$post = get_post( $post_id );

		//获取活动组织者id
		$organizer_id = get_post_meta($post_id,'mec_organizer_id',true);
		//获取活动组织者信息
		$organizer = get_term($organizer_id);
		//组装组织者url地址
		$organizer_url = 'http://'.$_SERVER['HTTP_HOST'].'/organizer-details/?fesection=organizer&feparam='.$organizer->term_id;
	
		//获取活动地址id
		$location_id = get_post_meta($post_id,'mec_location_id',true);
		//获取活动地址信息
		$location = get_term($location_id);
		//组装组织者url地址
		$location_url = 'http://'.$_SERVER['HTTP_HOST'].'/location-details/?fesection=location&feparam='.$location->term_id;

		//获取文章时间数据
		$post_date = $wpdb ->get_row("SELECT * FROM `wp_mec_dates` WHERE `post_id`=".$post_id, OBJECT);

		// 替换模板中的关键字
		// 模板活动开始时间
		$es_templ_body = str_replace( '{{POST-STARTDATE}}', date("Y-m-d H:i:s",$post_date->tstart), $es_templ_body );
		// 模板活动结束时间
		$es_templ_body = str_replace( '{{POST-ENDDATE}}', date("Y-m-d H:i:s",$post_date->tend), $es_templ_body );
		// 模板活动组织者带链接的名称
		$es_templ_body = str_replace( '{{POSTORGANIZER}}', '<a href="'.$organizer_url.'">'.$organizer->name.'</a>', $es_templ_body );
		// 模板活动地址带链接的名称
		$es_templ_body = str_replace( '{{POSTLOCATION}}', '<a href="'.$location_url.'">'.$location->name.'</a>', $es_templ_body );

		$post_key             = 'post';
		// Making $post as global using $GLOBALS['post'] key. Can't use 'post' key directly into $GLOBALS since PHPCS throws global variable assignment warning for 'post'.
		$GLOBALS[ $post_key ] = $post;

		$post_date            = ES_Common::convert_date_to_wp_date( $post->post_modified );

		// 替换模板中的DATE关键字 显示日期
		$es_templ_body        = str_replace( '{{DATE}}', $post_date, $es_templ_body );

		//获取文章标题
		$post_title    = get_the_title( $post );

		// 替换模板中的POSTTITLE关键字 显示帖子标题
		$es_templ_body = str_replace( '{{POSTTITLE}}', $post_title, $es_templ_body );

		//获取文章链接
		$post_link     = get_permalink( $post_id );

		// Size of {{POSTIMAGE}}
		// 判断模板显示图片大小参数获取指定相关图片
		$post_thumbnail      = '';
		$post_thumbnail_link = '';
		if ( ( function_exists( 'has_post_thumbnail' ) ) && ( has_post_thumbnail( $post_id ) ) ) {
			$es_post_image_size = get_option( 'ig_es_post_image_size', 'full' );
			switch ( $es_post_image_size ) {
				case 'full':
					$post_thumbnail = get_the_post_thumbnail( $post_id, 'full' );
					break;
				case 'medium':
					$post_thumbnail = get_the_post_thumbnail( $post_id, 'medium' );
					break;
				case 'thumbnail':
				default:
					$post_thumbnail = get_the_post_thumbnail( $post_id, 'thumbnail' );
					break;
			}
		}

		//判断是否存在图片，存在给图片加超链接
		if ( '' != $post_thumbnail ) {
			$post_thumbnail_link = "<a href='" . $post_link . "' target='_blank'>" . $post_thumbnail . '</a>';
		}

		// 替换模板中的POSTIMAGE关键字 显示帖子的特色图片
		$es_templ_body = str_replace( '{{POSTIMAGE}}', $post_thumbnail_link, $es_templ_body );

		// Get post description
		// 使用它来显示电子邮件内容中帖子的简短描述，即它只显示博客帖子内容的前 50 个字符
		$post_description_length = 50;
		$post_description        = $post->post_content;
		$post_description        = strip_tags( strip_shortcodes( $post_description ) );
		$words                   = explode( ' ', $post_description, $post_description_length + 1 );
		if ( count( $words ) > $post_description_length ) {
			array_pop( $words );
			array_push( $words, '...' );
			$post_description = implode( ' ', $words );
		}
		//  替换模板中的POSTDESC关键字 显示电子邮件内容中帖子的前50个字简短描述
		$es_templ_body = str_replace( '{{POSTDESC}}', $post_description, $es_templ_body );

		// Get post excerpt
		// 
		$post_excerpt  = get_the_excerpt( $post );
		// 使用它来显示电子邮件内容中帖子的帖子摘录
		// 替换模板中的POSTEXCERPT关键字 显示电子邮件内容中帖子的帖子摘录
		$es_templ_body = str_replace( '{{POSTEXCERPT}}', $post_excerpt, $es_templ_body );

		$more_tag_data = get_extended( $post->post_content );
		
		// Get text before the more(<!--more-->) tag.
		$text_before_more_tag = $more_tag_data['main'];
		$text_before_more_tag = strip_tags( strip_shortcodes( $text_before_more_tag ) );
		// 替换模板中的POSTMORETAG关键字 显示帖子的内
		$es_templ_body        = str_replace( '{{POSTMORETAG}}', $text_before_more_tag, $es_templ_body );

		// get post author
		$post_author_id = $post->post_author;
		$post_author    = get_the_author_meta( 'display_name', $post_author_id );
		// 替换模板中的POSTMORETAG关键字 显示帖子作者姓名
		$es_templ_body  = str_replace( '{{POSTAUTHOR}}', $post_author, $es_templ_body );
		// 替换模板中的POSTMORETAG关键字 显示帖子的内容
		$es_templ_body  = str_replace( '{{POSTLINK-ONLY}}', $post_link, $es_templ_body );

		// Check if template has {{POSTCATS}} placeholder.
		// 判断模板中是否存在POSTCATS关键字 显示帖子类别
		if ( strpos( $es_templ_body, '{{POSTCATS}}' ) >= 0 ) {
			$taxonomies = get_object_taxonomies( $post );
			$post_cats  = array();
			
			if ( ! empty( $taxonomies ) ) {
				foreach ( $taxonomies as $taxonomy ) {
					$taxonomy_object = get_taxonomy( $taxonomy );
					// Check if taxonomy is hierarchical e.g. have parent-child relationship like categories
					if ( $taxonomy_object->hierarchical ) {
						$post_terms = get_the_terms( $post, $taxonomy );
						if ( ! empty( $post_terms ) ) {
							foreach ( $post_terms as $term ) {
								$term_name   = $term->name;
								$post_cats[] = $term_name;
							}
						}
					}
				}
			}

			// 替换模板中的POSTCATS关键字 显示帖子类别
			$es_templ_body = str_replace( '{{POSTCATS}}', implode( ', ', $post_cats ), $es_templ_body );
		}

		if ( '' != $post_link ) {
			$post_link_with_title = "<a href='" . $post_link . "' target='_blank'>" . $post_title . '</a>';

			// 替换模板中的POSTLINK-WITHTITLE关键字 显示带有帖子标题的可点击帖子链接
			$es_templ_body        = str_replace( '{{POSTLINK-WITHTITLE}}', $post_link_with_title, $es_templ_body );
			// $post_link            = "<a href='" . $post_link . "' target='_blank'>" . $post_link . '</a>';
		}

		// 替换模板中的POSTLINK关键字 显示完整的帖子链接（可点击）
		$es_templ_body = str_replace( '{{POSTLINK}}', $post_link, $es_templ_body );

		// Get full post 得到完整的文章
		$post_full     = $post->post_content;
		$post_full     = wpautop( $post_full );

		// 替换模板中的POSTFULL关键字 显示在电子邮件内容中发布的完整帖子
		$es_templ_body = str_replace( '{{POSTFULL}}', $post_full, $es_templ_body );

		// add pre header as post excerpt
		// 添加前标题作为文章摘录
		/*
		if ( ! empty( $post_excerpt ) ) {
			$es_templ_body = '<span class="es_preheader" style="display: none !important; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">' . $post_excerpt . '</span>' . $es_templ_body;
		}
		*/

		if ( $email_template_id > 0 ) {
			$es_templ_body = ES_Common::es_process_template_body( $es_templ_body, $email_template_id );
		}

		return $es_templ_body;
	}

	public static function refresh_post_content( $content, $args ) {
		$campaign_id        = $args['campaign_id'];
		$post_id            = $args['post_id'];
		$post               = get_post( $post_id );
		$template_id        = ES()->campaigns_db->get_template_id_by_campaign( $campaign_id );
		$template           = get_post( $template_id );
		$template_content   = $template->post_content;
		$content['subject'] = self::prepare_subject( $post, $template );
		$content['body']    = self::prepare_body( $template_content, $post_id, $template_id );

		return $content;
	}

}
