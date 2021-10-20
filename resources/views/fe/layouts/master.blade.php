
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>@stack('mytitle')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- set your website meta description and keywords -->
	<meta name="description" content="Add your business website description here">
	<meta name="keywords" content="Add your business website keywords here">
	<!-- set your website favicon -->
	<link href="favicon.ico" rel="icon">

	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/fe/css/bootstrap.min.css')}}">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/fe/css/font-awesome.min.css')}}">
	<!-- Owl Carousel Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/fe/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/fe/css/owl.theme.default.min.css')}}">
	<!-- Lightbox Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/fe/css/lightbox.min.css')}}">
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/fe/css/style.css')}}" type="text/css">
	<!-- Responsive Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/fe/css/responsive.css')}}" type="text/css">

    @stack('mycss')
</head>

<body>

    @include('fe.layouts.header')


    @yield('mycontent')


	<!-- start footer -->
	@include('fe.layouts.footer')
	<!-- end footer -->

	<a href="#" class="scrollup"><i class="fa fa-arrow-circle-up"></i></a>

	<!-- jQuery Library -->
	<script src="{{ asset('assets/fe/js/jquery-3.4.1.min.js')}}"></script>
	<!-- Bootstrap Js -->
	<script src="{{ asset('assets/fe/js/bootstrap.min.js')}}"></script>
	<!-- Circle Progress Js -->
	<script src="{{ asset('assets/fe/js/circle-progress.js')}}"></script>
	<!-- Isotope Filtring Js -->
	<script src="{{ asset('assets/fe/js/isotope.pkgd.min.js')}}"></script>
	<!-- Lightbox Js -->
	<script src="{{ asset('assets/fe/js/lightbox.min.js')}}"></script>
	<!-- owl.carousel Js -->
	<script src="{{ asset('assets/fe/js/owl.carousel.min.js')}}"></script>
	<!-- Form validator Js -->
	<script src="{{ asset('assets/fe/js/validator.min.js')}}"></script>
	<!-- ajaxchimp Js -->
	<script src="{{ asset('assets/fe/js/jquery.ajaxchimp.min.js')}}"></script>
	<!-- counterup Js -->
	<script src="{{ asset('assets/fe/js/waypoint.js')}}"></script>
	<script src="{{ asset('assets/fe/js/jquery.counterup.min.js')}}"></script>

    @stack('myjs')
    <!-- Template main Js -->
	<script src="{{ asset('assets/fe/js/main.js')}}"></script>
	<!-- Google Map Js -->
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=myMap"></script>-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyATYOnQ5REfknqOUM2K6YIl6-GXaXRPc&amp;callback=myMap"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-93541536-2', 'auto');
	  ga('send', 'pageview');

	</script>

</body>
</html>
