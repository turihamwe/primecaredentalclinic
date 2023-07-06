@extends('layouts.guest')
@section('content')
@section('title', $title)

<!--  ************************* About Us Content Start Here  ************************** -->
<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2>Welcome to {{ config('app.name') }}</h2>
				<p>Prime Care Dental clinic offers the Corporate Dental Program to corporate entities who are interested in providing their employees with dedicated corporate rates or dental services. These rates can be extended to family members of our corporate client as well.</p><br>
				<p>For more, get in touch with us on...</p>
			</div>
		</div>
	</div>
</div>
<!-- ######## About US End ####### -->
<!-- ################# Hospital Detail Starts Here#######################--->
<div class="top-msg pt-00">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 vkjd ohs">
				<h2><i class="far fa-clock"></i> Opening Hours</h2>
				<ul>
					<li>Mon - Fri <span>8.30AM - 7.30PM</span></li>
					<li>Saturday - Fri <span>6.30AM - 9.30PM</span></li>
					<li>Sunday - Fri <span>11.30AM - 3.30PM</span></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 vkjd">
				<h2><i class="fas fa-calendar-alt"></i> Doctors Timetable</h2>
				<p>Take the first step towards a healthier smile by scheduling your appointment online today.</p>
			</div>
			<div class="col-lg-3 col-md-6 vkjd">
				<h2><i class="far fa-envelope"></i> Appointments</h2>
				<p>With just a few clicks, you can easily book your dental appointment from the comfort of your own home.</p>
			</div>
			<div class="col-lg-3 col-md-6 vkjd">
				<h2><i class="fas fa-phone"></i> Emergency Cases</h2>
				<h4>{{ env('PHONE_1') }}</h4>
			</div>
		</div>
	</div>
</div>
<!-- ################# Our Team Starts Here#######################--->
<section class="our-team">
	<div class="container">
		<div class="inner-title row">
			<h2>Our Team</h2>
			<p>Take a look at our Team</p>
		</div>
		<div class="row team-row">
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/team.jpg') }}" alt="">
					<div class="det-o">
						<h4>David Kanuel</h4>
						<i>Facial Surgan</i>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/team.jpg') }}" alt="">
					<div class="det-o">
						<h4>David Kanuel</h4>
						<i>Facial Surgan</i>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/team.jpg') }}" alt="">
					<div class="det-o">
						<h4>David Kanuel</h4>
						<i>Facial Surgan</i>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/team.jpg') }}" alt="">
					<div class="det-o">
						<h4>David Kanuel</h4>
						<i>Facial Surgan</i>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
