<?php
/*
    template name: --服務列表
    description: more@poptek.cn
*/
get_header();
?>
<style>
    html{
        overflow: scroll;
    }
.coen{
    text-align:center;
    margin:0 auto;
}
#case-main .item {
    position: relative;
    height: 700px;
    padding: 15px;
    float: left;
    margin: 10px 30px;
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
  /* height: 420px; */
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
    /* padding: 15px;
    height: 40%; */
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
#case-main  .tc-content p{
  font-family: 'Lora';
  font-style: italic;
  font-size: 17px;
  letter-spacing: 1px;
  line-height: 24px;
  color: #ffffff;
  margin-top: 17px;
  /* padding: 0 20px 60px 3px; */
  letter-spacing: 0.3px;
}
#case-main .iem{
    width: 410px;
    max-height: 800px;
    position: relative;
}
#case-main .cac{
    display: flex;
    flex-direction: row;
}
#case-main .uls{
    list-style:none;
    width: 1430px;
    margin: 0 auto;
}
.tc-job a{
  pointer-events:none;
  color:#757575;
}
.img-radius{
  border-top-left-radius: 13px;
  border-top-right-radius: 13px;
}
.ages{
      margin-top: 35px;
      margin-bottom: 100px;
  }

@media screen and (min-width: 1269px) and (max-width: 1410px){
    #case-main .cac {
        zoom: 0.9;
}
}
@media screen and (min-width: 1128px) and (max-width: 1269px){
    #case-main .cac {
        zoom: 0.8;
}
}
@media screen and (min-width: 987px) and (max-width: 1128px){
    #case-main .cac {
        zoom: 0.7;
}
}
@media screen and (min-width: 846px) and (max-width: 987px){
    #case-main .cac {
        zoom: 0.6;
}
}
@media screen and (min-width: 846px) and (max-width: 846px){
    #case-main .cac {
        zoom: 0.5;
}
}
@media screen and (min-width: 775px) and (max-width: 846px){
    #case-main .cac {
        zoom: 0.7;
        margin-left: 10%;
        margin-right: 5%;
}
}
@media screen and (min-width: 418px) and (max-width: 468px){
    #case-main .uls{
        zoom: 0.9;
    }
}
@media screen and (min-width: 370px) and (max-width: 418px){
    #case-main .uls{
        zoom: 0.8;
    }
}
@media screen and (min-width: 333px) and (max-width: 370px){
    #case-main .uls{
        zoom: 0.7;
    }
}
@media screen and (min-width: 280px) and (max-width: 333px){
    #case-main .uls{
        zoom: 0.6;
    }
}
@media screen and (max-width: 280px){
    #case-main .uls{
        zoom: 0.5;
    }
}
@media screen and (max-width: 775px){
    #case-main .uls{
        width:auto;
    }

    #case-main  .tc-content p{
        line-height: 28px;
    }
}

</style>
<div class="coen">
<!-- 案例菜单列表 -->
<?php require_once('case-header.php'); ?>





<?php while (have_posts()) : the_post(); ?>

<div id="case-main">
    <div class="inner">
        <div class="case-content cac">
        <ul id="all" class="uls">
          <?php
            //cat是要调用的分类ID,&showposts=5是需要显示的文章数量
            query_posts('showposts=999&cat='.$now_cat);
          ?>

          <!-- 文章列表 -->
          <?php while (have_posts()) : the_post(); ?>
         



        <li>
            
          <div class="item iem">
                <div class="tc-item">
                    <a href="<?php the_permalink(); ?>">
                    <img class="img-radius" src="<?php $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(380)); echo $array_image_url[0]; ?>" alt="<?php the_title_attribute(); ?>">
                    <div class="main-content">
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

        </ul> 
        </div>

    </div>
</div>
<div class="ages"><span id="a2" style="display:none;"></span><span id="a1" style="display:none;"></span><span id="a3"></span></div>

<?php endwhile;  ?>
</div>
<?php get_footer(); ?>

<script>
	var a = document.getElementById("all").getElementsByTagName("li");
	var zz =new Array(a.length);
	for(var i=0;i <a.length;i++){ 
		zz[i]=a[i].innerHTML;
    } //div的字符串数组付给zz
	var pageno=1 ;              //当前页
	var pagesize=6;            //每页多少条信息
	if(zz.length%pagesize==0){
		var  pageall =zz.length/pagesize ;
	}else{
		var  pageall =parseInt(zz.length/pagesize)+1;  
	}   //一共多少页     
	
	function change(e){
		pageno=e;
		if(e<1){ //如果输入页<1页
			e=1;pageno=1;//就等于第1页 ， 当前页为1
		}
	    if(e>pageall){  //如果输入页大于最大页
			e=pageall;pageno=pageall; //输入页和当前页都=最大页
		}
		document.getElementById("all").innerHTML=""//全部清空
			for(var i=0;i<pagesize;i++){
				var div =document.createElement("li")//建立div对象
				div.innerHTML=zz[(e-1)*pagesize+i]//建立显示元素
				document.getElementById("all").appendChild(div)//加入all中 
				if(zz[(e-1)*pagesize+i+1]==null) break;//超出范围跳出
	        }
		var ye="";
		for(var j=1;j<=pageall;j++){
	 		if(e==j){
				ye=ye+"<span><a href='#' onClick='change("+j+")' style='padding-top:7px;padding-bottom:7px;padding-right:12px;padding-left:12px;border-radius: 35px;color:white;background-color:#6bb24d;text-decoration:none'>"+j+"</a></span> "
			}else{
				ye=ye+"<a href='#' onClick='change("+j+")' style='padding-top:7px;padding-bottom:7px;padding-right:12px;padding-left:12px;border-radius: 35px;color:#6bb24d;border:1px solid #6bb24d;background-color:#FFFFFF;text-decoration:none'>"+j+"</a> "
			}
		}
		document.getElementById("a1").innerHTML=pageall;
		document.getElementById("a2").innerHTML=pageno;
		document.getElementById("a3").innerHTML=ye;
	}
	change(1);
</script>
