<!DOCTYPE html>
<html lang="en">
<head>
<title>Virtual School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Campus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('home/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('home/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{asset('home/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- font-awesome icons -->
<link href="{{asset('home/css/font-awesome.css')}}" rel="stylesheet">
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
</head>
	
<body>
<!-- header -->
	<!-- banner -->	
{{--<div class="header-w3layoutstop">--}}
		{{--<div class="container">  --}}
			{{--<div class="hdr-w3left navbar-left">--}}
				{{--<p><span class="fa fa-phone"></span> +040 354 658 252 </p> --}}
			{{--</div>--}}
			{{--<div class="search-grid">--}}
				{{--<form action="#" method="post">--}}
					{{--<input type="text" placeholder="Search" class="big-dog" name="Subscribe" required="">--}}
					{{--<button class="btn1"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
				{{--</form>--}}
			{{--</div>	--}}
		{{--</div>--}}
	{{--</div>--}}
<!-- navigation -->

<div class="nav-links">	
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				
				<a class="navbar-brand" href="index.html"><h1>Campus</h1></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav link-effect">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="#about" class="scroll">about</a></li>
					<li><a href="{{URL::to('/exam')}}">exam</a></li>
					<li><a href="{{URL::to('/registration')}}" class="">Registration</a></li>
					<li><a href="{{URL::to('/teacherLoginForm')}}" class="">Teacher</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<!-- /navigation -->

<!-- //header -->
<!-- banner -->	
	<div class="banner">
		<div class="container">
			<h3>Education is the key to unlock the golden door of freedom</h3>
			
			<div class="wthree_banner_grids">
				<div class="col-md-3 wthree_banner_grid">
					<span class="fa fa-graduation-cap" aria-hidden="true"></span>
					<h4>Corporis</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<span class="fa fa-book" aria-hidden="true"></span>
					<h4>Suscipit</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<span class="fa fa-laptop" aria-hidden="true"></span>
					<h4>Laboriosam</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<span class="fa fa-user" aria-hidden="true"></span>
					<h4>Voluptate</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner -->	<!-- about -->
	<div class="about" id="about">
		<div class="container">
		<div class="about-agileits-title"> 
				<h3>About us</h3> 
			</div>
			<div class="w3ls-about-grids">
			<div class="col-md-6 w3l-about-img">
				<img src="{{asset('home/images/about1.jpg')}}" alt="image">
				</div>
				<div class="col-md-6 w3l-about-left">
				<i class="fa fa-globe" aria-hidden="true"></i>
					<h2>Welcome</h2>
					<h5>A Glimpse of GUB</h5>
					<p>Green University of Bangladesh (GUB), one of the leading private universities in Bangladesh, was founded in 2003 under the Privat e University Act 1992 with a vision to create a global higher education center of excellence. GUB offers studen ts from all walks of life the adva ntages of an affordable, personalized education of global standard. As a modern, dynam ic, and innovative institution for undergraduate and graduate students, GUB lays stress on quality education imparted by a galaxy of highly qualified, dynamic, dedicated, and well-experienced faculty members with global exposure.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
<!-- Our services -->
<div class="services" id="services">
	<h3 class="wthree_head">Our Services</h3>
	<div class="container">
		<div class="stylegrid2">
			<div class="col-md-6 stylegridtext">
				<h3>HIGH PROFILE STAFF</h3>
				<span></span>
				<p>GUB’s greatest resource in fulfilling its mission is its faculty of about 1 00 distinguished scholars and educators, whose scholarly research  experiences and teaching skills enrich  t he students’ classroom environment.</p>
				<p>GUB experience a vibrant university community with a diverse range of academic offerings and about 3,000 participating students. </p>
				<div class="readmore">
					<a href="#" data-toggle="modal" data-target="#myModal">Read more</a>
				</div>
			</div>
			<div class="col-md-6 stylegridimg">
				<img src="{{asset('home/images/s2.jpg')}}" alt="">
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="stylegrid3">
			<div class="col-md-6 stylegridimg">
				<img src="{{asset('home/images/s1.jpg')}}" alt="">
			</div>
			<div class="col-md-6 stylegridtext">
				<h3>Students FREEDOM</h3>
				<span></span>
				<p>Lorem ipsum dolor sit amet, error sit voluptatem , eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus iste natus error sit voluptatem , eaque ipsa quae</p>
				<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				<div class="readmore">
					<a href="#" data-toggle="modal" data-target="#myModal">Read more</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--  gallery -->
<div class="portfolio-agileinfo" id="gallery">
		<div class="container">
			<div class="wthree_head_section_gallery">
				<h3 class="w3l_header w3_agileits_header">Our Gallery</h3>
			</div>
		</div>
		<div class="agile_wthree_inner_grids">
			<div class="agile_port_w3ls_info">
				<div class="portfolio-grids_main">
					<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
						<a href="{{asset('home/images/g1.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="{{asset('home/images/g1.jpg')}}" class="img-responsive" alt="w3ls" />
								<div class="b-wrapper two">
									<i class="fa fa-magic" aria-hidden="true"></i>
									
								</div>
							</a>
					</div>
					<div class="col-md-6 portfolio-grid_left">
						<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
							<a href="{{asset('home/images/g2.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
									<img src="{{asset('home/images/g2.jpg')}}" class="img-responsive" alt="w3ls" />
									<div class="b-wrapper">
									<i class="fa fa-magic" aria-hidden="true"></i>
										
									</div>
								</a>
						</div>
						<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
							<a href="{{asset('home/images/g3.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
									<img src="{{asset('home/images/g3.jpg')}}" class="img-responsive" alt="w3ls" />
									<div class="b-wrapper">
										<i class="fa fa-magic" aria-hidden="true"></i>
										
									</div>
								</a>
						</div>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="portfolio-grids_main">

					<div class="col-md-6 portfolio-grid_left">
						<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
							<a href="{{asset('home/images/g4.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
									<img src="{{asset('home/images/g4.jpg')}}" class="img-responsive" alt="w3ls" />
									<div class="b-wrapper">
									<i class="fa fa-magic" aria-hidden="true"></i>
										
									</div>
								</a>
						</div>
						<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
							<a href="{{asset('home/images/g5.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
									<img src="{{asset('home/images/g5.jpg')}}" class="img-responsive" alt="w3ls" />
									<div class="b-wrapper">
										<i class="fa fa-magic" aria-hidden="true"></i>
										
									</div>
								</a>
						</div>
					</div>
					<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
						<a href="{{asset('home/images/g6.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="{{asset('home/images/g6.jpg')}}" class="img-responsive" alt="w3ls" />
								<div class="b-wrapper two">
									<i class="fa fa-magic" aria-hidden="true"></i>
									
								</div>
							</a>
					</div>

					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
	</div>
	<!--// Gallery -->

<!-- team -->
	<div class="team" id="team">
		<div class="container">
		<div class="heading">
			<h3>Our Professors</h3>
		</div>
			<div class="wthree_team_grids">
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="{{asset('home/images/tm1.jpg')}}" alt=" " class="img-responsive" />
						
					</div>
					<h4>Max Payne</h4>
					<p>manager</p>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="{{asset('home/images/tm2.jpg')}}" alt=" " class="img-responsive" />
						
					</div>
					<h4> vessi vel</h4>
					<p>trainer</p>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="{{asset('home/images/tm3.jpg')}}" alt=" " class="img-responsive" />
						
					</div>
					<h4>Mark Jest</h4>
					<p>director</p>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="{{asset('home/images/tm44.jpg')}}" alt=" " class="img-responsive" />
						
					</div>
					<h4>John smith</h4>
					<p>sports member</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->


<!-- contact -->

<div class="contact" id="contact">
	<div class="container">
	<h3>Contact</h3>
	<div class="col-md-6 w3-left-contact">
	<div class="agile-sub-left">
	<p>Begum Rokeya Sarani<br>
	<span>Dhaka -1207,</span>
		Bangladesh.</p>

	<ul>
			<li>+88 01855601369</li>
			<li>+88 01934858972</li>
							</ul>

	
	</div>
	</div>
	<div class="col-md-6 w3-right-contact">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.8891524215496!2d90.37534521456251!3d23.786961284571237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c73585cef5e5%3A0xcb6b7d1a6c0e8ed3!2sGreen+University+of+Bangladesh!5e0!3m2!1sen!2sbd!4v1527255716322"
					    style="border:0" allowfullscreen></iframe>

	</div>
	<div class="clearfix"></div>
	
</div>
</div>

<!-- contact -->

<!-- contact -->
	<div class="contact1" id="mail">
		<div class="container">
			<div class="map-pos">
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Visit Us</h5>
						<p>Begum Rokeya Sarani, Dhaka -1207, Bangladesh.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Mail Us</h5>
						<p><a href="mailto:info@example.com"> info@vs.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Call Us</h5>
						<p>+88 01855601369</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			{{ Form::open(array('url' => 'postReview')) }}
				<div class="col-sm-6 contact-left">
					<input type="text" name="name" placeholder="Your Name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="number" placeholder="Mobile Number" required="">
				</div>
				<div class="col-sm-6 contact-right">
					<textarea name="massage" placeholder="Message" required=""></textarea>
					<input type="submit" value="Submit">
				</div>
				<div class="clearfix"></div>
			{{ Form::close() }}
		</div>
	</div>
	<!-- //contact -->
<div class="copyright">
			<div class="container">
				<p>© 2018 VS <a href=""></a></p>
			</div>
		</div>

<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Campus
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="{{asset('home/images/s1.jpg')}}" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 

<!-- js for portfolio  -->
	<script src="{{asset('home/js/jquery.chocolat.js')}} "></script>
	<link rel="stylesheet " href="{{asset('home/css/chocolat.css')}} " type="text/css" media="all" />
	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.portfolio-grids a').Chocolat();
		});
	</script>
	<!-- /js for portfolio  -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('home/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="{{asset('home/js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>