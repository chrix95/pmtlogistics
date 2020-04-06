<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PMT Logistics - @yield('pageTitle')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link data-n-head="ssr" rel="shortcut icon" href="{{ asset('ui/img/fav.png') }}">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- LOAD CSS FILES -->
	@include('layouts.css')
</head>
<body>
	<div id="preloader"></div>

	<!-- Main -->
	<div id="app">
		@include('_partials.banner')
		@yield('content')
		<!-- Footer -->
		@include('_partials.footer')
		<!-- //Footer -->
	</div>
	<!-- //Main -->
	<!-- jQuery -->
	@include('layouts.js')
	@yield('javascript')
</body>
</html>