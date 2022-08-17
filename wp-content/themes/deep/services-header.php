
<?php
//案例列表页面id
 $pageId=7020;
 //案例分类id
 $parentCatId=5;

 //当前选中分类
 $now_cat = $_GET['cat'];

 $args=array(
  // 'orderby' => 'name',
  //'order' => 'DESC',
  'hide_empty' => false,
  'parent'=> $parentCatId
);
//案例下的所有子分类列表
$catetorys=get_categories( $args );
//echo "<br>1=>";var_dump(get_categories( $args ));
?>

<style>
    #case-menu {
    width: 100%;
    height: 125px;
    overflow: hidden;
    background: #fff;
}
  
  #case-menu .inner {
    position: relative;
    overflow: hidden;
    height: 100%;
    width: 1440px;
    margin: 0 auto;
    font-size: 17px;
    
}


  #case-menu .item {
    position: relative;
    width: 135px;
    text-align: center;
    float: left;
    padding-top: 50px;
}
#case-menu .item .live:hover {
    color: #ffffff !important;
    text-decoration: none;
    background-color: #6bb24d;
    padding: 6px;
    padding-bottom: 3px;
    border-radius: 12px;
}
#case-menu .item .liver {
    color: #ffffff !important;
    text-decoration: none;
    background-color: #6bb24d;
    padding: 6px;
    padding-bottom: 3px;
    border-radius: 12px;
}
#case-menu a {
    color: #6bb24d !important;
}
#case-menu a:hover {
    color: #ffffff !important;
    text-decoration: none;
    background-color: #6bb24d;
    padding: 6px;
    padding-bottom: 3px;
    border-radius: 12px;
}
@media screen and (max-width: 945px){
    #case-menu{
        height: 180px !important;
        display: flex;
        flex-direction: row;
        margin-left: 3%;
        margin-right: 3%;
    }
}
@media screen and (min-width: 540px) and (max-width: 809px){
    #case-menu{
        height: 145px !important;
    }
}
@media screen and (max-width: 539px){
    #case-menu{
        height: 275px !important;   
    }
}
@media screen and (min-width: 480px) and (max-width: 539px){
    #case-menu{
        margin-left: 10%;
        margin-right: 10%; 
    }
}
@media screen and (min-width: 450px) and (max-width: 480px){
    #case-menu{
        margin-left: 7%;
        margin-right: 7%; 
    }
}
@media screen and (min-width: 430px) and (max-width: 450px){
    #case-menu{
        margin-left: 6%;
        margin-right: 6%; 
    }
}
@media screen and (min-width: 405px) and (max-width: 430px){
    #case-menu{
        margin-left: 3%;
        margin-right: 3%; 
    }
}
@media screen and (min-width: 370px) and (max-width: 405px){
    #case-menu{
        margin-left: 13%;
        margin-right: 13%; 
    }
}
@media screen and (min-width: 335px) and (max-width: 370px){
    #case-menu{
        margin-left: 11%;
        margin-right: 11%; 
    }
}
@media screen and (min-width: 300px) and (max-width: 335px){
    #case-menu{
        margin-left: 6%;
        margin-right: 6%; 
    }
}
@media screen and (max-width: 404px){
    #case-menu{
        height: 348px !important;   
    }
}
@media screen and (max-width: 269px){
    #case-menu{
        height: 588px !important;   
    }
}
.probootstrap-animate {
    opacity: unset !important;
}
.owl-dot{
    background: unset !important;
}
.imagecarousal{
    margin:auto !important;
}
@media screen and (min-width: 600px) and (max-width: 1876px){
    .imagecarousal .owl-prev{
          margin-top: -8.8% !important;
          height: 83px !important;
    }
    .imagecarousal .owl-next{
          margin-top: -130px !important;
          height: 130px !important;
    }
}
.footermax .elementor-heading-title{
        -webkit-text-stroke: unset;
        font-size: 28px;
        font-weight: 100;
}
.footer600 .elementor-heading-title{
        -webkit-text-stroke: unset;
        font-weight: 100;
        font-size: 22px;
}
</style>

<!-- <div id="case-menu">
  <div class="inner">
  
    <div class="item"><a id="u" class="live" href="">全部</a></div>
    <div class="item"><a id="u0" class="live" href="<?php //echo esc_url(home_url('/'));?>services/software/">軟件開發</a></div>
    <div class="item"><a id="u1" class="live" href="<?php //echo esc_url(home_url('/'));?>services/website/">網站開發</a></div>
    <div class="item"><a id="u2" class="live" href="<?php //echo esc_url(home_url('/'));?>services/wechat/">微信生態</a></div>
    <div class="item"><a id="u3" class="live" href="<?php //echo esc_url(home_url('/'));?>services/game/">小遊戲開發</a></div>
    <div class="item"><a id="u4" class="live" href="<?php //echo esc_url(home_url('/'));?>services/animation/">動畫製作</a></div>
    <div class="item"><a id="u5" class="live" href="<?php //echo esc_url(home_url('/'));?>services/vr/">VR(虛擬現實)</a></div>
    <div class="item"><a id="u6" class="live" href="<?php //echo esc_url(home_url('/'));?>services/3d/">3D掃描</a></div> 


 
  </div>
</div> -->
<!-- <script type="text/javascript">
    var url = window.location.href;
    
    if(url.match("software")){
        document.getElementById('u0').setAttribute('class','liver');
    }else if(url.match("website")){
        document.getElementById('u1').setAttribute('class','liver');
    }else if(url.match("wechat")){
        document.getElementById('u2').setAttribute('class','liver');
    }else if(url.match("game")){
        document.getElementById('u3').setAttribute('class','liver');
    }else if(url.match("animation")){
        document.getElementById('u4').setAttribute('class','liver');
    }else if(url.match("vr")){
        document.getElementById('u5').setAttribute('class','liver');
    }else if(url.match("3d")){
        document.getElementById('u6').setAttribute('class','liver');
    }
</script> -->
