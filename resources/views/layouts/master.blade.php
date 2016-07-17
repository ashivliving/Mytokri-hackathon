<!DOCTYPE html>
<html>
<head>
	<title>Deals4U | Hackathon</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/mq-32.css" media="screen and (min-width: 32.5em)"/>
	<link rel="stylesheet" href="css/mq-48.css" media="screen and (min-width: 48em)"/>
	<link rel="stylesheet" href="css/mq-67.css" media="screen and (min-width: 67.5em)"/>
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>
<div class="page home">

	<header role="banner" class="cf">

		<div class="top-wrap">
			<div class="row">
				<div class="large-3 columns">
					<div class="logo">
						<a href="index.html">Couponizer</a>
					</div>
				</div>
				<nav class="large-6 columns">
					<ul class="rr main-menu">
						<li class="current"><a href="index.html">Home</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li>
							<a href="search-results.html">Extra</a>
							<ul>
								<li><a href="company.html">Company</a></li>
								<li><a href="404.html">404 page</a></li>
								<li><a href="no-results.html">No results</a></li>
								<li><a href="search-results.html">Search results</a></li>
							</ul>
						</li>
						<li><a href="coupons.html">Coupons</a></li>
						<li><a href="post.html">Post</a></li>
					</ul>
				</nav>
				<div class="large-3 columns">
					<div class="account cf">
						<a href="#" class="input button blue tertiary icon plus">Join us</a>
						<a href="#" class="input button transparent tertiary">Log in</a>
					</div>
				</div>
			</div>
		</div>

		<div class="search-wrap stripe-white">
			<div class="row">
				<form action="/search" method="get">
					<div class="small-9 large-10 columns">
						<label class="search-box">
							<input type="text" name="s" class="input field primary" placeholder="Search listing">
							<a href="#" class="icon clear ir" id="clear-sb">Clear</a>
						</label>
					</div>
					<div class="small-3 large-2 columns">
						<input type="submit" class="input button primary red" value="Search">
					</div>
				</form>
			</div>
		</div>
	</header>
	</div>


	@yield('content')

	<footer role="contentinfo">
		<div class="stripe-dark pre-footer-wrap">
			<div class="row">
				<div class="large-4 columns">
					<h3 class="alt">About</h3>
					<p>
						Ut sodales ultrices metus, at molestie tellus cursus quis. Cras placerat bibendum quam sed
						facilisis. Suspendisse dapibus eros eget tellus tempor lacinia. Cras ornare lorem sit amet arcu
						accumsan ut tristique est fringilla.
					</p>
				</div>
				<div class="small-6 large-4 large-offset-1 columns">
					<h3 class="alt">Recent Tweets</h3>
					<div class="tweet">
						<p>
							Couponizer is a multi-purpose PSD template. Created by #bestwebsoft - hand-made websites
							from great guys http://t.co/HXvWw
						</p>
						<a href="#" class="posted">posted 5 minutes ago</a>
					</div>
				</div>
				<nav class="small-6 large-2 large-offset-1 columns">
					<h3 class="alt">Menu</h3>
					<ul class="rr footer-menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Jobs</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="stripe-darker footer-wrap">
			<div class="row">
				<div class="large-3 columns">
					<div class="logo">
						<a href="#">Couponizer</a>
					</div>
				</div>
				<div class="large-6 columns">
					<div class="copyright">Copyright &copy; 2013, developed by <a
								href="http://teothemes.com/">TeoThemes</a>. All rights reserved.
					</div>
				</div>
				<div class="large-3 columns">
					<ul class="rr social">
						<li><a href="#" class="ir tw">Twitter</a></li>
						<li><a href="#" class="ir in">LinkedIn</a></li>
						<li><a href="#" class="ir fb">Facebook</a></li>
					</ul>
				</div>
			</div>
		</div>

	</footer>


</div>

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>

</body>
</html>
