<!DOCTYPE html>
<html>
<head>
	<title>Couponizer | Hackathon</title>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/foundation.css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/flexslider.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/mq-32.css" media="screen and (min-width: 32.5em)"/>
	<link rel="stylesheet" href="/css/mq-48.css" media="screen and (min-width: 48em)"/>
	<link rel="stylesheet" href="/css/mq-67.css" media="screen and (min-width: 67.5em)"/>
	<script src="/js/vendor/modernizr-2.6.2.min.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=no">
</head>
<body>
<div class="page home">

	<header role="banner" class="cf">

		<div class="top-wrap">
			<div class="row">
				<div class="large-3 columns">
					<div class="logo">
						<a href="/">Couponizer</a>
					</div>
				</div>
				
			</div>
		</div>

		<h1 class="text-center">{{$title}}</h1>

		<div class="search-wrap stripe-white">
			<div class="row">
				<form action="/search" method="get">
					<div class="small-9 large-10 columns">
						<label class="search-box">
							<input type="text" name="q" class="input field primary" placeholder="Search listing">
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
				<div class="large-7 columns">
					<h3 class="alt">About</h3>
					<p>
						The online market in India is coming up with new arrivals daily which are surely going to affect the shopaholic people. Many ecommerce website are offering various deals and online shopping coupons for its users but user need to know everything every deal so that he can avail the best. So we are curious enough to fulfill your every demand with the savings also that’s why we will provide you everything you want.To know best Online Shopping offers keep visiting us.
					</p>
				</div>
				<div class="small-6 large-4 large-offset-1 columns">
					<h3 class="alt">Recent Tweets</h3>
					<div class="tweet">
						<p>
							Winner of #Hackathon organised by #mytokri is #Couponizer
							from great guys http://mytokri.com
						</p>
						<a href="#" class="posted">posted 5 minutes ago</a>
					</div>
				</div>
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
					<div class="copyright">Copyright &copy; 2016, developed by team INSOMNIAC . No rights reserved.
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
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>
</body>

</body>
</html>
