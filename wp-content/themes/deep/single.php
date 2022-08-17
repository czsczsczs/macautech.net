<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package deep
 */

get_header();
?>

<style>
 .inner {
    position: relative;
    overflow: hidden;
    height: 100%;
    width: 1340px;
    margin: 0 auto;
    color: #6bb24d;
    font-size: 17px;
    padding: 25px 0 20px;
}
.bt{
    color: white;
    border: none;
    background: #6bb24d;
    border-radius: 6px;
    float: right;
    font-size: 18px;
    margin-right: 10px;
}
.bt:hover{
    cursor: pointer;
}
.ier{
    width: 100%;
}
@media screen and (min-width: 1459px) {
    .ier{
        /* position: absolute; */
        padding-left: 60px;
    }
}
@media screen and (max-width: 1458px) {
    .ier{
        /* position: absolute; */
        display: flex;
        margin-left: 53px;
    }
}
.paddingboth{
        padding-right: 4%;
        padding-left: 4%;
    }
@media screen and (min-width: 1458px) {
    .paddingboth{
        padding-right: 16%;
        padding-left: 16%;
    }
}
.iframecon{
	height:710px;
	overflow: hidden;
}
.ddds {
    height: 820px;
    margin-top: -60px;
    width: 900px;
    object-fit: unset;
}
@media screen and (max-width: 900px){
    .ddds {
    width: 100%;
}
}
@media screen and (min-width: 769px) and (max-width: 1200px){
	.ddds{
    height: 820px;
}
}
@media screen and (min-width: 541px) and (max-width: 655px){
	.iframecon{
	height:590px;
}
 .ddds{
    height: 700px;
}
}
@media screen and (min-width: 451px) and (max-width: 540px){
	.iframecon{
	height:460px;
}
 .ddds{
    height: 570px;
}
}
@media screen and (min-width: 391px) and (max-width: 450px){
	.iframecon{
	height:390px;
}
 .ddds{
    height: 500px;
}
}
@media screen and (max-width: 390px){
	.iframecon{
	height:350px;
}
 .ddds{
    height: 455px;
}
}
.anlilink{
    color: unset !important;
}
.anlilink:hover{
    color: unset !important;
}
</style>
<!-- 案例菜单列表 -->
<?php require_once('case-header.php'); ?>

<?php if (have_posts()) : ?>
          <?php
            //cat是要调用的分类ID,&showposts=5是需要显示的文章数量
            query_posts('cat='.$now_cat);
          ?>

          <!-- 文章列表 -->

    <div class="inner">
        <div class="ier">
        案例>
        <a class="anlilink" href="<?php echo esc_url(home_url('/'));?>services__trashed/service-list/?cat=<?php $category = get_the_category();  echo $category[0]->cat_ID;?>">
        <?php $category = get_the_category();  echo $category[0]->cat_name;?> 
        </a>  
         >
        <?php the_title(); ?>
        </div>
        <!-- <button class="bt" onClick="javascript :history.back(-1);">返回</button> -->
    </div> 
       
    

<?php endif;?>

<?php
/**
 * The function is located in the following path
 * deep/src/class-deep-theme.php
 */
the_content("");
?>


<div style="margin-top:150px;">
<div style="margin:0 auto;text-align: center;"><h1>更多案例</h1></div>
<?php require_once('case-more.php'); ?>
</div>



<?php
get_footer();
