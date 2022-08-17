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
    template name: 小遊戲開發
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
    #secp .container {
    width: 1170px !important;
    overflow: hidden;
}
}
@media screen and (min-width: 992px) and (max-width: 1200px){
    #secp .container {
    width: 970px !important;
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
        height: 440px !important;
    }
}
@media screen and (min-width: 541px)and (max-width: 655px){
    .ee{
        height: 360px !important;
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
        height: 255px !important;
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
@media screen and (min-width: 600px){
  .wid{
    width:33.3%;
  }
  .fle{
    display: flex;
    flex-flow: wrap;
  }
}
</style>
<div id="secp">
<section class="probootstrap-hero" style="background: #efefef;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center probootstrap-hero-text pb0 probootstrap-animate" data-animate-effect="fadeIn">
            <h1 style="padding-bottom:1rem"><span  style="font-size:7rem;font-weight:lighter;">小游戲開發</span></h1>
			<h1 style="font-weight:lighter;font-size: 40px;">服務介紹</h1>
            <!-- <p>Prosecute to the end</p> -->
          </div>
        </div>

        <div class="row probootstrap-feature-showcase marginbot">
          <div class="col-md-4 col-md-push-8 probootstrap-showcase-nav probootstrap-animate">
            <ul>
              <li class="active">
                <a href="#">遊戲策劃</a>
               <p class="ap" style="color:#a0a0a0;">根據客戶主題策劃及設計整個遊戲的玩法和流程。</p>
              </li>
              <li>
                <a href="#">確定遊戲核心玩法</a>
               <p class="ap" style="color:#a0a0a0;">不同遊戲種類有不同的玩法理念，必須在遊戲設計開始確定。</p>
              </li>
              <li>
                <a href="#">設計遊戲人物</a>
               <p class="ap" style="color:#a0a0a0;">根據客戶主題設計遊戲人物，造型，動作。</p>
              </li>
              <li>
                <a href="#">設計遊戲場景</a>
               <p class="ap" style="color:#a0a0a0;">設計遊戲的場景，關卡，各種道具等。</p>
              </li>
              <li>
                <a href="#">編寫及優化遊戲程式代碼</a>
               <p class="ap" style="color:#a0a0a0;">確定好所有玩法流程後編寫程序，並進行後期優化。</p>
              </li>
            </ul>
          </div>
          <div class="col-md-8 col-md-pull-4 probootstrap-animate pramat" style="position: relative;">
            <div class="probootstrap-home-showcase-wrap prs">
              <div class="probootstrap-home-showcase-inner ee">
                <div class="probootstrap-chrome">
                  <div><span></span><span></span><span></span></div>
                </div>
                <div class="probootstrap-image-showcase">
                  <ul class="probootstrap-images-list">
                    <li class="active"><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/1遊戲策劃.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/2玩法.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/3遊戲人物設計.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/4場景定制.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/5遊戲編程.jpg" alt="Image" class="img-responsive"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h1 style="font-size:6rem;font-wieght:">宣傳優勢</h1>
            <p class="lead"></p>
          </div>
        </div>
        <!-- END row -->
        <div class="row probootstrap-gutter60 fle">
          <div class="col-md-4 probootstrap-animate wid" data-animate-effect="fadeInLeft">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/印象深.jpg">
                <!-- <i class="icon-mobile3"></i> -->
              </div>
              <div class="text">
                <h3>印象深</h3>
                <!-- <p style="color:#a0a0a0;">專案進度即時通知，助您瞭解情況掌握一切，隨時跟進安排。</p> -->
              </div>  
            </div>
          </div>
          <div class="col-md-4 probootstrap-animate wid" data-animate-effect="fadeIn">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/趣味多.jpg">
                <!-- <i class="icon-presentation"></i> -->
              </div>
              <div class="text">
                <h3>趣味多</h3>
                <!-- <p style="color:#a0a0a0;">結合企業特點，提供合適企業的官網設計方案，清晰展現企業服務實力。</p> -->
              </div>
            </div>
          </div>
          <div class="col-md-4 probootstrap-animate wid" data-animate-effect="fadeInRight">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/易推廣.jpg">
                <!-- <i class="icon-circle-compass"></i> -->
              </div>
              <div class="text">
                <h3>易推廣</h3>
                <!-- <p style="color:#a0a0a0;">提供一對一的定制建站方案，助力企業全面展示品牌優勢，擴大商業影響力。</p> -->
              </div>
            </div>
          </div>

          <div class="col-md-4 probootstrap-animate wid" data-animate-effect="fadeInLeft">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/多渠道.jpg">
                <!-- <i class="icon-lightbulb"></i> -->
              </div>
              <div class="text">
                <h3>多渠道</h3>
                <!-- <p style="color:#a0a0a0;">緊跟互聯網發展趨勢，提供最新最及時的技術支持，提高網站的用戶體驗。</p> -->
              </div>  
            </div>
          </div>


          <div class="col-md-4 probootstrap-animate wid" data-animate-effect="fadeIn">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/體驗優.jpg">
                <!-- <i class="icon-lightbulb"></i> -->
              </div>
              <div class="text">
                <h3>體驗優</h3>
                <!-- <p style="color:#a0a0a0;">緊跟互聯網發展趨勢，提供最新最及時的技術支持，提高網站的用戶體驗。</p> -->
              </div>  
            </div>
          </div>

          <div class="col-md-4 probootstrap-animate wid" data-animate-effect="fadeInRight">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/回報高.jpg">
                <!-- <i class="icon-lightbulb"></i> -->
              </div>
              <div class="text">
                <h3>回報高</h3>
                <!-- <p style="color:#a0a0a0;">緊跟互聯網發展趨勢，提供最新最及時的技術支持，提高網站的用戶體驗。</p> -->
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
                    <li class="active"><img src="<?php //echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/7.jpg" alt="Image" class="img-responsive"></li>
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



