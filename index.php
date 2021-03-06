<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=0.27">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		<link rel="stylesheet" href="css/css.css">
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
				<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Add your site or application content here -->

		<!-- HEADER -->
		<header id="header">
			<div class="container">
				<a id="logo" href="#"><img alt="logo" src="img/logo.png"></a>
				<nav>
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Sub-menu Item 1</a></li>
								<li><a href="#">Sub-menu Item 2</a></li>
								<li><a href="#">Sub-menu Item 3</a></li>
							</ul>
						</li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Contact</a></li>
						<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- HEADER END -->

		<?php
		$page = 'home';
		if(isset($_GET['page']))
			$page = $_GET['page'];
		switch($page) {
			case 'home':
				include('page-home.php');
				break;
			case 'about':
				include('page-about.php');
				break;
			case 'technology':
				include('page-technology.php');
				break;
		}
		?>

		<!-- CONTACT -->
		<div id="contact">
			<div class="container">
				<div class="row-1">
					<div>
						<img alt="contact phone" src="img/contact-phone.png">
						<strong>1 (949) 857 9220</strong>
					</div>
					<div>
						<img alt="contact mail" src="img/contact-mail.png">
						<strong>info@smileirvine.com</strong>
					</div>
					<div>
						<img alt="contact location" src="img/contact-location.png">
						<strong>Irvine, CA</strong>
					</div>
				</div>
				<div class="row-2">
					<strong>We'd Love to Hear From You.</strong> <a class="btn btn-primary" href="#">Schedule a Visit</a>
				</div>
			</div>
		</div>
		<!-- CONTACT END -->

		<!-- ABOUT -->
		<div id="about">
			<div class="container">
				<div class="row-1">
					<div class="col-1">
						<h3>America's Top Dentist</h3>
						<p>In 2009, Dr Loo was recognized as one of <strong>"America's Top Dentist"</strong>. Recently, he was also nominated as one of the best general and cosmetic dentist in Orange and Los Angeles County by the <strong>"Best Of LA"</strong> TV program. <a href="#">Watch Interview ›</a></p>
					</div>
					<div class="col-2">
						<h3>Our Philosophy</h3>
						<p>Our mission is to provide our patients with the latest proven technology, most minimal &amp; conservative techniques and the best dental materials available. <a href="#">Our Philosophy ›</a></p>
					</div>
					<div class="col-3">
						<h3>Photo Gallery</h3>
						<div class="gallery">
							<a href="#"><img src="img/stock-photos/iStock_000001542938Medium.jpg"></a>
							<a href="#"><img src="img/stock-photos/iStock_000005608156Small.jpg"></a>
							<a href="#"><img src="img/stock-photos/iStock_000006512474Medium.jpg"></a>
							<a href="#"><img src="img/stock-photos/iStock_000011119400Small.jpg"></a>
							<a href="#"><img src="img/stock-photos/iStock_000011255991Large.jpg"></a>
							<a href="#"><img src="img/stock-photos/iStock_000011545493Medium.jpg"></a>
							<a href="#"><img src="img/stock-photos/iStock_000014262915Large.jpg"></a>
							<a href="#"><img src="img/stock-photos/iStock_000016668656Small.jpg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ABOUT END -->

		<!-- FOOTER -->
		<footer id="footer">
			<div class="container">
				<div class="left">
					<a href="#">Home</a> &nbsp;
					<a href="#">About Us</a> &nbsp;
					<a href="#">Services</a> &nbsp;
					<a href="#">Technology</a> &nbsp;
					<a href="#">Testimonials</a> &nbsp;
					<a href="#">Contact</a> &nbsp;
					| &nbsp;
					Copyright 2013 Dr Shawn Loo DDS
				</div>
				<div class="social">
					Follow us:
					<a class="facebook" href="#">Facebook</a>
					<a class="twitter" href="#">Twitter</a>
					<a class="youtube" href="#">YouTube</a>
					<a class="yelp" href="#">Yelp</a>
					<a class="healthgrades" href="#">HealthGrades</a>
				</div>
			</div>
		</footer>
		<!-- FOOTER END -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
				(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
				function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
				e=o.createElement(i);r=o.getElementsByTagName(i)[0];
				e.src='//www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
				ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>

		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</body>
</html>
