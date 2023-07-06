<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> {{ config('app.name') }} | @yield('title')</title>
	<link rel="shortcut icon" href="{{ asset('images/fav.png') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fontawsom-all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/testimonial/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/testimonial/css/owl.theme.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
	<style>
		.dropbtn {
		  background-color: #04AA6D;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
		}
		
		.dropdown {
		  position: relative;
		  display: inline-block;
		}
		
		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f1f1f1;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}
		
		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		}
		
		.dropdown-content a:hover {background-color: #ddd;}
		
		.dropdown:hover .dropdown-content {display: block;}
		
		.dropdown:hover .dropbtn {background-color: #3e8e41;}
		</style>
</head>

<body>