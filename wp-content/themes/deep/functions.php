<?php
/**
 * @author  Webnus
 *
 * @package Deep Theme
 */

if ( ! defined( 'DEEPTHEME' ) ) {
	define( 'DEEPTHEME', '1.0.7' );
}

if ( ! defined( 'DEEP_HANDLE' ) ) {
	define( 'DEEP_HANDLE', 'true' );
}

if ( ! defined( 'DEEP_THEME_DIR' ) ) {
	define( 'DEEP_THEME_DIR', trailingslashit( get_template_directory() ) );
}

if ( ! defined( 'DEEP_THEME_URI' ) ) {
	define( 'DEEP_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
}

/**
 * Deep Theme.
 */
require DEEP_THEME_DIR . '/src/class-deep-theme.php';




//文章摘要字数限制
// function excerpt_read_more_link($output) {
	
	 
	 
// 		$output = mb_substr($output,0, 160);
	 
// 		return $output . '<span>...</span>';
	
	 
// 	  }
	 
// 	add_filter('the_excerpt', 'excerpt_read_more_link');
	