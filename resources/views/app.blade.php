<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>YOURStore - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="YOURStore - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="favicon.ico">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="/assets/external/slick/slick.css">
		<link rel="stylesheet" href="/assets/external/slick/slick-theme.css">
		<link rel="stylesheet" href="/assets/external/magnific-popup/magnific-popup.css">
		<link rel="stylesheet" href="/assets/external/bootstrap-select/bootstrap-select.css">	
		<!-- Custom CSS -->
		<link rel="stylesheet" href="/assets/css/style.css">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="/assets/font/style.css">
		<!-- Head Libs -->
		<!-- Modernizr -->
		<script src="/assets/external/modernizr/modernizr.js"></script>
	</head>
	<body class="index">
		<div id="loader-wrapper">
			<div id="loader">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>

			<!--=================================
			=           Mobile Menu            =
			==================================-->
			@include('partial.mobile_menu')

			<!--============================
			=            Header            =
			=============================-->
			@include('partial.header')

			<!--=============================
			=            Content            =
			==============================-->
			
			@yield('content');

			<!--============================
			=            Footer            =
			=============================-->
			@include('partial.footer')

		<!-- jQuery 1.10.1--> 
		<script src="/assets/external/jquery/jquery-2.1.4.min.js"></script> 
		<!-- Bootstrap 3--> 
		<script src="/assets/external/bootstrap/bootstrap.min.js"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="/assets/external/slick/slick.min.js"></script>
		<script src="/assets/external/bootstrap-select/bootstrap-select.min.js"></script>  
		<script src="/assets/external/countdown/jquery.plugin.min.js"></script> 
		<script src="/assets/external/countdown/jquery.countdown.min.js"></script>  		
		<script src="/assets/external/instafeed/instafeed.min.js"></script>  		
		<script src="/assets/external/magnific-popup/jquery.magnific-popup.min.js"></script>  		
		<script src="/assets/external/isotope/isotope.pkgd.min.js"></script> 
		<script src="/assets/external/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="/assets/external/colorbox/jquery.colorbox-min.js"></script>
		<script src="/assets/external/parallax/jquery.parallax-1.1.3.js"></script>		
		<!-- Custom --> 
		<script src="/assets/js/custom.js"></script>			
		
	</body>
</html>