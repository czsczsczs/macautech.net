<style type="text/css">
@media screen and (min-width: 540px) and (max-width: 809px){
    #case-menu .item{
        padding-top: 30px !important;
    }
}
body{
    overflow: hidden;
}
</style>
<?php
/*
    template name: VR(虛擬現實)
    description: more@poptek.cn
*/
get_header();
require_once('services-header.php'); 
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles-merged.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" type="text/css">
<style type="text/css">
li{
    line-height: 28px !important;
    font-size: 19px !important;
}
@media screen and (min-width: 1200px){
    .vrcon{
      width: 1310px !important;
    }  
    #secp .container {
    width: 1170px;
    overflow: hidden;
}
}
@media screen and (min-width: 992px) and (max-width: 1200px){
    .vrcon{
      width: 815px !important;
    } 
    #secp .container {
    width: 970px;
    overflow: hidden;
}
}
@media screen and (min-width: 768px) and (max-width: 992px){
    #secp .container {
    width: 750px !important;
    overflow: hidden;
}
}
#secp .container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    overflow: hidden;
}
.product-try-out {
    width: 56% !important;
    background-color: #6ca82e !important;
    margin: 0 auto !important;
    margin-top: 5rem !important;
    padding: 1.6rem !important;
    border-radius: 2rem !important;
    color: #fff !important;
    text-align: center !important;
    font-size: 2.6rem !important;
    letter-spacing: .8rem !important;
}
.ee{
    overflow: unset !important;
}
@media screen and (min-width: 1201px){
    .pramat{
        height: 529px;
}
}
@media screen and (min-width: 656px)and (max-width: 1201px){
    .ee{
        height: 441px !important;
    }
}
@media screen and (min-width: 541px)and (max-width: 655px){
    .ee{
        height: 356px !important;
    }
}
@media screen and (min-width: 451px)and (max-width: 540px){
    .ee{
        height: 305px !important;
    }
}
@media screen and (min-width: 391px)and (max-width: 450px){
    .ee{
        height: 265px !important;
    }
}
@media screen and (max-width: 390px){
    .ee{
        height: 265px !important;
    }
}

@media screen and (min-width: 655px) and (max-width: 991px){
    .pramat{
        height: 509px;
}
}
@media screen and (min-width: 540px) and (max-width: 655px){
    .pramat{
        height: 428px;
}
}
@media screen and (min-width: 450px) and (max-width: 540px){
    .pramat{
        height: 348px;
}
}
@media screen and (min-width: 390px) and (max-width: 450px){
    .pramat{
        height: 301px;
}
}
@media screen and (min-width: 220px) and (max-width: 390px){
    .pramat{
        height: 253px;
}
}
@media screen and (min-width: 490px) and (max-width: 991px){
    .prs{
        height: 325px;
    }
}
@media screen and (max-width: 490px){
    .prs{
        height: 137px;
    }
}
.icon{
    width: 100px;
    margin: auto;
}

</style>
<div id="secp">
<section class="probootstrap-hero" style="background: #efefef;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center probootstrap-hero-text pb0 probootstrap-animate" data-animate-effect="fadeIn">
            <h1 style="padding-bottom:1rem"><span  style="font-size:7rem;font-weight:lighter;">VR(虛擬現實)</span></h1>
			<h1 style="font-weight:lighter;font-size: 40px;">服務介紹</h1>
            <!-- <p>Prosecute to the end</p> -->
          </div>
        </div>

        <div class="row probootstrap-feature-showcase marginbot">
          <div class="col-md-4 col-md-push-8 probootstrap-showcase-nav probootstrap-animate">
            <ul>
              <li class="active">
                <a href="#">拍攝服務</a>
                <p class="ap" style="color:#a0a0a0;">您無需親自拍攝，前期拍攝只需交給我們。</p>
              </li>
              <li>
                <a href="#">技術合成</a>
                <p class="ap" style="color:#a0a0a0;">專業技術人員可以將拍攝的局部照片合成。</p>
              </li>
              <li>
                <a href="#">VR網頁的設計</a>
                <p class="ap" style="color:#a0a0a0;">專業網頁開發技術解，VR場景展示的問題。</p>
              </li>
              <!-- <li>
                <a href="#">高級寫字樓類展示</a>
                <p class="ap" style="color:#a0a0a0;">全方位展示有助於企業提高知名度，打造良好的企業形象。</p>
              </li> -->
            </ul>
          </div>
          <div class="col-md-8 col-md-pull-4 probootstrap-animate pramat" style="position: relative;">
            <div class="probootstrap-home-showcase-wrap prs">
              <div class="probootstrap-home-showcase-inner ee">
                <div class="probootstrap-chrome">
                  <div><span></span><span></span><span></span></div>
                </div>
                <div class="probootstrap-image-showcase" style="width:100%;height:100%">
                  <ul class="probootstrap-images-list" style="width:100%;height:100%">
                    <li class="active"><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/1.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/2-1.jpg" alt="Image" class="img-responsive"></li>
                    <li><iframe style="width:100%;height:100%" src="https://www.iam.gov.mo/basiclaw/VR/tc/index.html?scene_id=67645863" class="img-responsive"></iframe></li>
                    <!-- <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/02/4.jpg" alt="Image" class="img-responsive"></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="vrcon container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h1 style="font-size:6rem;font-wieght:">宣傳優勢</h1>
            <p class="lead"></p>
          </div>
        </div>
        <!-- END row -->
        <div class="row probootstrap-gutter60">
          <div class="col-md-3 probootstrap-animate" data-animate-effect="fadeInLeft">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/图片1-2.png">
                <!-- <i class="icon-mobile3"></i> -->
              </div>
              <div class="text">
                <h3>高保真效果</h3>
                <p style="color:#a0a0a0;">真實性強，實景場景全方位<br>拍攝，真實逼真還原場景。</p>
              </div>  
            </div>
          </div>
          <div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/图片2-1.png">
                <!-- <i class="icon-presentation"></i> -->
              </div>
              <div class="text">
                <h3>節約成本</h3>
                <p style="color:#a0a0a0;">開發週期短，開發成本低，比<br>三維製作速度快，時效性強。</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 probootstrap-animate" data-animate-effect="fadeInRight">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/图片3-2.png">
                <!-- <i class="icon-circle-compass"></i> -->
              </div>
              <div class="text">
                <h3>畫質清晰</h3>
                <p style="color:#a0a0a0;">畫面品質高，高清晰度的全<br>屏場景，令細節表現完美。</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 probootstrap-animate" data-animate-effect="fadeInLeft">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/图片4-1.png">
                <!-- <i class="icon-lightbulb"></i> -->
              </div>
              <div class="text">
                <h3>數據量小</h3>
                <p style="color:#a0a0a0;">播放設備硬體要求低，數據量<br>小，非常適合網路訪問觀看。</p>
              </div>  
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!--<section class="probootstrap-section pb0" style="background: #efefef;">
      <div class="container">
     
        <div class="row probootstrap-feature-showcase probootstrap-animate">
          <div class="col-md-4 probootstrap-showcase-nav">
            <ul>
              <li class="active">
                <a href="#">高保真3D效果</a>
              </li>
              <li>
                <a href="#">VR宣傳優勢</a>
              </li>
              <li>
                <a href="#">其他服務</a>
              </li>
            </ul>
          </div>
          <div class="col-md-8 probootstrap-animate pramat" style="position: relative;">
            <div class="probootstrap-home-showcase-wrap prs">
              <div class="probootstrap-home-showcase-inner ee">
                <div class="probootstrap-chrome">
                  <div><span></span><span></span><span></span></div>
                </div>
                <div class="probootstrap-image-showcase">
                  <ul class="probootstrap-images-list">
                    <li class="active"><img src="<?php //echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/5-2.jpg" alt="Image" class="img-responsive"></li>
                    <li>               <img src="<?php //echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/6-2.jpg" alt="Image" class="img-responsive"></li>
                    <li>               <img src="<?php //echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/7.jpg" alt="Image" class="img-responsive"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>-->
</div>
<section id="serveranli" class="probootstrap-section pb0" style="background: #efefef;">
  
          <?php
          /**
           * The function is located in the following path
           * deep/src/class-deep-theme.php
           */
          the_content("");
          ?>
  
</section>
            

<div id="secp">
    <section id="Contact" class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-border-top">
      <div class="container">
        <div class="row">
          <div class="section-heading probootstrap-animate" style="text-align: center;">
            <h1 style="font-size:6rem;font-weight: bold;">歡迎聯繫諮詢</h1>
            <p class="lead">Contact information</p>
          </div>
        </div>
        <div class="row" style="display:flex;justify-content: space-around;">
          <div class="col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn" style="text-align: center;">
            <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/client_12.png" alt="oa-img">
            <div class="call-Manner">
              <p style="font-size: 2.2rem;font-weight: 900;color: #000;">傳真</p>
              <span>Fax     28354350<br/><!--FAX 0756-8890938--></span>
            </div>
          </div>
          <div class="col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn" style="text-align: center; ">
            <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/client_2.png" alt="oA-img">
            <div  class="call-Manner">
              <p style="font-size: 2.2rem;font-weight: 900;color: #000;">郵件</p>
              <span>info@MacauTech.net</span>
            </div>
          </div>
        </div>
		<div style="text-align:center;margin:2rem 0 6rem 0;">
			<div>
				<image src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/图片4.png">
        
				<p style="font-size:2.6rem;margin-top:1.2rem;">掃碼添加微信</p>
			</div>
	  </div>
        <div>
            <!-- <a target="_blank" href="http://www.issuetracker.cn"><p class="product-try-out">查看案列</p></a> -->
        </div>
      </div>
    </section> 
    </div>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.min.js"></script>
	<script type="text/javascript">
		function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
            var flag = true;
            for(var v = 0; v < Agents.length; v++) {
               if(userAgentInfo.indexOf(Agents[v]) > 0) {
                  flag = false;
                  break;
               }
            }
            return flag;
         }
         if(/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {        
            //alert("IOS端");
         } else if(/(Android)/i.test(navigator.userAgent)) {
            //alert("安卓端");
         } else {
           
         };
	</script>
    
    
<?php
/**
 * The function is located in the following path
 * deep/src/class-deep-theme.php
 */
// the_content();

get_footer();



