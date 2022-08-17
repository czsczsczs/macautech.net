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
    template name: 3D掃描
    description: more@poptek.cn
*/
// echo "1111";
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
        height: 510px !important;
}
}
@media screen and (min-width: 541px)and (max-width: 655px){
    .ee{
        height: 427px !important;
    }
}
@media screen and (min-width: 451px)and (max-width: 540px){
    .ee{
        height: 347px !important;
    }
}
@media screen and (min-width: 391px)and (max-width: 450px){
    .ee{
        height: 301px !important;
    }
}
@media screen and (max-width: 390px){
    .ee{
        height: 253px !important;
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
.iframecon{
	height:500px;
	overflow: hidden;
}
.ddd{
    height: 500px;
    width: inherit;
    object-fit: unset;
}
.ddds {
    height: 610px;
    margin-top: -60px;
    width: auto;
    width: -webkit-fill-available;
    object-fit: unset;
}
@media screen and (min-width: 769px) and (max-width: 1200px){
	.ddds{
    height: 610px;
}
}
@media screen and (min-width: 656px) and (max-width: 768px){
	.iframecon{
	height:480px;
}
 .ddds{
    height: 590px;
}
}
@media screen and (min-width: 541px) and (max-width: 655px){
	.iframecon{
	height:400px;
}
 .ddds{
    height: 510px;
}
}
@media screen and (min-width: 451px) and (max-width: 540px){
	.iframecon{
	height:320px;
}
 .ddds{
    height: 430px;
}
}
@media screen and (min-width: 391px) and (max-width: 450px){
	.iframecon{
	height:270px;
}
 .ddds{
    height: 372px;
}
}
@media screen and (max-width: 390px){
	.iframecon{
	height:223px;
}
 .ddds{
    height: 325px;
}
}
@media screen and (min-width: 656px) and (max-width: 1200px){
    .ddd{
    height: 480px;
}
}
@media screen and (min-width: 541px) and (max-width: 655px){
    .ddd{
    height: 397px;
}
  
}
@media screen and (min-width: 451px) and (max-width: 540px){
    .ddd{
    height: 317px;
}
}
@media screen and (min-width: 391px) and (max-width: 450px){
    .ddd{
    height: 271px;
}
}
@media screen and (max-width: 390px){
    .ddd{
    height: 223px;
}
}
@media screen and (max-width: 600px){
iframe {
        overflow: scroll;
        -webkit-overflow-scrolling: touch;
        min-width: 100%;
        *width:100%;
        width:1px !important;
    }
}
</style>
<div id="secp">
<section class="probootstrap-hero" style="background: #efefef;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center probootstrap-hero-text pb0 probootstrap-animate" data-animate-effect="fadeIn">
            <h1 style="padding-bottom:1rem"><span  style="font-size:7rem;font-weight:lighter;">3D掃描</span></h1>
			<h1 style="font-weight:lighter;font-size: 40px;">服務介紹</h1>
            <!-- <p>Prosecute to the end</p> -->
          </div>
        </div>

        <div class="row probootstrap-feature-showcase marginbot">
          <div class="col-md-4 col-md-push-8 probootstrap-showcase-nav probootstrap-animate">
            <ul>
              <li class="active">
                <a href="#">3D掃描服務</a>
                <p class="ap" style="color:#a0a0a0;">您無需親自進行3D掃描，前期只需交給我們。</p>
              </li>
              <li>
                <a href="#">建立及完善三維數據</a>
                <p class="ap" style="color:#a0a0a0;">專業設計師精修模型的整體和細節，建立高精度的3D數字模型。</p>
              </li>
              <!-- <li>
                <a href="#">人物全身掃描</a>
                <p class="ap" style="color:#a0a0a0;">3D數位影像記錄，特殊瞬間360°永恆保存，可用於人物雕塑、3D投影等領域。</p>
              </li> -->
              <li>
                <a href="#">3D網頁的設計與開發</a>
                <p class="ap" style="color:#a0a0a0;">專業網頁開發技術解決3D數字模型展示的問題。</p>
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
                    <!-- <li class="active"><iframe class="ddd" src="<?php echo esc_url(home_url('/'));?>3dsan/wenbo/" class="img-responsive" frameborder="0" scrolling="no"></iframe></li>
                    <li><div class="iframecon"><iframe  class="ddds" src="https://sketchfab.com/models/6165e87f330347c1b0e01916295ab4e5/embed?autostart=1&internal=1&tracking=0&ui_ar=0&ui_infos=0&ui_snapshots=1&ui_stop=0&ui_theatre=1&ui_watermark=0" class="img-responsive" frameborder="0" scrolling="no"></iframe></div></li>
                    <li><iframe class="ddd" src="<?php echo esc_url(home_url('/'));?>3dsan/product/" class="img-responsive" frameborder="0" scrolling="no"></iframe></li> -->
                    <li class="active"><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/001.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/002.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/003-1.png" alt="Image" class="img-responsive"></li>
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
        <div class="row probootstrap-gutter60">
          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeInLeft">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/03/高保真三維數據採集效果-1-1.png">
                <!-- <i class="icon-mobile3"></i> -->
              </div>
              <div class="text">
                <h3>高保真三維數據採集效果</h3>
                <!-- <p style="color:#a0a0a0;">高保真3D效果，最高精度達0.01mm，<br>真實逼真的還原表現。</p> -->
                <p style="color:#a0a0a0;">高保真三維採集效果，最高精度<br>達0.01 MM，真實的還原表現。</p>
              </div>  


            </div>
          </div>
          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/專業模型紋理貼圖處理.png">
                <!-- <i class="icon-presentation"></i> -->
              </div>
              <div class="text">
                <h3>專業模型紋理貼圖處理</h3>
                <p style="color:#a0a0a0;">專業設計師進行數據優化，完美<br>解決圖像色差和紋理接縫問題。</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeInRight">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/全價值鏈服務體系.png">
                <!-- <i class="icon-circle-compass"></i> -->
              </div>
              <div class="text">
                <h3>全價值鏈服務體系</h3>
                <p style="color:#a0a0a0;">提供H5/官網3D展示，VR/AR互<br>動解決方案、數據存儲等服務。</p>
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
                <a href="#">服務流程</a>

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
                    <li class="active"><img src="<?php //echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/5-5.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php //echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/7.jpg" alt="Image" class="img-responsive"></li>
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


    //      setIframeHeight(iframe) {
    //   let _this = this
    //   if (iframe) {
    //     let iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
    //     if (iframeWin.document.body) {
    //       let imgs = iframeWin.document.getElementsByTagName("iframe");
    //       for (let i = 0; i < imgs.length; i++) {
    //         imgs[i].style.maxWidth = "100%";
    //       }
    //       let a, b, c = 0;
    //       let timer = setInterval(function() {
    //         if (c == 1) {
    //           a = iframeWin.document.body.scrollHeight || iframeWin.document.body.scrollHeight;
    //         } else if (c == 10) {
    //           b = iframeWin.document.body.scrollHeight || iframeWin.document.body.scrollHeight;
    //           if (a == b) {
    //             clearInterval(timer);
    //           }
    //           c = 0;
    //         }
    //         c++;
    //         iframe.style.height = iframeWin.document.body.scrollHeight + "px" || iframeWin.document.documentElement.scrollHeight + "px";
    //       }, 800);
    //     }
    //   }
    // }
	</script>
    
    
<?php
/**
 * The function is located in the following path
 * deep/src/class-deep-theme.php
 */
// the_content();

get_footer();





