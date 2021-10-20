@extends('fe.layouts.master')

@push('mytitle')
    BERANDA
@endpush

@push('mycss')

@endpush


@section('mycontent')
    	<!-- start slider section -->
	<section id="home-slider" class="home-slider">
		<div id="home-carousel" class="owl-carousel">
			<div class="owl-slide slide-1">
				<div class="slider-content">
					<div class="slider-caption">
						<div class="caption-container">
							<h2 class="banner-title-text"><span>W3C Valid </span>HTML Code</h2>
							<p class="sub-title white-text">Proffessional web designer &amp; Creative Director</p>
							<a class="btn btn-shutter-out-horizontal btn-transparent" href="#contact">CONTACT</a>
						</div><!-- end caption-container -->
					</div><!-- end slider-caption -->
				</div><!-- end slider-content -->
			</div><!-- end owl-slide -->
			<div class="owl-slide slide-2">
				<div class="slider-content">
					<div class="slider-caption">
						<div class="caption-container">
							<h2 class="banner-title-text"><span>Responsive &amp; </span>Mobile-Friendly</h2>
							<p class="sub-title white-text">Proffessional web designer &amp; Creative Director</p>
							<a class="btn btn-shutter-out-horizontal btn-transparent" href="#contact">CONTACT</a>
						</div><!-- end caption-container -->
					</div><!-- end slider-caption -->
				</div><!-- end slider-content -->
			</div><!-- end owl-slide -->
			<div class="owl-slide slide-3">
				<div class="slider-content">
					<div class="slider-caption">
						<div class="caption-container">
							<h2 class="banner-title-text">Latest Version <span>of Bootstrap</span></h2>
							<p class="sub-title white-text">Proffessional web designer &amp; Creative Director</p>
							<a class="btn btn-shutter-out-horizontal btn-transparent" href="#contact">CONTACT</a>
						</div><!-- end caption-container -->
					</div><!-- end slider-caption -->
				</div><!-- end slider-content -->
			</div><!-- end owl-slide -->
		</div><!-- end owl-carousel -->
		<a href="#about" class="scroll-arrow"><i class="fa fa-chevron-down infinite animated fade-In-Down"></i></a>
	</section>
	<!-- end slider section -->

	<!-- start About section -->
	<section id="about" class="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>About <strong>HighLine</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
				</div><!-- end col-sm-12 -->
				<div class="col-sm-12">
					<div class="title-block text-center">
						<h1>HighLine - One Page Parallax Responsive HTML5 Template</h1>
					</div><!-- end title-block -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col-sm-12 -->
				<div class="col-sm-12">
					<div class="row">
						<div class="col-md-4">
							<div class="about-wrap">
								<div class="icon-holder">
									<i class="fa fa-question"></i>
								</div><!-- end icon-holder -->
								<div class="text-box">
									<div class="title-box">
										<h3>Why <strong>HighLine?</strong></h3>
									</div>
									<ul class="list-unstyled text-left">
										<li>W3C Valid HTML Code</li>
										<li>Responsive &amp; Mobile-Friendly</li>
										<li>Latest Version of Bootstrap</li>
										<li>Browser Compatibility</li>
										<li>Smooth &amp; Stunning Parallax</li>
										<li>and Many More</li>
									</ul>
								</div><!-- end text-box -->
							</div><!-- end about-wrap -->
						</div><!-- end col -->
						<div class="col-md-4">
							<div class="about-wrap">
								<div class="icon-holder">
									<i class="fa fa-book"></i>
								</div><!-- end icon-holder -->
								<div class="text-box">
									<div class="title-box">
										<h3>Our <strong>Story</strong></h3>
									</div>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
								</div><!-- end text-box -->
							</div><!-- end about-wrap -->
						</div><!-- end col -->
						<div class="col-md-4">
							<div class="about-wrap">
								<div class="icon-holder">
									<i class="fa fa-bullseye"></i>
								</div><!-- end icon-holder -->
								<div class="text-box">
									<div class="title-box">
										<h3>Our <strong>Goal</strong></h3>
									</div>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
								</div><!-- end text-box -->
							</div><!-- end about-wrap -->
						</div><!-- end col -->
					</div><!-- end row -->
				</div><!-- end col-sm-12 -->
				<div class="col-sm-12 progressbar-wrap">
					<div class="title-box">
						<h3>Our general <strong>skill</strong></h3>
					</div>
					<div class="col-xs-3">
						<div class="progressbar" data-animate="false">
							<div class="circle" data-percent="98.7" data-color="#fb9902">
								<div></div>
								<p>HTML5</p>
							</div><!-- end circle -->
						</div><!-- end progressbar -->
					</div><!-- end col -->
					<div class="col-xs-3">
						<div class="progressbar" data-animate="false">
							<div class="circle" data-percent="95.8" data-color="#fb9902">
								<div></div>
								<p>CSS3</p>
							</div><!-- end circle -->
						</div><!-- end progressbar -->
					</div><!-- end col -->
					<div class="col-xs-3">
						<div class="progressbar" data-animate="false">
							<div class="circle" data-percent="90.5" data-color="#fb9902">
								<div></div>
								<p>PHP</p>
							</div><!-- end circle -->
						</div><!-- end progressbar -->
					</div><!-- end col -->
					<div class="col-xs-3">
						<div class="progressbar" data-animate="false">
							<div class="circle" data-percent="78.2" data-color="#fb9902">
								<div></div>
								<p>Jquery</p>
							</div><!-- end circle -->
						</div><!-- end progressbar -->
					</div><!-- end col -->
				</div><!-- end col-sm-12 -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end About section -->

	<!-- start service -->
	<section id="service" class="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>Our <strong>Service</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col-sm-12 -->
				<div class="col-md-6">
					<div class="service-wrap clearfix">
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap">
									<i class="fa fa-desktop"></i>
									<h3>Web Design</h3>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!--End col -->
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap border-left">
									<ul class="service-list list-unstyled text-left">
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
										<li>Pellentesque eget nibh sed</li>
										<li>Praesent pretium metus non</li>
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
									</ul><!-- end service-list -->
									<a class="btn btn-shutter-out-horizontal" href="single-service.html">View Details</a>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!--End col -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
				<div class="col-md-6">
					<div class="service-wrap clearfix">
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap">
									<i class="fa fa-paint-brush"></i>
									<h3>Graphic Design</h3>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!-- end col -->
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap border-left">
									<ul class="service-list list-unstyled text-left">
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
										<li>Pellentesque eget nibh sed</li>
										<li>Praesent pretium metus non</li>
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
									</ul><!-- end service-list -->
									<a class="btn btn-shutter-out-horizontal" href="single-service.html">View Details</a>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!-- end col -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
				<div class="col-md-6">
					<div class="service-wrap clearfix">
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap">
									<i class="fa fa-wordpress"></i>
									<h3>CMS Customization</h3>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!-- end col -->
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap border-left">
									<ul class="service-list list-unstyled text-left">
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
										<li>Pellentesque eget nibh sed</li>
										<li>Praesent pretium metus non</li>
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
									</ul><!-- end service-list -->
									<a class="btn btn-shutter-out-horizontal" href="single-service.html">View Details</a>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!-- end col -->
					</div>
				</div><!-- end col -->
				<div class="col-md-6">
					<div class="service-wrap clearfix">
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap">
									<i class="fa fa-shopping-cart"></i>
									<h3>E-Commerce</h3>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!--End col -->
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap border-left">
									<ul class="service-list list-unstyled text-left">
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
										<li>Pellentesque eget nibh sed</li>
										<li>Praesent pretium metus non</li>
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
									</ul><!-- end service-list -->
									<a class="btn btn-shutter-out-horizontal" href="single-service.html">View Details</a>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!--End col -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
				<div class="col-md-6">
					<div class="service-wrap clearfix">
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap">
									<i class="fa fa-cogs"></i>
									<h3>App Devlopment</h3>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!--End col -->
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap border-left">
									<ul class="service-list list-unstyled text-left">
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
										<li>Pellentesque eget nibh sed</li>
										<li>Praesent pretium metus non</li>
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
									</ul><!-- end service-list -->
									<a class="btn btn-shutter-out-horizontal" href="single-service.html">View Details</a>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!--End col -->
					</div>
				</div><!-- end col -->
				<div class="col-md-6">
					<div class="service-wrap clearfix">
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap">
									<i class="fa fa-umbrella"></i>
									<h3>Support</h3>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!--End col -->
						<div class="col-xs-6">
							<div class="service-box">
								<div class="service-box-wrap border-left">
									<ul class="service-list list-unstyled text-left">
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
										<li>Pellentesque eget nibh sed</li>
										<li>Praesent pretium metus non</li>
										<li>Pellentesque a ante quis</li>
										<li>Proin eget augue in quam</li>
									</ul><!-- end service-list -->
									<a class="btn btn-shutter-out-horizontal" href="single-service.html">View Details</a>
								</div><!-- end service-box-wrap -->
							</div><!-- end service-box -->
						</div><!--End col -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!--End Container -->
	</section>
	<!-- end service -->

	<!-- start team -->
	<section id="team" class="our-team ourteam-style2">
		<div class="container animatedParent">
			<div class="row animated fadeInUp">
				<div class="col-sm-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>Our <strong>Experts</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!--End col-sm-12 -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap">
						<div class="team-thumb">
							<img src="images/team/team-1.jpg" alt="Thomas Ross">
						</div><!-- end team-thumb -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>Thomas Ross</h4>
									<h5>Creative Director</h5>
								</div><!-- end team-title -->
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap">
						<div class="team-thumb">
							<img src="images/team/team-2.jpg" alt="Resa Rhythm">
						</div><!-- end team-thumb -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. </p>
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>Resa Rhythm</h4>
									<h5>Co-Founder</h5>
								</div><!-- end team-title -->
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap" >
						<div class="team-thumb">
							<img src="images/team/team-3.jpg" alt="Emma Jane">
						</div><!-- end team-thumb -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. </p>
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>Emma Jane</h4>
									<h5>Director</h5>
								</div><!-- end team-title -->
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap">
						<div class="team-thumb">
							<img src="images/team/team-4.jpg" alt="John Marta">
						</div><!-- end team-thumb -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. </p>
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>John Marta</h4>
									<h5>Software Engineer</h5>
								</div><!-- end team-title -->
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap">
						<div class="team-thumb">
							<img src="images/team/team-5.jpg" alt="Emma Rhythm">
						</div><!-- end team-thumb -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. </p>
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>Emma Rhythm</h4>
									<h5>Creative Director</h5>
								</div><!-- end team-title -->
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap">
						<div class="team-thumb">
							<img src="images/team/team-6.jpg" alt="Thomas Marta">
						</div><!-- end team-thumb -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. </p>
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>Thomas Marta</h4>
									<h5>Co-Founder</h5>
								</div><!-- end team-title -->
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap" >
						<div class="team-thumb">
							<img src="images/team/team-7.jpg" alt="John Ross">
						</div><!-- end team-thumb -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. </p>
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>John Ross</h4>
									<h5>Director</h5>
								</div>
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap">
						<div class="team-thumb">
							<img src="images/team/team-8.jpg" alt="Resa Jane">
						</div><!-- end team-thumb -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. </p>
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>Resa Jane</h4>
									<h5>Software Engineer</h5>
								</div><!-- end team-title -->
								<div class="team-social">
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-gplus">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-small social-icon-light social-icon-rounded social-icon-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div><!-- end team-social -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!--End Container -->
	</section><!-- End of Team -->
	<!-- end team -->

	<!-- start portfolio -->
	<section id="portfolio" class="filter-section portfolio-style2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>Our <strong>Portfolio</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!--End col -->
				<div class="col-sm-12">
					<div class="filter-container isotopeFilters">
						<ul class="list-inline filter">
							<li class="active"><a href="#" data-filter="*">All </a></li>
							<li><a href="#" data-filter=".illustrations">Illustrations</a></li>
							<li><a href="#" data-filter=".photography">Photography</a></li>
							<li><a href="#" data-filter=".websites">Websites</a></li>
							<li><a href="#" data-filter=".art">Art</a></li>
						</ul>
					</div><!-- end filter-container -->
				</div><!--End col -->
				<div class="col-sm-12">
					<div class="row">
						<div class="isotopeContainer">
							<div class="col-md-3 col-xs-6 no-space isotopeSelector websites">
								<div class="portfolio-wrapper">
									<img src="images/portfolio/thumb/1.jpg" alt="portfolio1">
									<div class="overly-style2">
										<div class="overly-inner">
											<div class="pfolio-link">
												<a title="Details" href="single-portfolio.html"><i class="fa fa-link"></i></a>
												<a data-lightbox="websites" data-title="Portfolio1" href="images/portfolio/1.jpg"><i class="fa fa-search-plus"></i></a>
											</div><!--End pfolio-link -->
											<div class="pfolio-caption">
												<h3><a href="single-portfolio.html">Portfolio1</a></h3>
											</div><!--End pfolio-caption -->
										</div><!--End overly-inner -->
									</div><!--End overly-style2 -->
								</div><!--End portfolio-wrapper -->
							</div><!--End col -->
							<div class="col-md-3 col-xs-6 no-space isotopeSelector photography">
								<div class="portfolio-wrapper">
									<img src="images/portfolio/thumb/2.jpg" alt="portfolio2">
									<div class="overly-style2">
										<div class="overly-inner">
											<div class="pfolio-link">
												<a title="Details" href="single-portfolio.html"><i class="fa fa-link"></i></a>
												<a data-lightbox="photography" data-title="Portfolio2" href="images/portfolio/2.jpg"><i class="fa fa-search-plus"></i></a>
											</div><!--End pfolio-link -->
											<div class="pfolio-caption">
												<h3><a href="single-portfolio.html">Portfolio2</a></h3>
											</div><!--End pfolio-caption -->
										</div><!--End overly-inner -->
									</div><!--End overly-style2 -->
								</div><!--End portfolio-wrapper -->
							</div><!--End col -->
							<div class="col-md-3 col-xs-6 no-space isotopeSelector art">
								<div class="portfolio-wrapper">
									<img src="images/portfolio/thumb/3.jpg" alt="portfolio3">
									<div class="overly-style2">
										<div class="overly-inner">
											<div class="pfolio-link">
												<a title="Details" href="single-portfolio.html"><i class="fa fa-link"></i></a>
												<a data-lightbox="art" data-title="Portfolio3" href="images/portfolio/3.jpg"><i class="fa fa-search-plus"></i></a>
											</div><!--End pfolio-link -->
											<div class="pfolio-caption">
												<h3><a href="single-portfolio.html">Portfolio3</a></h3>
											</div><!--End pfolio-caption -->
										</div><!--End overly-inner -->
									</div><!--End overly-style2 -->
								</div><!--End portfolio-wrapper -->
							</div><!--End col -->
							<div class="col-md-3 col-xs-6 no-space isotopeSelector illustrations">
								<div class="portfolio-wrapper">
									<img src="images/portfolio/thumb/4.jpg" alt="portfolio4">
									<div class="overly-style2">
										<div class="overly-inner">
											<div class="pfolio-link">
												<a title="Details" href="single-portfolio.html"><i class="fa fa-link"></i></a>
												<a data-lightbox="illustrations" data-title="Portfolio4" href="images/portfolio/4.jpg"><i class="fa fa-search-plus"></i></a>
											</div><!--End pfolio-link -->
											<div class="pfolio-caption">
												<h3><a href="single-portfolio.html">Portfolio4</a></h3>
											</div><!--End pfolio-caption -->
										</div><!--End overly-inner -->
									</div><!--End overly-style2 -->
								</div><!--End portfolio-wrapper -->
							</div><!--End col -->
							<div class="col-md-3 col-xs-6 no-space isotopeSelector websites">
								<div class="portfolio-wrapper">
									<img src="images/portfolio/thumb/5.jpg" alt="portfolio5">
									<div class="overly-style2">
										<div class="overly-inner">
											<div class="pfolio-link">
												<a title="Details" href="single-portfolio.html"><i class="fa fa-link"></i></a>
												<a data-lightbox="websites" data-title="Portfolio5" href="images/portfolio/5.jpg"><i class="fa fa-search-plus"></i></a>
											</div><!--End pfolio-link -->
											<div class="pfolio-caption">
												<h3><a href="single-portfolio.html">Portfolio5</a></h3>
											</div><!--End pfolio-caption -->
										</div><!--End overly-inner -->
									</div><!--End overly-style2 -->
								</div><!--End portfolio-wrapper -->
							</div><!--End col -->
							<div class="col-md-3 col-xs-6 no-space isotopeSelector illustrations">
								<div class="portfolio-wrapper">
									<img src="images/portfolio/thumb/6.jpg" alt="portfolio6">
									<div class="overly-style2">
										<div class="overly-inner">
											<div class="pfolio-link">
												<a title="Details" href="single-portfolio.html"><i class="fa fa-link"></i></a>
												<a data-lightbox="illustrations" data-title="Portfolio6" href="images/portfolio/6.jpg"><i class="fa fa-search-plus"></i></a>
											</div><!--End pfolio-link -->
											<div class="pfolio-caption">
												<h3><a href="single-portfolio.html">Portfolio6</a></h3>
											</div><!--End pfolio-caption -->
										</div><!--End overly-inner -->
									</div><!--End overly-style2 -->
								</div><!--End portfolio-wrapper -->
							</div><!--End col -->
							<div class="col-md-3 col-xs-6 no-space isotopeSelector art">
								<div class="portfolio-wrapper">
									<img src="images/portfolio/thumb/7.jpg" alt="portfolio7">
									<div class="overly-style2">
										<div class="overly-inner">
											<div class="pfolio-link">
												<a title="Details" href="single-portfolio.html"><i class="fa fa-link"></i></a>
												<a data-lightbox="art" data-title="portfolio7" href="images/portfolio/7.jpg"><i class="fa fa-search-plus"></i></a>
											</div><!--End pfolio-link -->
											<div class="pfolio-caption">
												<h3><a href="single-portfolio.html">Portfolio7</a></h3>
											</div><!--End pfolio-caption -->
										</div><!--End overly-inner -->
									</div><!--End overly-style2 -->
								</div><!--End portfolio-wrapper -->
							</div><!--End col -->
							<div class="col-md-3 col-xs-6 no-space isotopeSelector photography">
								<div class="portfolio-wrapper">
									<img src="images/portfolio/thumb/8.jpg" alt="portfolio8">
									<div class="overly-style2">
										<div class="overly-inner">
											<div class="pfolio-link">
												<a title="Details" href="single-portfolio.html"><i class="fa fa-link"></i></a>
												<a data-lightbox="photography" data-title="portfolio8" href="images/portfolio/8.jpg"><i class="fa fa-search-plus"></i></a>
											</div><!--End pfolio-link -->
											<div class="pfolio-caption">
												<h3><a href="single-portfolio.html">Portfolio8</a></h3>
											</div><!--End pfolio-caption -->
										</div><!--End overly-inner -->
									</div><!--End overly-style2 -->
								</div><!--End portfolio-wrapper -->
							</div><!--End col -->
						</div><!--End of isotopeContainer -->
					</div><!--End row -->
				</div><!--End col -->
			</div><!--End row -->
		</div><!--End of container -->
	</section>
	<!-- end portfolio -->

	<!-- start Pricing Plan -->
	<section id="pricing" class="pricing">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>Pricing <strong>Plan</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!--End title-line -->
					</div><!--End title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col-sm-12 -->
				<div class="col-md-3 col-xs-6">
					<div class="pricing-wrap starter">
						<h3>Starter</h3>
						<div class="price-wrap">
							<div class="toggle-price-starter-year">
								<p class="dolar"><sup>$</sup> 48 <sub>/year</sub></p>
								<button class="btn btn-link change-plan" onClick="changePlanStarter('month')">Choose Monthly Plan</button>
							</div><!--End toggle-price-starter-year -->
							<div class="toggle-price-starter-month">
								<p class="dolar"><sup>$</sup> 5 <sub>/month<strong>*</strong></sub></p>
								<button class="btn btn-link change-plan" onClick="changePlanStarter('year')">Choose Aannual Plan</button>
							</div><!--End toggle-price-starter-month -->
						</div><!--End price-wrap -->
						<ul class="price price-1 list-unstyled">
							<li>1.5GB Storage</li>
							<li>1 Emails</li>
							<li>1 Domains</li>
							<li>1GB Bandwidth</li>
						</ul><!--End price -->
						<a class="btn btn-shutter-out-horizontal" href="#">Choose this plan</a>
					</div><!--End pricing-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="pricing-wrap premium">
						<h3>Premium</h3>
						<div class="price-wrap">
							<div class="toggle-price-premium-year">
								<p class="dolar"><sup>$</sup> 160 <sub>/year</sub></p>
								<button class="btn btn-link change-plan" onClick="changePlanPremium('month')">Choose Monthly Plan</button>
							</div><!--End toggle-price-premium-year -->
							<div class="toggle-price-premium-month">
								<p class="dolar"><sup>$</sup> 15 <sub>/month<strong>*</strong></sub></p>
								<button class="btn btn-link change-plan" onClick="changePlanPremium('year')">Choose Aannual Plan</button>
							</div><!--End toggle-price-premium-month -->
						</div><!--End price-wrap -->
						<ul class="price price-2 list-unstyled">
							<li>10GB Storage</li>
							<li>10 Emails</li>
							<li>10 Domains</li>
							<li>2GB Bandwidth</li>
						</ul><!--End price -->
						<a class="btn btn-shutter-out-horizontal" href="#">Choose this plan</a>
					</div><!--End pricing-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6 active">
					<div class="pricing-wrap professional">
						<h3>Professional</h3>
						<div class="price-wrap">
							<div class="toggle-price-professional-year">
								<p class="dolar"><sup>$</sup> 270 <sub>/year</sub></p>
								<button class="btn btn-link change-plan" onClick="changePlanProfessional('month')">Choose Monthly Plan</button>
							</div><!--End toggle-price-professional-year -->
							<div class="toggle-price-professional-month">
								<p class="dolar"><sup>$</sup> 25 <sub>/month<strong>*</strong></sub></p>
								<button class="btn btn-link change-plan" onClick="changePlanProfessional('year')">Choose Aannual Plan</button>
							</div><!--End toggle-price-professional-month -->
						</div><!--End price-wrap -->
						<ul class="price price-3 list-unstyled">
							<li>15GB Storage</li>
							<li>15 Emails</li>
							<li>15 Domains</li>
							<li>3GB Bandwidth</li>
						</ul><!--End price -->
						<a class="btn btn-shutter-out-horizontal" href="#">Choose this plan</a>
					</div><!--End pricing-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="pricing-wrap maximum">
						<h3>Maximum</h3>
						<div class="price-wrap">
							<div class="toggle-price-maximum-year">
								<p class="dolar"><sup>$</sup> 312 <sub>/year</sub></p>
								<button class="btn btn-link change-plan" onClick="changePlanMaximum('month')">Choose Monthly Plan</button>
							</div><!--End toggle-price-maximum-year -->
							<div class="toggle-price-maximum-month">
								<p class="dolar"><sup>$</sup> 30 <sub>/month<strong>*</strong></sub></p>
								<button class="btn btn-link change-plan" onClick="changePlanMaximum('year')">Choose Aannual Plan</button>
							</div><!--End toggle-price-maximum-month -->
						</div><!--End price-wrap -->
						<ul class="price price-4 list-unstyled">
							<li>20GB Storage</li>
							<li>Unlimited Emails</li>
							<li>Unlimited Domains</li>
							<li>4GB Bandwidth</li>
						</ul><!--End price -->
						<a class="btn btn-shutter-out-horizontal" href="#">Choose this plan</a>
					</div><!--End pricing-wrap -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end Pricing Plan -->

	<!-- start blog -->
	<section id="blog" class="blog">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>Blog <strong>Posts</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col -->
			</div><!-- end row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="owl-carousel">
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="images/blog/thumb/1.jpg" alt="Blog Image">
								</div><!--End of post-thumb -->
								<div class="post-content">
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Mike Arthur</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">April 16, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#comment">4</a></span>
									</div><!-- end post-meta -->
									<div class="post-title">
										<h3><a href="single-blog.html">A small river named Duden place</a></h3>
									</div><!-- end post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!-- end post-excerpt -->
								</div><!--End of post-content -->
							</article>
						</div><!--End of item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="images/blog/thumb/2.jpg" alt="Blog Image">
								</div><!--End of post-thumb -->
								<div class="post-content">
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Mike Arthur</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">April 16, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#comment">37</a></span>
									</div><!-- end post-meta -->
									<div class="post-title">
										<h3><a href="single-blog.html">A small river named Duden place</a></h3>
									</div><!-- end post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!-- end post-excerpt -->
								</div><!--End of post-content -->
							</article>
						</div><!--End of item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="images/blog/thumb/3.jpg" alt="Blog Image">
								</div><!--End of post-thumb -->
								<div class="post-content">
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Mike Arthur</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">April 16, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#comment">4</a></span>
									</div><!-- end post-meta -->
									<div class="post-title">
										<h3><a href="single-blog.html">A small river named Duden place</a></h3>
									</div><!-- end post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!-- end post-excerpt -->
								</div><!--End of post-content -->
							</article>
						</div><!--End of item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="images/blog/thumb/4.jpg" alt="Blog Image">
								</div><!--End of post-thumb -->
								<div class="post-content">
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Mike Arthur</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">April 16, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#comment">4</a></span>
									</div><!-- end post-meta -->
									<div class="post-title">
										<h3><a href="single-blog.html">A small river named Duden place</a></h3>
									</div><!-- end post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!-- end post-excerpt -->
								</div><!--End of post-content -->
							</article>
						</div><!--End of item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="images/blog/thumb/5.jpg" alt="Blog Image">
								</div><!--End of post-thumb -->
								<div class="post-content">
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Mike Arthur</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">April 16, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#comment">4</a></span>
									</div><!-- end post-meta -->
									<div class="post-title">
										<h3><a href="single-blog.html">A small river named Duden place</a></h3>
									</div><!-- end post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!-- end post-excerpt -->
								</div><!--End of post-content -->
							</article>
						</div><!--End of item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="images/blog/thumb/6.jpg" alt="Blog Image">
								</div><!--End of post-thumb -->
								<div class="post-content">
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Mike Arthur</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">April 16, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#comment">4</a></span>
									</div><!-- end post-meta -->
									<div class="post-title">
										<h3><a href="single-blog.html">A small river named Duden place</a></h3>
									</div><!-- end post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!-- end post-excerpt -->
								</div><!--End of post-content -->
							</article>
						</div><!--End of item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="images/blog/thumb/7.jpg" alt="Blog Image">
								</div><!--End of post-thumb -->
								<div class="post-content">
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Mike Arthur</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">April 16, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#comment">4</a></span>
									</div><!-- end post-meta -->
									<div class="post-title">
										<h3><a href="single-blog.html">A small river named Duden place</a></h3>
									</div><!-- end post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!-- end post-excerpt -->
								</div><!--End of post-content -->
							</article>
						</div><!--End of item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="images/blog/thumb/8.jpg" alt="Blog Image">
								</div><!--End of post-thumb -->
								<div class="post-content">
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Mike Arthur</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">April 16, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#comment">4</a></span>
									</div><!-- end post-meta -->
									<div class="post-title">
										<h3><a href="single-blog.html">A small river named Duden place </a></h3>
									</div><!-- end post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!-- end post-excerpt -->
								</div><!--End of post-content -->
							</article>
						</div><!--End of item -->
					</div><!-- end carousel -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end blog -->

	<!-- start clients -->
	<section id="clients" class="clients">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>Our <strong>Clients</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col -->
				<div class="col-sm-12">
					<div class="owl-carousel owl-theme">
						<div class="client-item-wrap">
							<img src="images/clients/1.png" alt="client 1"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="images/clients/2.png" alt="client 2"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="images/clients/3.png" alt="client 3"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="images/clients/4.png" alt="client 4"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="images/clients/5.png" alt="client 5"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="images/clients/6.png" alt="client 6"/>
						</div>
						<div class="client-item-wrap">
							<img src="images/clients/7.png" alt="client 7"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="images/clients/8.png" alt="client 8"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="images/clients/9.png" alt="client 9"/>
						</div>
						<div class="client-item-wrap">
							<img src="images/clients/10.png" alt="client 10"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="images/clients/11.png" alt="client 11"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="images/clients/12.png" alt="client 12"/>
						</div><!-- end client-item-wrap -->
					</div><!-- end owl-carousel -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end clients -->

	<!-- start testimonials -->
	<section id="testimonials" class="testimonials testimonial-duble">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>What <strong>Customer say?</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
				</div><!--End col -->
			</div><!--End row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="owl-carousel owl-theme">
						<div class="testimonial-item">
							<div class="testimonial-image">
								<img src="images/customer/customer-1.jpg" alt="Jonathon Hume"/>
							</div><!--End testimonial-image -->
							<div class="testimonial-content">
								<div class="rating-wrap">
									<div class="rating">
										<div class="stars five"></div>
									</div>
								</div><!--End rating-wrap -->
								<p class="blockquote">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
								<div class="testimonial-author">
									<h4 class="text-capitalize">John Doe</h4>
									<p>CEO, MGSTech.</p>
								</div><!--End testimonial-author -->
							</div><!--End testimonial-content -->
						</div><!-- end testimonial-item -->
						<div class="testimonial-item">
							<div class="testimonial-image">
								<img src="images/customer/customer-2.jpg" alt="John Doe" />
							</div><!--End testimonial-image -->
							<div class="testimonial-content">
								<div class="rating-wrap">
									<div class="rating">
										<div class="stars five"></div>
									</div>
								</div><!--End rating-wrap -->
								<p class="blockquote">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
								<div class="testimonial-author">
									<h4 class="text-capitalize">Lisa Hume</h4>
									<p>Designer, MGSUI</p>
								</div><!--End testimonial-author -->
							</div><!--End testimonial-content -->
						</div><!-- end testimonial-item -->
						<div class="testimonial-item">
							<div class="testimonial-image">
								<img src="images/customer/customer-3.jpg" alt="Jonathon Hume" />
							</div><!--End testimonial-image -->
							<div class="testimonial-content">
								<div class="rating-wrap">
									<div class="rating">
										<div class="stars five"></div>
									</div>
								</div><!--End rating-wrap -->
								<p class="blockquote">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
								<div class="testimonial-author">
									<h4 class="text-capitalize">Emma Jane</h4>
									<p>Devloper, MGSinfo</p>
								</div><!--End testimonial-author -->
							</div><!--End testimonial-content -->
						</div><!-- end testimonial-item -->
						<div class="testimonial-item">
							<div class="testimonial-image">
								<img src="images/customer/customer-4.jpg" alt="Jonathon Hume" />
							</div><!--End testimonial-image -->
							<div class="testimonial-content">
								<div class="rating-wrap">
									<div class="rating">
										<div class="stars five"></div>
									</div>
								</div><!--End rating-wrap -->
								<p class="blockquote">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
								<div class="testimonial-author">
									<h4 class="text-capitalize">Mike Arthur</h4>
									<p>CEO, MGSIT</p>
								</div><!--End testimonial-author -->
							</div><!--End testimonial-content -->
						</div><!-- end testimonial-item -->
					</div><!-- end carousel -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end testimonials -->

	<!-- start contact -->
	<section id="contact" class="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>Wanna <strong>Talk</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!--End col -->
				<!-- start google map -->
				<div class="col-sm-12">
					<div id="map"></div>
				</div><!-- end col-sm-12 -->
				<!-- end google map -->
				<!-- start contact Info -->
				<div class="col-sm-5">
					<div class="title-box">
						<h3>Contact us <strong>directly</strong></h3>
					</div><!-- end title-box -->
					<div class="contact-item clearfix">
						<div class="contact-left pull-left">
							<i class="fa fa-envelope"></i>
						</div><!-- end contact-left -->
						<div class="contact-right">
							<div class="contact-desc">
								<span>Mail Us</span>
								<h4><a href="mailto:sales@yourwebsite.com">sales@yourwebsite.com</a></h4>
							</div><!-- end contact-desc -->
						</div><!-- end contact-right -->
					</div><!-- end contact-item -->
					<div class="contact-item clearfix">
						<div class="contact-left pull-left">
							<i class="fa fa-fax"></i>
						</div><!-- end contact-left -->
						<div class="contact-right">
							<div class="contact-desc">
								<span>Fax</span>
								<h4>+000 0000 0000</h4>
							</div><!-- end contact-desc -->
						</div><!-- end contact-right -->
					</div><!-- end contact-item -->
					<div class="contact-item clearfix">
						<div class="contact-left pull-left">
							<i class="fa fa-phone"></i>
						</div><!-- end contact-left -->
						<div class="contact-right">
							<div class="contact-desc">
								<span>Call Us</span>
								<h4><a href="tel:000-0000-0000">+000 0000 0000</a></h4>
							</div><!-- end contact-desc -->
						</div><!-- end contact-right -->
					</div><!-- end contact-item -->
				</div><!-- end col-sm-5 -->
				<!-- end contact Info -->
				<!-- start col-sm-7 -->
				<div class="col-sm-7">
					<div class="title-box">
						<h3>Write a <strong>message</strong></h3>
					</div><!-- end title-box -->
					<!-- start contact form -->
					<form id="contactForm" name="contactform" data-toggle="validator" class="contact-form">
						<span class="sub-text">* Required fields</span>
						<div id="msgContactSubmit" class="hidden"></div>
						<div class="form-group">
							<div class="help-block with-errors hidden"></div>
							<input name="fname" id="fname" placeholder="Your Name*" class="form-control" type="text" required data-error="Please enter Your Name">
							<div class="input-group-icon"><i class="fa fa-user"></i></div>
						</div><!-- end form-group -->
						<div class="form-group">
							<div class="help-block with-errors hidden"></div>
							<input name="email" id="email" placeholder="Your Email*" class="form-control" type="email" required data-error="Please enter Your Email">
							<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
						</div><!-- end form-group -->
						<div class="form-group">
							<div class="help-block with-errors hidden"></div>
							<input name="phone" id="phone" placeholder="Contact Phone*" class="form-control" type="text" required data-error="Please enter Contact Phone">
							<div class="input-group-icon"><i class="fa fa-phone"></i></div>
						</div><!-- end form-group -->
						<div class="form-group">
							<div class="help-block with-errors hidden"></div>
							<input name="subject" id="subject" placeholder="Subject*" class="form-control" type="text" required data-error="Please enter Subject">
							<div class="input-group-icon"><i class="fa fa-book"></i></div>
						</div><!-- end form-group -->
						<div class="form-group">
							<div class="help-block with-errors hidden"></div>
							<textarea rows="3" name="message" id="message" placeholder="Write comment here*" class="form-control" required data-error="Please enter Contact message"></textarea>
							<div class="input-group-icon"><i class="fa fa-pencil"></i></div>
						</div><!-- end form-group -->
						<div class="form-group">
							<button type="submit" id="submit" class="btn btn-shutter-out-horizontal">Send Message</button>
						</div><!-- end form-group -->
					</form>
					<!-- end contact form -->
				</div><!--End col -->
			</div><!-- end row -->
		 </div><!-- end container -->
	</section>
	<!-- end contact -->

	<!-- start success-story -->
	<section id="success-story" class="success-story">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap">
						<h2 class="title-text"><span>Success <strong>Story</strong></span></h2>
						<div class="title-line text-center">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
				</div><!-- end col -->
				<!-- BEGIN count Box -->
				<div class="col-sm-12 text-center">
					<div class="col-xs-6 col-md-3">
						<div class="icon"><i class="fa fa-code"></i></div>
						<div class="counter-wrap">
							<span class="counter">372601</span>
							<p>LINES OF CODE</p>
						</div><!-- end counter-wrap -->
					</div><!-- end col -->
					<div class="col-xs-6 col-md-3">
						<div class="icon"><i class="fa fa-coffee"></i></div>
						<div class="counter-wrap">
							<span class="counter">1350</span>
							<p>CUPS OF COFFEE</p>
						</div><!-- end counter-wrap -->
					</div><!-- end col -->
					<div class="col-xs-6 col-md-3">
						<div class="icon"><i class="fa fa-rocket"></i></div>
						<div class="counter-wrap">
							<span class="counter">528</span>
							<p>FINISHED PROJECTS</p>
						</div><!-- end counter-wrap -->
					</div><!-- end col -->
					<div class="col-xs-6 col-md-3">
						<div class="icon"><i class="fa fa-smile-o"></i></div>
						<div class="counter-wrap">
							<span class="counter">455</span>
							<p>SATISFIED CLIENTS</p>
						</div><!-- end counter-wrap -->
					</div><!-- end col -->
				</div><!-- end text-center -->
				<!-- END count Box -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!--End of #success-story -->

@endsection


@push('myjs')

@endpush
