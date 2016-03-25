<!-- Load modernizr or html5shiv -->
<script src="lib/modernizr/modernizr-custom.js"></script>
<!--<script src="../lib/html5shiv/html5shiv.js"></script>-->
<!-- Load jQuery -->
<script src="lib/jquery/jquery.js"></script>

<!-- Load miSlider -->
<link href="css/mislider.css" rel="stylesheet">
<link href="css/mislider-skin-cameo.css" rel="stylesheet">
<script src="js/mislider.js"></script>
	<!--//search-scripts-->
<script>
	jQuery(function ($) {
		var slider = $('.mis-stage').miSlider({
			//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
			stageHeight: 380,
			//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
			slidesOnStage: false,
			//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
			slidePosition: 'center',
			//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
			slideStart: 'mid',
			//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
			slideScaling: 150,
			//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
			offsetV: -5,
			//  Center slide contents vertically - Boolean. Default: false
			centerV: true,
			//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
			navButtonsOpacity: 1
		});
	});
</script>
<!-- Apply other styles -->
<link href='http://fonts.useso.com/css?family=Roboto+Condensed:400|Roboto:500' rel='stylesheet'>
<link href="css/styles.css" rel="stylesheet">
	<!--magazine-->
	<div class="magazine">
		<div id="wrapper">
			<figure>
				<div class="mis-stage">
					<ol class="mis-slider">
						<li class="mis-slide">
							<a href="#" class="mis-container">
								<figure>
									<img src="http://www.imgs.com/garden01.jpg" alt="Pink Water Lillies">
									<figcaption>Pink Water Lillies</figcaption>
								</figure>
							</a>
						</li>
						<li class="mis-slide">
							<a href="#" class="mis-container">
								<figure>
									<img src="http://www.imgs.com/garden02.jpg" alt="Pond with Lillies">
									<figcaption>Pond with Lillies</figcaption>
								</figure>
							</a>
						</li>
						<li class="mis-slide">
							<a href="#" class="mis-container">
								<figure>
									<img src="http://www.imgs.com/garden03.jpg" alt="Hidden Pond">
									<figcaption>Hidden Pond</figcaption>
								</figure>
							</a>
						</li>
						<li class="mis-slide">
							<a href="#" class="mis-container">
								<figure>
									<img src="http://www.imgs.com/garden04.jpg" alt="Shrine">
									<figcaption>Shrine</figcaption>
								</figure>
							</a>
						</li>
						<li class="mis-slide">
							<a href="#" class="mis-container">
								<figure>
									<img src="http://www.imgs.com/garden05.jpg" alt="White Water Lillies">
									<figcaption>White Water Lillies</figcaption>
								</figure>
							</a>
						</li>
						<li class="mis-slide">
							<a href="#" class="mis-container">
								<figure>
									<img src="http://www.imgs.com/garden06.jpg" alt="Garden Walkway">
									<figcaption>Garden Walkway</figcaption>
								</figure>
							</a>
						</li>
						<li class="mis-slide">
							<a href="#" class="mis-container">
								<figure>
									<img src="http://www.imgs.com/garden07.jpg" alt="Lilly with Bee">
									<figcaption>Lilly with Bee</figcaption>
								</figure>
							</a>
						</li>
					</ol>
				</div>
		</div>
			<div class="magazine-bottom">
					<div class="col-md-7 magazine-bottom-left">
						<h3>Featured Articles</h3>
						<div class="mag-btm">
							<div class="col-md-4 mag-btm-left">
								<a href="single.html"><img src="images/m-10.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 mag-btm-left">
								<a href="single.html"><h4>Cras vitae risus nec turpis vestibulum convallis fermentum</h4></a>
								<p>Duis dapibus mi ut volutpat pulvinar. Maecenas tempor aliquet finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
								<div class="m-btn">
									<a href="single.html" class="hvr-shutter-out-horizontal">Read More</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="mag-btm">
							<div class="col-md-4 mag-btm-left">
								<a href="single.html"><img src="images/m-11.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 mag-btm-left">
								<a href="single.html"><h4>Phasellus nec augue risus. Aenean egestas bibendum diam eget.</h4></a>
								<p>Duis dapibus mi ut volutpat pulvinar. Maecenas tempor aliquet finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
								<div class="m-btn">
									<a href="single.html" class="hvr-shutter-out-horizontal">Read More</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="mag-btm">
							<div class="col-md-4 mag-btm-left">
								<a href="single.html"><img src="images/m-12.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 mag-btm-left">
								<a href="single.html"><h4>Sed vel hendrerit elit. Ut eu justo urna. Nunc ullamcorper nunc massa</h4></a>
								<p>Duis dapibus mi ut volutpat pulvinar. Maecenas tempor aliquet finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
								<div class="m-btn">
									<a href="single.html" class="hvr-shutter-out-horizontal">Read More</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-5 magazine-bottom-left">
						<h3>Latest News</h3>
						<div class="latest">
							<div class="col-md-1 latest-left">
								<h4>1</h4>
							</div>
							<div class="col-md-11 latest-left">
								<h5>Praesent purus nisl, varius sit amet viverra ac, tempor sed dolor</h5>
								<p>MARCH 11,2015</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="latest">
							<div class="col-md-1 latest-left">
								<h4>2</h4>
							</div>
							<div class="col-md-11 latest-left">
								<h5>Praesent purus nisl, varius sit amet viverra ac, tempor sed dolor</h5>
								<p>MARCH 1,2015</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="latest">
							<div class="col-md-1 latest-left">
								<h4>3</h4>
							</div>
							<div class="col-md-11 latest-left">
								<h5>Praesent purus nisl, varius sit amet viverra ac, tempor sed dolor</h5>
								<p>JANUARY 30,2015</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
			</div>
		</div>

	</div>
	<!--magazine-->
	<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--read-->

