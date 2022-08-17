<?php

get_header();
?>
<link rel="stylesheet" href="assets/swiper/swiper-4.4.1.min.css" >
<style>

  #case-main .item {
      position: relative;
      height: 700px;
      padding: 15px;
      float: left;
      margin: 10px 10px;
  }

  #case-main .item p {
      padding: 15px;
      color: #000;
      font-size: 13px;
      line-height: 1.8;
      margin-top: 10px;
  }
  #case-main .item .overlay {
      position: absolute;
      bottom: -1px;
      width: 280px;
      height: 63px;
      text-align: center;
      line-height: 3.5;
      font-size: 20px;
      overflow: hidden;
      cursor: pointer;
  }
  #case-main .item .overlay a {
    text-align: center;
    line-height: 3.5;
    font-size: 20px;
    overflow: hidden;
    cursor: pointer;
    color: #000;
  }
  #case-main .item .overlay a:hover {
      color: #fff;
      text-decoration: none;
  }
  #case-main .item .overlay:hover {
      /* background: url(./img/1/index_11.png) center center; */
      background: #FFB628;
      color: #fff;
  }
  #case-main .tc-item {
    position: relative;
    text-align: left;
}
#case-main .main-content {
    overflow: hidden;
    background-image: linear-gradient(260deg, #6bb24d 0%, #b0d47b 100%);
    box-shadow: 0px 12px 45px -10px rgb(108 168 46 / 60%);
    margin-top: -50px;
    border: unset;
    background-color: transparent;
    border-bottom-left-radius: 10px !important;
    border-bottom-right-radius: 10px !important;
    margin-bottom: 75px;
}
#case-main .servicep{
    padding: 0px 30px;
}
#case-main .tc-name {
    margin-top: -52px !important;
    font-size: 20px !important;
    padding: 2px !important;
}
#case-main  .tc-name, .tc-job {
    background: #ffffff;
    width: 59%;
    margin: 0 auto !important;
    position: relative;
    text-align: center;
    padding: 0 21px;
    font-family: 'Catamaran';
    font-size: 18px;
    color: #000000 !important;
    font-weight: 700;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    padding-top: 12px !important;
}
#case-main .tc-job {
    font-family: 'Catamaran';
    color: #757575;
    font-size: 13px;
    letter-spacing: 0.6px;
    font-weight: 300;
    text-transform: inherit;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    top: -10px;
    padding-bottom: 4px;
    line-height: 34px;
}

#case-main .tc-name,.tc-job {
    background: #ffffff;
    width: 59%;
    margin: 0 auto !important;
    position: relative;
    text-align: center;
    padding: 0 21px;
}
#case-main .tc-content{
    margin-left: -9px;
    margin-right: -26px;
}
#case-main  .tc-content p{
    font-family: 'Lora';
    font-style: italic;
    font-size: 17px;
    letter-spacing: 1px;
    line-height: 24px;
    color: #ffffff;
    margin-top: 17px;
    padding: 0 20px 60px 3px;
    letter-spacing: 0.3px;
}
.tc-job a{
    pointer-events:none;
    color:#757575;
}
@media screen and (min-width: 1320px){
#moreanli .tc-content p{
    margin: 20px 4px 10px 20px !important;
    text-align: justify;
}
}
.img-radius{
    border-top-left-radius: 13px;
    border-top-right-radius: 13px;
}
.ages{
        text-align: right;
        margin-top: 35px;
        margin-bottom: 100px;
        margin-right: 295px;
	}
    @media screen and (max-width: 1024px){
	.ages{
		margin-left: -12%;
	}	
	
}
@media screen and (min-width: 944px) and (max-width: 1340px){
    .inner{
        width: auto;

    }
   
}
@media screen and (min-width: 680px) and (max-width: 944px){
    .inner{
        width: auto;
        /* margin-top: 30px; */
    }
}
@media screen and (min-width: 404px) and (max-width: 680px){
    .inner{
        width: auto;
        /* margin-top: 40px; */
    }
}
@media screen and (min-width: 324px) and (max-width: 404px){
    .inner{
        width: auto;
        zoom:0.8;
        
    }
}
@media screen and (min-width: 270px) and (max-width: 324px){
    .inner{
        width: auto;
        zoom:0.8;
        
    }
}
@media screen and (max-width: 269px){
    .inner{
        width: auto;
        zoom:0.8;
        
    }
}
@media screen and (min-width: 1100px){
    #all .swiper-slide{
        width: 33.5% !important;
    }
}
@media screen and (min-width: 554px) and (max-width: 1099px){
    #all .swiper-slide{
        width: 50.3% !important;
    }
}
#singleanli .swiper-button-prev{
    margin-left: 20px;
    width: 20px;
}
#singleanli .swiper-button-next{
    margin-right: 10px;
    width: 20px;
}
@media screen and (max-width: 553px){
    #singleanli .swiper-button-next{
        margin-right: 15px !important;
    }
}
</style>

        
        



<div id="case-main">

    <div class="inner">
    
        <div id="singleanli" class="case-content" style="position: relative;overflow: hidden;">
        <!-- 更多案例左右切换按钮 -->
            <!-- <div class="swiper-button-prev swiper-button-white"></div> -->
            <!-- <div class="swiper-button-next swiper-button-white"></div> -->
  
        <ul id="all" style="list-style:none">
            
        <div class="row-fluid margin-bottom-40 swiper-container">
        <div class="recent-work swiper-wrapper">
        
          <?php
            //cat是要调用的分类ID,&showposts=5是需要显示的文章数量
            query_posts('showposts=999&cat='.$_GET['cat']);
          ?>

          <!-- 文章列表 -->
          <?php while (have_posts()) : the_post(); ?>
         
          
        <li class="swiper-slide">
        
       

          <div id="moreit" class="item" style="max-height: 800px;position: relative;">
                <div class="tc-item">
                    <a href="<?php the_permalink(); ?>">
                    <img class="img-radius" src="<?php $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(380)); echo $array_image_url[0]; ?>" alt="<?php the_title_attribute(); ?>">
                    <div id="moreanli" class="main-content">
                        <div class="servicep">
                        <p class="tc-name colorf"><?php the_title(); ?></p>
                        <p class="tc-job">
                        <?php the_tags("<span style='font-size: 15px;'>",'  、  ','</span>');?>
                        </p>
                        </div>
                        <div class="t-m-footer tc-content"> 
                       
                        <?php the_excerpt(0, 20,"..."); ?>
                        
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            </li>
            
        
          <?php endwhile; wp_reset_query(); ?>
        
          </div>
          
</div>
        </ul> 

        </div>

    </div>
</div>
<script src="assets/swiper/swiper-4.4.1.min.js"></script>
 <script type="text/javascript" src="assets/swiper/jquery-1.8.2.min.js"></script>
 
 <!-- Initialize Swiper -->
 <script>
window.onload = function() {
		var mySwiper = new Swiper('.swiper-container', {
			slidesPerView: 4,
			slidesPerGroup:4,
			spaceBetween: 10,
            paginationClickable: true,
            

			breakpoints: {
				1340: {
					slidesPerView: 4,
					slidesPerGroup: 4,
					spaceBetween: 10,
				},
				900: {
					slidesPerView: 3,
					slidesPerGroup: 3,
					spaceBetween: 10,
				},
				460: {
					slidesPerView: 2,
					slidesPerGroup: 2,
					spaceBetween: 10,
				},
                100: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				},
			},
			navigation: {
                nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

		})
	}
 </script>


<?php get_footer(); ?>

