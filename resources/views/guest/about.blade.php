@extends('layouts.guest')
@section('content')
@section('title', $title)

<!--  ************************* About Us Content Start Here  ************************** -->
<div class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				{{-- <br><br><br><br> --}}
				<img src="{{ asset('images/about.jpg') }}" alt="">
			</div>
			<div class="col-md-6 col-sm-12">
				<h2>Welcome to {{ config('app.name') }}</h2>
				<p>Welcome to Primecare dental clinic for Cosmetic and Implant Dentistry, where we create memorable smiles that will last a lifetime. Our team has worked alongside thousands of patients to create them their lasting perfect smile. Set in Kololo Kampala, our clinic provides an elegant and calming atmosphere to make our clients feel welcomed and cared for. Navigate our website to see how we have helped our clients achieve the look they desire!</p><br>
				{{-- <p>Welcome to Primecare Dental Clinic in Kololo, Kampala! We are delighted to have you and are committed to providing you with the highest level of dental care. Our team of experienced dentists and friendly staff are here to ensure that your visit is comfortable, stress-free and effective.</p> --}}
				{{-- <p>At Primecare Dental Clinic, we understand that every patient is unique, and we take the time to listen to your concerns and provide personalized care tailored to your needs. We offer a wide range of dental services, from routine cleanings and fillings to advanced treatments such as dental implants and orthodontics.</p> --}}
				<p>We use the latest technology and techniques to provide you with the most effective and efficient care possible. Our goal is to help you achieve optimal oral health and a beautiful, confident smile that you can be proud of.</p><br>
				<p>Thank you for choosing Primecare Dental Clinic as your dental provider. We look forward to working with you to achieve your dental health goals.</p>
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
