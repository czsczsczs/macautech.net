
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
#case-menu .item .live {
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
        height: 145px !important;
        display: flex;
        flex-direction: row;
        margin-left: 3%;
        margin-right: 3%;
    }
}
@media screen and (max-width: 539px){
    #case-menu{
        height: 215px !important;   
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
        height: 268px !important;   
    }
}
@media screen and (max-width: 269px){
    #case-menu{
        height: 478px !important;   
    }
}
</style>

<!-- <div id="case-menu">
  <div class="inner"> -->
  <?php
    // 加载案例分类
    // $isLive1='';
    // if($parentCatId == $now_cat) {
    //   $isLive1 = 'live';
    // }
    // echo '<div class="item"> <a class="'.$isLive1.'" href="./?cat='.$parentCatId.'&page_id='.$pageId.'">全部</a></div>';


    // foreach($catetorys as $category) {
    //     $isLive='';
    //     if($category->term_id == $now_cat) {
    //       $isLive = 'live';
    //     }
    //     echo '<div class="item"><a class="'.$isLive.'" href="./?cat=' . get_cat_ID( $category->name ). '&page_id='.$pageId . '">' . $category->name.'</a> </div> ';
       
    //   }
    ?>
  <!-- </div>
</div> -->

