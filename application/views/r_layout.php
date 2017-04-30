<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
		  <script type="text/javascript">
            t0 = performance.now();
        </script>
		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
		<title>PerfectR | PHP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="shortcut icon" href=<?php echo site_url('assets/images/favicon.ico') ?>>
		<link rel="apple-touch-icon" href=<?php echo base_url('assets/images/apple-touch-icon.png') ?>>
		<link rel="apple-touch-icon" sizes="72x72" href=<?php echo base_url('assets/images/apple-touch-icon-72x72.png') ?>>
		<link rel="apple-touch-icon" sizes="114x114" href=<?php echo base_url('assets/images/apple-touch-icon-114x114.png') ?>>
		
		<!-- ==============================================
		CSS
		=============================================== -->    
		<link rel="stylesheet" href=<?php echo base_url('assets/css/bootstrap.min.css') ?>>
		<link rel="stylesheet" href=<?php echo base_url('assets/css/font-awesome.css') ?>>
		<link rel="stylesheet" href=<?php echo base_url('assets/css/twentytwenty.css') ?>>
		<link rel="stylesheet" href=<?php echo base_url('assets/css/perfectr.css') ?>>
		<link rel="stylesheet" href=<?php echo base_url('assets/css/perfectr-color-5.css') ?>>
		
		<!-- ==============================================
		Fonts
		=============================================== -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		
		<!-- ==============================================
		JS
		=============================================== -->
			
		<!--[if lt IE 9]>
			<script src="assets/js/libs/respond.min.js"></script>
		<![endif]-->
		
		<script type="text/javascript" src=<?php echo base_url('assets/js/libs/modernizr.min.js') ?>></script>
		
	</head>
  
	<body data-spy="scroll" data-target="#site-nav" data-offset="300">
	
		<span id="preloader"><span></span></span>
	
		<!-- ==============================================
		MAIN NAVIGATION
		=============================================== -->
	
		<div class="main-nav navbar navbar-fixed-top navbar-transparent">
			<div class="navbar-header">
			
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
					<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				
				<!-- ======= LOGO ========-->
				<a class="navbar-brand scrollto" href="#home">
					
					<img class="site-logo transparent-logo" src=<?php echo base_url('assets/images/logo-transparent-color-5.png') ?> alt="logo" />
					<img class="site-logo" src="assets/images/logo-color-5.png" alt="logo" />
				</a>
				
			</div>
			
			<div id="site-nav" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="sr-only">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#about" class="scrollto">About Me</a>
					</li>
					<li>
						<a href="#services" class="scrollto">Services</a>
					</li>
					<li>
						<a href="#guarantee" class="scrollto">Guarantee</a>
					</li>
					<li>
						<a href="#portfolio" class="scrollto">Portfolio</a>
					</li>
					<li>
						<a href="#testimonials" class="scrollto">Testimonials</a>
					</li>
					<li>
						<a href="#contact" class="scrollto">Contact</a>
					</li>
				</ul>
			</div><!--End navbar-collapse -->
			
		</div><!--End main-nav -->
		
		<!-- ==============================================
		HEADER
		=============================================== -->
		<header id="home" class="bg-image fixed-bg window-height overlay-on-scroll parallax-bg" data-stellar-background-ratio=".5" style="background-image:url(assets/images/header-dark.jpg);">
		
			<div class="middle-align-content">
				<div class="container text-center text-lg parallax-move-down">
			
					<h2 class="text-lg scrolling-animation fade-down d2">Take your</h2>
					<h1 class="text-bold text-lg scrolling-animation scale-in">Responsive Portfolio</h1>
					<p class="text-lg scrolling-animation fade-up d2">to the Next Level</p>
			
				</div>
			</div>
			
		</header>
		
		<div class="bg-light pt-160 pb-160">
		
			<div class="container">
			
				<div class="row">
				
					<div id="waypoints" class="col-sm-10 col-sm-offset-1 text-center scrolling-animation fade-up">
					
						<p class="text-lg-2x">
							<sup><i class="fa fa-quote-left fa-fw text-color"></i></sup>
							<em class="text-gray"> Every problem has a solution.</em>
							<sup><i class="fa fa-quote-right fa-fw text-color"></i></sup>
						</p>
					
						<p class="text-2x"><em>You just have to be creative enough to find it.</em></p>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
		<!-- ==============================================
		ABOUT
		=============================================== -->
		<div id="about" class="bg-gray">
		
			<div class="container-fluid">
			
				<div class="row">
				
					<div class="col-md-6 pt-240 pb-240 text-center">
						
						<div class="row">
						
							<div class="col-sm-10 col-sm-offset-1 scrolling-animation fade-up">
							
								<h2 class="text-lg">So, who are you Mister?</h2>
								<h3 class="text-gray mb-40 text-color text-bold">Short Answer</h3>
							
								<p>I am John Doe, a twenty five year old designer from NY. I am passionate about combining function, interaction and form to design for fitting user experiences that make people happy. I have a passion for creating challenging, intuitive and beautiful products. </p>
							</div>
							
						</div>
						
					</div>
					
					<div class="col-md-6 bg-image col-full-height hidden-sm hidden-xs" style="background-image:url(assets/images/about-bg.png);">
					</div>
				
				</div>
			
			</div>
		
		</div>
		
		<div class="text-center">
			<a class="btn btn-rect btn-xl btn-block" data-toggle="collapse" href="#resume">Long Answer<br>
				<span class="btn-subtext">Check my full Resume</span>
			</a>
		</div>
		
		<!-- ==============================================
		RESUME COLLAPSE
		=============================================== -->
		<div class="collapse scroll-on-show" id="resume">
		
			<div class="bg-gray pt-120 pb-80">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-lg-8 col-lg-offset-2">
						
							<h2 class="text-uppercase text-bold text-center mb-40 text-lg">My <span class="text-color">Education</span></h2>
						
							<img class="img-responsive img-center img-circle mb-60" src=<?php echo base_url('assets/images/education.jpg') ?> alt="" />
						
							<div class="row">
							
								<div class="col-xs-6 col-sm-4 col-md-3">
								
									<div class="content-box content-box-sm bg-color">
									
										<p class="mb-0 text-center">2010 - 2012</p>
									
									</div>
								
								</div>
								
								<div class="col-xs-12 col-sm-8 col-md-9">
								
									<h3 class="mt-10 mb-0"><span class="text-uppercase">Masters Degree</span> - <em class="text-gray">M.I.T.</em></h3>
								
								</div>
								
							</div>
						
							<hr class="hr-color mt-0 mb-40">
						
							<div class="row mb-60">
							
								<div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
								
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
								
								</div>
							
							</div>

							<div class="row">
							
								<div class="col-xs-6 col-sm-4 col-md-3">
								
									<div class="content-box content-box-sm bg-color">
									
										<p class="mb-0 text-center">2007 - 2010</p>
									
									</div>
								
								</div>
								
								<div class="col-xs-12 col-sm-8 col-md-9">
								
									<h3 class="mt-10 mb-0"><span class="text-uppercase">Bachelor Degree</span> - <em class="text-gray">UCLA</em></h3>
								
								</div>
								
							</div>
						
							<hr class="hr-color mt-0 mb-40">
						
							<div class="row mb-60">
							
								<div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
								
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
								
								</div>
							
							</div>
							
						</div>
					
					</div>
				
					<div class="row mt-80">
					
						<div class="col-lg-8 col-lg-offset-2">
						
							<h2 class="text-uppercase text-bold text-center mb-40 text-lg">Work <span class="text-color">Experience</span></h2>
						
							<img class="img-responsive img-center img-circle mb-60" src="assets/images/working.jpg" alt="" />
						
							<div class="row">
							
								<div class="col-xs-6 col-sm-4 col-md-3">
								
									<div class="content-box content-box-sm bg-color">
									
										<p class="mb-0 text-center">2015 - Now</p>
									
									</div>
								
								</div>
								
								<div class="col-xs-12 col-sm-8 col-md-9">
								
									<h3 class="mt-10 mb-0"><span class="text-uppercase">Lead Designer</span> - <a href="#link"><em class="text-gray text-hover-color ">MegaSoft.com</em></a></h3>
								
								</div>
								
							</div>
						
							<hr class="hr-color mt-0 mb-40">
						
							<div class="row mb-60">
							
								<div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
								
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
								
								</div>
							
							</div>
							
							<div class="row">
							
								<div class="col-xs-6 col-sm-4 col-md-3">
								
									<div class="content-box content-box-sm bg-color">
									
										<p class="mb-0 text-center">2014 - 2015</p>
									
									</div>
								
								</div>
								
								<div class="col-xs-12 col-sm-8 col-md-9">
								
									<h3 class="mt-10 mb-0"><span class="text-uppercase">Senior Designer</span> - <a href="#link"><em class="text-gray text-hover-color ">Orange.com</em></a></h3>
								
								</div>
								
							</div>
						
							<hr class="hr-color mt-0 mb-40">
						
							<div class="row mb-60">
							
								<div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
								
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
								
								</div>
							
							</div>
							
							<div class="row">
							
								<div class="col-xs-6 col-sm-4 col-md-3">
								
									<div class="content-box content-box-sm bg-color">
									
										<p class="mb-0 text-center">2012 - 2014</p>
									
									</div>
								
								</div>
								
								<div class="col-xs-12 col-sm-8 col-md-9">
								
									<h3 class="mt-10 mb-0"><span class="text-uppercase">Designer</span> - <a href="#link"><em class="text-gray text-hover-color ">ThatCompany.com</em></a></h3>
								
								</div>
								
							</div>
						
							<hr class="hr-color mt-0 mb-40">
						
							<div class="row mb-40">
							
								<div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
								
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
								
								</div>
							
							</div>
							
						</div>
					
					</div>
				
				</div>
			
			</div>
			
		</div>
		
		
		
		<!-- ==============================================
		CHARTS
		=============================================== -->
		<div id="guarantee" class="bg-image pt-120 pb-80 fixed-bg" style="background-image:url(assets/images/guarantee-bg.jpg);">
		
			<div class="container">
			
				<div class="scrolling-animation fade-up">
					<h2 class="text-center text-lg">Guaranteed Results</h2>
					<hr class="hr-color hr-sm hr-center mt-20 mb-20">
					<h4 class="text-center">No Half Measures. Because you deserve the best.</h4>
				</div>
			
				<div class="row mt-120 text-center">
				
					<div class="col-md-3 col-md-offset-1 mb-60">
					
						<div class="progress-circle mb-20 mt-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="100" data-speed="2000"></span></div>
						<h3>Unique</h3>
					
					</div>
				
					<div class="col-md-4 mb-60">
					
						<div class="progress-circle progress-lg progress-bold mb-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="100" data-speed="3000"></span></div>
						<h2 class="text-bold text-lg">Responsive</h2>
					
					</div>
				
					<div class="col-md-3 mb-60">
					
						<div class="progress-circle mb-20 mt-40 start-on-scroll" data-percent="99"><span class="countTo" data-to="100" data-speed="2000"></span></div>
						<h3>Creative</h3>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
		
		<!-- ==============================================
		PORTFOLIO
		=============================================== -->
		<div id="portfolio" class="bg-light pt-120">
		
			<div class="container">
			
				<div class="scrolling-animation fade-up">
					<h2 class="text-lg text-center">Impressive <span class="text-color">Portfolio</span></h2>
					<hr class="hr-gray hr-center hr-sm hr-bold mb-20">
					<p class="text-gray text-center mb-80">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum.</p>
				</div>
				
				<div class="row">
				
					<div class="col-md-10 col-md-offset-1 scrolling-animation scale-in">
					
						<div class="macbook-mockup single-device">
						
							<img class="img-responsive img-center" src="assets/images/macbook-single.png" alt=""/>
							
							<div class="macbook-mockup-content flexslider controls-lg no-bullet-nav effect-zoom" data-speed="4000">
							
							  <ul class="slides">
							  
								<li class="hover-mask-parent">
								  <figure class="hover-mask-parent">
									
										<img class="img-responsive" src="assets/images/macbook-screen-1.jpg" alt="" />
									
										<figcaption class="hover-mask hover-mask-zoom-in">
										
											<div class="hover-mask-content text-center">
											
												<h3 class="mb-40 text-bold">Wonderfull Design</h3>
												<a href="project-all-devices-scrolling.html" class="btn btn-3d btn-color btn-solid">Case Study</a>
												
											</div>
										
										</figcaption>
									
									</figure>
								</li>
								
								<li class="hover-mask-parent">
								  <figure class="hover-mask-parent">
									
										<img class="img-responsive" src="assets/images/macbook-screen-2.jpg" alt="" />
									
										<figcaption class="hover-mask hover-mask-zoom-in">
										
											<div class="hover-mask-content text-center">
											
												<h3 class="mb-40 text-bold">Fully Responsive</h3>
												<a href="project-all-devices-sliders.html" class="btn btn-3d btn-color btn-solid">Case Study</a>
												
											</div>
										
										</figcaption>
									
									</figure>
								</li>
								
								<li class="hover-mask-parent">
								  <figure class="hover-mask-parent">
									
										<img class="img-responsive" src="assets/images/macbook-screen-3.jpg" alt="" />
									
										<figcaption class="hover-mask hover-mask-zoom-in">
										
											<div class="hover-mask-content text-center">
											
												<h3 class="mb-40 text-bold">Creative Portfolio</h3>
												<a href="project-synchronized-all.html" class="btn btn-3d btn-color btn-solid">Case Study</a>
												
											</div>
										
										</figcaption>
									
									</figure>
								</li>
								
							  </ul>
							  
							</div>
							
						</div>
					
					</div>
				
				</div>
				
			</div>
		
		</div>
		
		<!-- ==============================================
		BLOCK BUTTON
		=============================================== -->
		<div class="text-center">
			<a class="btn btn-rect btn-xl btn-block" href="https://wrapbootstrap.com/theme/perfectr-impressive-portfolio-WB0H4T00K" target="_blank">Buy Now<br>
				<span class="btn-subtext">You won't regret it</span>
			</a>
		</div>
		
		<div class="bg-light pt-40">
		
			<div class="container">
			
				<div class="filter-buttons text-center mt-60 mb-40" data-target="#grid-1">
					
					<ul class="list-unstyled list-inline">
						<li class="active filter-button scrolling-animation fade-right d3" data-filter="*">All Projects</li>
						<li class="filter-button scrolling-animation fade-right d2" data-filter=".cat-1">My Websites</li>
						<li class="filter-button scrolling-animation fade-right d1" data-filter=".cat-2">My Apps</li>
						<li class="filter-button scrolling-animation fade-right" data-filter=".cat-3">My Logos</li>
					</ul>
					
				</div>
				
				<div id="grid-1" class="grid grid-gap-sm grid-3-cols fade-in">
				
					<div class="grid-item cat-1">
						
						<a href="project-synchronized-all.html">
						
							<figure class="hover-mask-parent img-hover-zoom">
							
								<img class="img-responsive" src="assets/images/thumb-1.jpg" alt="" />
							
								<figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
								
									<div class="hover-mask-content text-center">
									
										<h3 class="mb-10 text-bold">Great Design</h3>
										<p class="">#logos #apps</p>
										
									</div>
								
								</figcaption>
							
							</figure>
						
						</a>
						
					</div>
					<div class="grid-item cat-2">
						
						<a href="project-all-devices-sliders.html">
						
							<figure class="hover-mask-parent img-hover-zoom">
							
								<img class="img-responsive" src="assets/images/thumb-2.jpg" alt="" />
							
								<figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
								
									<div class="hover-mask-content text-center">
									
										<h3 class="mb-10 text-bold">Responsive Design</h3>
										<p class="">#web #design</p>
										
									</div>
								
								</figcaption>
							
							</figure>
						
						</a>
						
					</div>
					<div class="grid-item cat-1">
						
						<a href="project-all-devices-scrolling.html">
						
							<figure class="hover-mask-parent img-hover-zoom">
							
								<img class="img-responsive" src="assets/images/thumb-3.jpg" alt="" />
							
								<figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
								
									<div class="hover-mask-content text-center">
									
										<h3 class="mb-10 text-bold">User Experience</h3>
										<p class="">#web #apps</p>
										
									</div>
								
								</figcaption>
							
							</figure>
						
						</a>
						
					</div>
					<div class="grid-item cat-2">
						
						<a href="project-synchronized-macbook-iphone.html">
						
							<figure class="hover-mask-parent img-hover-zoom">
							
								<img class="img-responsive" src="assets/images/thumb-4.jpg" alt="" />
							
								<figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
								
									<div class="hover-mask-content text-center">
									
										<h3 class="mb-10 text-bold">100% Responsive</h3>
										<p class="">#web #apps</p>
										
									</div>
								
								</figcaption>
							
							</figure>
						
						</a>
						
					</div>
					<div class="grid-item cat-1">
						
						<a href="project-macbook-iphone-sliders.html">
						
							<figure class="hover-mask-parent img-hover-zoom">
							
								<img class="img-responsive" src="assets/images/thumb-5.jpg" alt="" />
							
								<figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
								
									<div class="hover-mask-content text-center">
									
										<h3 class="mb-10 text-bold">Great Design</h3>
										<p class="">#web #design</p>
										
									</div>
								
								</figcaption>
							
							</figure>
						
						</a>
						
					</div>
					<div class="grid-item cat-2">
						
						<a href="project-all-devices-scrolling.html">
						
							<figure class="hover-mask-parent img-hover-zoom">
							
								<img class="img-responsive" src="assets/images/thumb-6.jpg" alt="" />
							
								<figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
								
									<div class="hover-mask-content text-center">
									
										<h3 class="mb-10 text-bold">Creative Design</h3>
										<p class="">#web #logos</p>
										
									</div>
								
								</figcaption>
							
							</figure>
						
						</a>
						
					</div>
					<div class="grid-item cat-3">
						
						<a href="project-all-devices-sliders.html">
						
							<figure class="hover-mask-parent img-hover-zoom">
							
								<img class="img-responsive" src="assets/images/thumb-7.jpg" alt="" />
							
								<figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
								
									<div class="hover-mask-content text-center">
									
										<h3 class="mb-10 text-bold">UI/UX</h3>
										<p class="">#design #apps</p>
										
									</div>
								
								</figcaption>
							
							</figure>
						
						</a>
						
					</div>
					<div class="grid-item cat-3">
						
						<a href="project-synchronized-all.html">
						
							<figure class="hover-mask-parent img-hover-zoom">
							
								<img class="img-responsive" src="assets/images/thumb-8.jpg" alt="" />
							
								<figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
								
									<div class="hover-mask-content text-center">
									
										<h3 class="mb-10 text-bold">Great Design</h3>
										<p class="">#web #design</p>
										
									</div>
								
								</figcaption>
							
							</figure>
						
						</a>
						
					</div>
					<div class="grid-item cat-3">
						
						<a href="project-desktop-scrolling.html">
						
							<figure class="hover-mask-parent img-hover-zoom">
							
								<img class="img-responsive" src="assets/images/thumb-9.jpg" alt="" />
							
								<figcaption class="hover-mask hover-mask-color hover-mask-zoom-out">
								
									<div class="hover-mask-content text-center">
									
										<h3 class="mb-10 text-bold">Creative Portfolio</h3>
										<p class="">#web #apps</p>
										
									</div>
								
								</figcaption>
							
							</figure>
						
						</a>
						
					</div>
				
				</div>
			
			</div>
		
		</div>
		
		<!-- ==============================================
		TESTIMONIALS
		=============================================== -->
		<div id="testimonials" class="bg-gray pt-120 pb-80">
		
			<div class="container">
			
				<div class="scrolling-animation fade-up">
					<h2 class="text-lg text-center">Satisfied <span class="text-color">Clients</span></h2>
					<hr class="hr-gray hr-bold hr-sm hr-center">
				</div>
				
				<div class="row mt-100 mb-80">
				
					<div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-right d2">
					
						<a href="#link"><img class="img-responsive img-hover-opacity" src="assets/images/client-logo-1.png" alt="" /></a>
					
					</div>
				
					<div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-right d1">
					
						<a href="#link"><img class="img-responsive img-hover-opacity" src="assets/images/client-logo-2.png" alt="" /></a>
					
					</div>
				
					<div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-in">
					
						<a href="#link"><img class="img-responsive img-hover-opacity" src="assets/images/client-logo-3.png" alt="" /></a>
					
					</div>
				
					<div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-in">
					
						<a href="#link"><img class="img-responsive img-hover-opacity" src="assets/images/client-logo-4.png" alt="" /></a>
					
					</div>
				
					<div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-left d1">
					
						<a href="#link"><img class="img-responsive img-hover-opacity" src="assets/images/client-logo-5.png" alt="" /></a>
					
					</div>
				
					<div class="col-sm-4 col-lg-2 mb-40 scrolling-animation fade-left d2">
					
						<a href="#link"><img class="img-responsive img-hover-opacity" src="assets/images/client-logo-6.png" alt="" /></a>
					
					</div>
				
				</div>
			
				<div class="row scrolling-animation fade-up">
				
					<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
					
						<div class="testimonials flexslider no-direction-nav effect-slide" data-speed="5000">
						
							<ul class="slides">
							
								<li class="icon-box icon-box-round mb-40 icon-top-left">
								
									<span class="icon-inline icon-circle icon-solid-color nml mb-20"><i class="fa fa-quote-left"></i></span>
									
									<div class="icon-box-content bg-light">
										
										<h3 class="text-color"><img class="img-circle" src="assets/images/client-1.jpg" alt="" />John Doe</h3>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis.</p>
									
										<p class="text-gray text-right text-hover-color mt-40"><em><a href="#link">thisCompany.com</a></em></p>
									
									</div>
									
								</li>
							
								<li class="icon-box icon-box-round mb-40 icon-top-left">
								
									<span class="icon-inline icon-circle icon-solid-color nml mb-20"><i class="fa fa-quote-left"></i></span>
									
									<div class="icon-box-content bg-light">
										
										<h3 class="text-color"><img class="img-circle" src="assets/images/client-2.jpg" alt="" />Jane Doe</h3>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis.</p>
									
										<p class="text-gray text-right text-hover-color mt-40"><em><a href="#link">thatCompany.com</a></em></p>
									
									</div>
									
								</li>
							
								<li class="icon-box icon-box-round mb-40 icon-top-left">
								
									<span class="icon-inline icon-circle icon-solid-color nml mb-20"><i class="fa fa-quote-left"></i></span>
									
									<div class="icon-box-content bg-light">
										
										<h3 class="text-color"><img class="img-circle" src="assets/images/client-1.jpg" alt="" />John Doe</h3>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis.</p>
									
										<p class="text-gray text-right text-hover-color mt-40"><em><a href="#link">thisCompany.com</a></em></p>
									
									</div>
									
								</li>
							
								<li class="icon-box icon-box-round mb-40 icon-top-left">
								
									<span class="icon-inline icon-circle icon-solid-color nml mb-20"><i class="fa fa-quote-left"></i></span>
									
									<div class="icon-box-content bg-light">
										
										<h3 class="text-color"><img class="img-circle" src="assets/images/client-2.jpg" alt="" />Jane Doe</h3>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis.</p>
									
										<p class="text-gray text-right text-hover-color mt-40"><em><a href="#link">thatCompany.com</a></em></p>
									
									</div>
									
								</li>
							
							</ul>
							
						</div>
					</div>
				
				</div>
			
			</div>
		
		</div>
		
		<!-- ==============================================
		CONTACT
		=============================================== -->
		<div id="contact" class="bg-image pt-160 pb-120 fixed-bg" style="background-image:url('assets/images/contact-bg.jpg')">
		
			<div class="container">
			
				<div class="row">
				
					<div class="col-md-6 col-lg-5 col-md-offset-1">
					
						<h2 class="text-uppercase text-bold mb-40 scrolling-animation fade-up">Drop me a line</h2>
					
						<form class="contact-form text-dark mb-120 scrolling-animation fade-up d1" action="assets/php/contact.php" method="post" novalidate>
						
							<div class="form-i-right">
								<input class="form-control input-rect input-solid-white mb-20 requiredField" placeholder="Your Name" type="text" name="name">
								<i class="fa fa-user"></i>
							</div>
							
							<div class="form-i-right">
								<input class="form-control input-rect input-solid-white mb-20 requiredField" placeholder="Your Email" type="email" name="email">
								<i class="fa fa-envelope"></i>
							</div>
							
							<div class="form-i-right">
								<textarea class="mb-20 form-control input-rect input-solid-white requiredField" rows="5" placeholder="Your Message" name="message"></textarea>
								<i class="fa fa-comments"></i>
							</div>
							
							<button type="submit" class="btn btn-block btn-rect btn-3d">Send Message</button>
							<input type="hidden" name="submitted" id="submitted" value="true" />
						
							<p class="form-error empty-fields"><i class="fa fa-exclamation-triangle"></i>Please fill the required fields</p>
							<p class="form-error email-error"><i class="fa fa-exclamation-triangle"></i>Email looks invalid</p>
							<p class="form-success"><i class="fa fa-check"></i>Your message has been sent</p>
							
						</form>
					
						<h2 class="text-uppercase text-bold mb-20 scrolling-animation fade-up">Contact Information</h2>
						
						<div class="scrolling-animation fade-up d1">
							<p>250 W Broadway</p>
							<p>New York, NY 10013</p>
							<p>(123) 456 - 7890 </p>
							<p><a href="mailto:mail@example.com" class="text-hover-color">mail@example.com</a></p>
						</div>
						
					</div>
				
				</div>
			
			</div>
		
		</div>
		
		<!-- ==============================================
		FOOTER
		=============================================== -->
		<footer>
		
			<div class="main-footer bg-dark pt-80 pb-40">
			
				<div class="container text-center">
				
					<div class="row">
					
						<div class="col-md-8 col-md-offset-2 mb-80">
						
							<div class="icon-box icon-box-round icon-top">
							
								<span class="icon-inline icon-circle icon-solid-color"><i class="fa fa-twitter"></i></span>
								
								<div class="icon-box-content bg-dark">
									
									<h4 class="mb-40"><em><a class="text-hover-color" href="https://twitter.com/qthemes" target="_blank">twitter.com/qthemes</a></em></h4>
									
									<div id="footer-twitter" class="twitter-slider flexslider dynamic-slides no-bullet-nav" data-widget-id="386017398488186880" data-tweets-length="3">
									</div>
									
								</div>
								
							</div>
						
						</div>
					
					</div>
					
					<ul class="list-inline list-unstyled list-gap-lg text-center mb-0">
						<li><a href="https://twitter.com/qthemes" target="_blank" class="text-hover-color"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
						<li><a href="http://q-themes.net/" target="_blank" class="text-hover-color"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
						<li><a href="https://twitter.com/qthemes" target="_blank" class="text-hover-color"><i class="fa fa-pinterest fa-2x fa-fw"></i></a></li>
						<li><a href="http://q-themes.net/" target="_blank" class="text-hover-color"><i class="fa fa-tumblr fa-2x fa-fw"></i></a></li>
						<li><a href="https://twitter.com/qthemes" target="_blank" class="text-hover-color"><i class="fa fa-skype fa-2x fa-fw"></i></a></li>
						<li><a href="http://q-themes.net/" target="_blank" class="text-hover-color"><i class="fa fa-google-plus fa-2x fa-fw"></i></a></li>
						<li><a href="https://twitter.com/qthemes" target="_blank" class="text-hover-color"><i class="fa fa-youtube fa-2x fa-fw"></i></a></li>
						<li><a href="http://q-themes.net/" target="_blank" class="text-hover-color"><i class="fa fa-vimeo fa-2x fa-fw"></i></a></li>
					</ul>
					
				</div>
			
			</div>
		
			<div class="bg-dark">
				
				<div class="container text-gray text-center">
				
					<p class="mb-20 mt-20">&copy; 2016 <a href="http://q-themes.net/" class="text-hover-color" target="_blank">Qthemes</a></p>
				
				</div>
				
			</div>
		
		</footer>
		
		<!-- ==============================================
		MODALS
		=============================================== -->
		<div id="desktop-modal" class="modal fade">
		
			<span class="close-modal" data-dismiss="modal">&times;</span>
				
			<div class="modal-dialog">
			
				<div class="modal-content text-center">
				
					<h2 class="mb-10">Desktop devices</h2>
					<h4 class="mb-40">Full Experience</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
					
					<a href="#portfolio" class="btn mt-40 btn-border btn-i-right scrollto" data-dismiss="modal">View Porftolio<i class="fa fa-arrow-down fa-lg"></i></a>
					
				</div>
				
			</div>
			
		</div>
		
		<div id="mobile-modal" class="modal fade">
		
			<span class="close-modal" data-dismiss="modal">&times;</span>
				
			<div class="modal-dialog">
			
				<div class="modal-content text-center">
				
					<h2 class="mb-10">Mobile devices</h2>
					<h4 class="mb-40">In your hands</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum vehicula condimentum. Praesent iaculis mauris dolor, eu eleifend orci mollis quis. Aenean aliquam velit nec interdum ullamcorper. Vestibulum eget urna vel ipsum sodales porttitor et nec libero.</p>
					
					<a href="#portfolio" class="btn mt-40 btn-border btn-i-right scrollto" data-dismiss="modal">View Porftolio<i class="fa fa-arrow-down fa-lg"></i></a>
					
				</div>
				
			</div>
			
		</div>
		
		<!-- ==============================================
		SCRIPTS
		=============================================== -->	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.9.1.min.js">\x3C/script>')</script>
		
		<script src=<?php echo base_url('assets/js/libs/bootstrap.min.js') ?>></script>
		<script src=<?php echo base_url('assets/js/libs/jquery.easing.1.3.min.js') ?>></script>
		<script src=<?php echo base_url('assets/js/jquery.event.move.js') ?>></script>
		<script src=<?php echo base_url('assets/js/jquery.twentytwenty.js') ?>></script>
		<script src=<?php echo base_url('assets/js/jquery.flexslider-min.js') ?>></script>
		<script src=<?php echo base_url('assets/js/jquery.easypiechart.js') ?>></script>
		<script src=<?php echo base_url('assets/js/jquery.countTo.js') ?>></script>
		<script src=<?php echo base_url('assets/js/isotope.pkgd.min.js') ?>></script>
		<script src=<?php echo base_url('assets/js/jquery.stellar.min.js') ?>></script>
		<script src=<?php echo base_url('assets/js/twitterFetcher_min.js') ?>></script>
		<script src=<?php echo base_url('assets/js/jquery.nicescroll.min.js') ?>></script>
		<script src=<?php echo base_url('assets/js/jquery.waypoints.min.js') ?>></script>
		<script src=<?php echo base_url('assets/js/scripts.js') ?>></script>
		<!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>-->
		<p id="per"></p>

     <script type="text/javascript">
            t1 = performance.now();
            document.getElementById('per').innerText = (t1-t0)+" ms";
        </script>
	</body>

</html>