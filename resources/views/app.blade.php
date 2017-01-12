<html>
    <head>
        <title>E-Commerce Site</title>

        <!-- External Plugins CSS -->
		<link rel="stylesheet" href="external/slick/slick.css">
		<link rel="stylesheet" href="external/slick/slick-theme.css">
		<link rel="stylesheet" href="external/magnific-popup/magnific-popup.css">
		<link rel="stylesheet" href="external/bootstrap-select/bootstrap-select.css">	
		<!-- Custom CSS -->
		<link rel="stylesheet" href="/assets/css/style.css">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="font/style.css">
		<!-- Head Libs -->
		<!-- Modernizr -->
		<script src="external/modernizr/modernizr.js"></script>
    </head>
    <body>
        @include('partial.header')
        @yield('Content')
        @include('partial.footer')
    </body>
</html>