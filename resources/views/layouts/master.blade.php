<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:300,400,500,600,700|Merriweather:300,400,300i,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/css/swiper.css') }}" type="text/css" />

	<!-- shop Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/demos/shop/shop.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/demos/shop/css/fonts.css') }}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('css/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{ asset('css/css/colors.php?color=000000') }}" type="text/css" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/include/rs-plugin/css/settings.css') }}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/include/rs-plugin/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/include/rs-plugin/css/navigation.css') }}">
	<link rel="icon" href="{{ asset('css/images/favicon.ico') }}" type="image/x-icon">
 	@yield('css')
<body>
@yield('content')

<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>
	@yield('js')
</body>
</html>