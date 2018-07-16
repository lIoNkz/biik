<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/style.css">


	@yield('head')
</head>
<body data-spy="scroll" data-target=".navbar">

	<div class="page-wrapper" id="page-top">

		@include('frontend.partials._header')
		@yield('content')
		@include('frontend.partials._footer')

	</div>






	<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/js/popper.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
	<script type="text/javascript" src="/js/isInViewport.jquery.js"></script>
	<script type="text/javascript" src="/js/jquery.particleground.min.js"></script>
	<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="/js/scrollReveal.min.js"></script>
	<script src="/js/custom.js"></script>
	@yield('scripts')

</body>
</html>
