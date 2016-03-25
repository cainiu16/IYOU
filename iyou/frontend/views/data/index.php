

<?php
use yii\helpers\Html;
$session = Yii::$app->session;
$session->open();
?>
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				
				   <?php if($session['u_name']){?>
					 <h1>欢迎<font color="red"><?php echo $session['u_name']?></font>光临爱游网</h1>
				   	<?php }else{ ?>
						<h1>欢迎光临爱游网</h1>
                   <ul>

				 	<li><a class="sub" href="index.php?r=login/login">登录</a></li>
					<li><a class="art" href="index.php?r=register/register">注册</a></li>
			      </ul>
			       <?php
				   	}
				   ?>
				
			</div>	
		</div>
	</div>
<!--banner-->
<!--slide-->
<div class="gallery-cursual">
<!-- requried-jsfiles-for owl -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script>
$(document).ready(function() {
$("#owl-demo").owlCarousel({
items : 5,
lazyLoad : true,
autoPlay : true,
pagination : false,
});
});
</script>
<!-- //requried-jsfiles-for owl -->
<!-- start content_slider -->
<div id="owl-demo" class="owl-carousel text-center">
<!-- <!-- 轮播开始 -->
<?php foreach ($row as $k=>$v) {
   if($k==0){
	?>
   <div class="item g1 popup-with-zoom-anim" href="#small-dialog">
<img class="lazyOwl" src="http://<?php echo $v['i_img'];?>" alt="name">
<div class="caption">
<h3><?php echo $v['i_content'];?></h3>
<div class="s-btn">
<a href="#">点击显示</a>
</div>
</div>
</div> 
<?php } else {?>
<div class="item g1 popup-with-zoom-anim" href="#small-dialog<?php echo $k;?>">
<img class="lazyOwl" src="http://<?php echo $v['i_img'];?>" alt="name">
<div class="caption">
<h3><?php echo $v['i_content'];?></h3>
<div class="s-btn">
<a href="#">点击显示</a>
</div>
</div>
</div>

<?php } }?>

<!-- 轮播结束 -->

</div>
<!--//sreen-gallery-cursual---->
<!-- caption-popup -->


<!-- 点击轮播图显示 -->
<?php foreach ($row as $k=>$v){  
     if($k==0){
	?>

<div class="caption-popup">
<div id="small-dialog" class="mfp-hide innercontent">
<h4><?php echo $v['i_content'];?></h4>
<img class="img-responsive cap" src="http://<?php echo $v['i_img'];?>" title="<?php echo $v['i_content'];?>" />
<p><?php echo $v['i_desc'];?></p>
<a class="morebtn" href="#">ReadMore</a>
</div>						  
</div>
<?php } else { ?>
<div class="caption-popup">
<div id="small-dialog<?php echo $k;?>" class="mfp-hide innercontent">
<h4><?php echo $v['i_content'];?></h4>
<img class="img-responsive cap" src="http://<?php echo $v['i_img'];?>" title="<?php echo $v['i_content'];?>" />
<p><?php echo $v['i_desc'];?></p>
<a class="morebtn" href="#">ReadMore</a>
</div>						  
</div>
<?php }}?>

<!-- 点击轮播图显示结束 -->

<!----//fea-video---->
<script>
$(document).ready(function() {
$('.popup-with-zoom-anim').magnificPopup({
	type: 'inline',
	fixedContentPos: false,
	fixedBgPos: true,
	overflowY: 'auto',
	closeBtnInside: true,
	preloader: false,
	midClick: true,
	removalDelay: 300,
	mainClass: 'my-mfp-zoom-in'
});
																
});
</script>	
</div>
<!-- /caption-popup -->
<!---pop-up-box---->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="js/owl.carousel.js"></script>
<!---//pop-up-box---->
<!--slide-->
<!--address-->
<div class="address">
<div class="container">
<div class="address-top">
<p>最热景点</p>
</div>
</div>
</div>
<!--address-->
<!--articles-->
<div class="articles">
<div class="container">
<div class="articles-top">


<!-- 热门景点循环开始 -->

<!-- <div class="col-md-4 articles-left"> -->
<div>
<?php foreach ($re as $k=>$v){?>
   <?php 
   if(($k+3)%3==0)
   { ?>
   </div><div class="col-md-4 articles-left">
  <?php } else{
   ?>
<div class="art-one">
<a href="#"><img src="http://<?php echo $v['t_p_img'];?>" alt=""  title="<?php echo $v['t_name'];?>"/></a>
<div class="art-btm">
	<a href="#"><h3><?php echo $v['t_name'];?></h3></a>
	<p><?php echo $v['t_content'];?></p>
</div>
</div>
<?php } ?>
<?php }?>
</div>


<!-- 热门景点循环结束 -->

</div>
<div class="col-md-4 articles-left">
<h4>酒店信息</h4>
<div class="week">

<!-- 酒店信息循环开始 -->
   <?php foreach ($res as $k=>$v) {?>
     <div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="http://<?php echo $v['g_p_img'];?>" class="b-link-stripe b-animate-go   swipebox"  title="<?php echo $v['g_name'];?>">
		     <img src="http://<?php echo $v['g_p_img'];?>" title="<?php echo $v['g_name'];?>"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>

   <?php }?>
   
<!-- 酒店信息循环结束 -->
</div>

<!-- <div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="images/week-3.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
		     <img src="images/week-3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>


<div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="images/week-4.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
		     <img src="images/week-4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>


<div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="images/week-5.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
		     <img src="images/week-5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>


<div class="clearfix"></div>
</div>
<div class="week-btm">

<div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="images/week-6.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
		     <img src="images/week-6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>


<div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="images/week-7.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
		     <img src="images/week-7.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>


<div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="images/week-8.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
		     <img src="images/week-8.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>

<div class="clearfix"></div>
</div>
<div class="week-btm">


<div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="images/week-9.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
		     <img src="images/week-9.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>



<div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="images/week-10.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
		     <img src="images/week-10.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>


<div class="col-md-4 week-btm-left">
	<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="images/week-11.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
		     <img src="images/week-11.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
		     	<span class="one"></span>
		     	</h2>
		  	 </div></a>
			</div>
		</div>
</div>
<div class="clearfix"></div> -->

</div>



<div class="art-one">
<a href="single.html"><img src="images/week-12.jpg" alt="" /></a>
<div class="art-btm">
	<a href="single.html"><h3>显示景点的名称</h3></a>
	<p>显示景点的详细介绍</p>
<!-- 							<ul>
		<li><a href="#"><span class="fb"> </span></a><label>21</label></li>
		<li><a href="#"><span class="twit"> </span></a><label>12</label></li>
		<li><a href="#"><span class="g"> </span></a><label>37</label></li>
		<li><a href="#"><span class="p"> </span></a><label>22</label></li>
	</ul> -->						
</div>
</div>


<div class="art-one">
<a href="single.html"><img src="images/week-13.jpg" alt="" /></a>
<div class="art-btm">
	<a href="single.html"><h3>显示景点的名称</h3></a>
	<p>显示景点的详细介绍，显示景点的详细介绍，</p>
<!-- 							<ul>
		<li><a href="#"><span class="fb"> </span></a><label>21</label></li>
		<li><a href="#"><span class="twit"> </span></a><label>12</label></li>
		<li><a href="#"><span class="g"> </span></a><label>37</label></li>
		<li><a href="#"><span class="p"> </span></a><label>22</label></li>
	</ul> -->
</div>
</div>



</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="load">
<a href="#" class="hvr-shutter-out-horizontal">显示更多</a>
</div>
</div>
</div>
</div>
<!--articles-->
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
$(".swipebox").swipebox();
});
</script>
<!-- Portfolio Ends Here -->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {

var filterList = {

init: function () {

// MixItUp plugin
// http://mixitup.io
$('#portfoliolist').mixitup({
targetSelector: '.portfolio',
filterSelector: '.filter',
effects: ['fade'],
easing: 'snap',
// call the hover effect
onMixEnd: filterList.hoverEffect()
});				

},

hoverEffect: function () {

// Simple parallax effect
$('#portfoliolist .portfolio').hover(
function () {
$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
},
function () {
$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
}		
);				

}

};

// Run the show!
filterList.init();

});	
</script>
<!--advertisement-->
<!-- 	<div class="add">
<div class="container">
<div class="add-top">
<div class="col-md-10 add-left">
<p>Leave your Ads Here</p>
</div>
<div class="col-md-2 add-right">
<img src="images/add.png" alt="" />
<h3>Advertisement</h3>
</div>
<div class="clearfix"></div>
</div>
</div>
</div> -->
<!--advertisement-->
<!--read-->



