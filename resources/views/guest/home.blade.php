@extends('layouts.guest')
@section('content')
@section('title', $title)
                                
{{-- @include('layouts.messages') --}}

<div class="slider-detail">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{ asset('images/slider/slide-1.jpg') }}" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h5 class=" bounceInDown">Welcome to {{ config('app.name') }}</h5>
					{{-- <p class=" bounceInLeft">Welcome to Primecare dental clinic for Cosmetic and Implant Dentistry, where we create memorable smiles that will last a lifetime. Our team has worked alongside thousands of patients to create them their lasting perfect smile. Set in Kololo Kampala, our clinic provides an elegant and calming atmosphere to make our clients feel welcomed and cared for. Navigate our website to see how we have helped our clients achieve the look they desire!</p> --}}
					<p class=" bounceInLeft" style="background: #4b454bc7; font-weight:300;">Welcome to Primecare dental clinic for Cosmetic and Implant Dentistry, where we create memorable smiles that will last a lifetime. Our team has worked alongside thousands of patients to create them their lasting perfect smile. Set in Kololo Kampala, our clinic provides an elegant and calming atmosphere to make our clients feel welcomed and cared for. Navigate our website to see how we have helped our clients achieve the look they desire!</p>
					{{-- <p class=" bounceInLeft">Welcome to Primecare Dental Clinic in Kololo, Kampala! We are delighted to have you and are committed to providing you with the highest level of dental care. Our team of experienced dentists and friendly staff are here to ensure that your visit is comfortable, stress-free and effective.</p> --}}
					<div class="row vbh">
						<div class="btn btn-info bounceInUp"><a href="{{ route('appointment') }}" class=" text-white">Make an Appointment</a></div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('images/slider/slide-2.jpg') }}" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
					<h5 class=" bounceInDown text-warning">Latest technology</h5>
					<p class=" bounceInLeft" style="background: #4b454bc7; font-weight:300;">At Primecare Dental Clinic, we understand that every patient is unique, and we take the time to listen to your concerns and provide personalized care tailored to your needs. We offer a wide range of dental services, from routine cleanings and fillings to advanced treatments such as dental implants and orthodontics.</p>
					<div class="row vbh">
						<div class="btn btn-info bounceInUp"><a href="{{ route('appointment') }}" class=" text-white">Make an Appointment</a></div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('images/slider/slide-3.jpg') }}" alt="Third slide">
				<div class="carousel-caption vdg-cur d-none d-md-block">
					<h5 class=" bounceInDown">Family dental services</h5>
					<p class=" bounceInLeft" style="background: #4b454b6e; font-weight:300;">We use the latest technology and techniques to provide you with the most effective and efficient care possible. Our goal is to help you achieve optimal oral health and a beautiful, confident smile that you can be proud of.</p>
					<div class="row vbh">
						<div class="btn btn-info bounceInUp"><a href="{{ route('appointment') }}" class=" text-white">Make an Appointment</a></div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">Background</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				{{-- <h2>Welcome to {{ config('app.name') }}</h2> --}}
				<p>Prime Care Dental clinic offers the Corporate Dental Program to corporate entities who are interested in providing their employees with dedicated corporate rates or dental services. These rates can be extended to family members of our corporate client as well. For more, get in touch with us on...</p>
			</div>
		</div>
	</div>
</div>
<section class="key-features kf-2">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">Our services</h1>
			<p>Take a look at some of our services.</p>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					{{-- <i class="far fa-thumbs-up"></i> --}}
					<img src="{{ asset('images/services/icons/dental-implants.jpg') }}" alt="">
					<h5>Dental implants</h5>
					<p>A surgical component that is placed into the jawbone to replace a missing tooth or teeth to give you a better smile.</p>
					<a href="{{ route('dental-implants') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					{{-- <i class="fas fa-capsules"></i> --}}
					<img src="{{ asset('images/services/icons/pediatric-dentistry.jpg') }}" alt="">
					<h5>Pediatric dentistry</h5>
					<p>With Child dentistry, we focus on the dental health needs of infants, children, and adolescents.</p>
					<a href="{{ route('pediatric-dentistry') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					{{-- <i class="fas fa-hospital-alt"></i> --}}
					<img src="{{ asset('images/services/icons/braces.jpg') }}" alt="">
					<h5>Braces</h5>
					<p>Dental braces are devices used during orthodontic treatment to correct teeth alignment and bite issues.</p>
					<a href="{{ route('braces') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					{{-- <i class="fa fa-medkit"></i> --}}
					<img src="{{ asset('images/services/icons/crowns.jpg') }}" alt="">
					<h5>Crowns</h5>
					<p>This is a tooth-shaped cap placed over a damaged or weakened tooth to restore its shape, strength, size, and appearance.</p>
					<a href="{{ route('crowns') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					{{-- <i class="fa fa-h-square"></i> --}}
					<img src="{{ asset('images/services/icons/veneers.jpg') }}" alt="">
					<h5>Veneers</h5>
					<p>Porcelain veneers are thin shells fabricated out of porcelain which fit precisely over the front surfaces of front teeth.</p>
					<a href="{{ route('veneers') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					{{-- <i class="fas fa-hospital-alt"></i> --}}
					<img src="{{ asset('images/services/icons/dental-checkup.jpg') }}" alt="">
					<h5>Dental check-up</h5>
					<p>Visiting your dentist on a regular basis is an important part of your routine oral hygiene. Schedule your dental checkup today.</p>
					<a href="{{ route('dental-checkup') }}" class="text-primary">Read more</a>
				</div>
			</div>
		</div>
		{{-- <div class="text-center">
			<a href="{{ route('appointment') }}" class="btn btn-sm btn-success">Book an appointment</a>
		</div> --}}
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white">Read more</a></button>
		</div>
	</div>
</section>
<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">Why {{ config('app.name') }}?</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Primecare dental clinic provides a seamless, stellar experience—your staff would be able to pick from a selection of standard services or a customized package tailored to their unique need.</p><br>
				<div class="card" class="col-md-4">
					{{-- <img src="..." class="card-img-top" alt="..."> --}}
					<div class="card-body">
					  	{{-- <h5 class="card-title">Card title</h5> --}}
					  	<p class="card-text">A sterile, comfortable, aesthetically-pleasant clinical environment.</p>
						{{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
					</div>
				</div>
				<div class="card" class="col-md-4">
					<div class="card-body">
					  	{{-- <h5 class="card-title">Card title</h5> --}}
					  	<p class="card-text">Dental emergencies given due priority.</p>
					</div>
				</div>
				<div class="card" class="col-md-4">
					<div class="card-body">
					  	{{-- <h5 class="card-title">Card title</h5> --}}
					  	<p class="card-text">Emphasis on impeccable customer service.</p>
					</div>
				</div>
				<div class="card" class="col-md-4">
					<div class="card-body">
					  	{{-- <h5 class="card-title">Card title</h5> --}}
					  	<p class="card-text">Knowledgeable, skilled, experienced team of dentists.</p>
					</div>
				</div>
				<div class="card" class="col-md-4">
					<div class="card-body">
					  	{{-- <h5 class="card-title">Card title</h5> --}}
					  	<p class="card-text">Open 7 days a week.</p>
					</div>
				</div><br>
				<p>Regular dental talks/outreaches can be arranged at your premises.</p>
			</div>
		</div>
	</div>
</div>
<section class="key-features kf-2">
	<div class="container">
		<div class="inner-title">
			{{-- <h1 class="text-center">Memberships</h1> --}}
			{{-- <p>Look for the Uganda Dental Association logo in the snaps folder and include “Member of Uganda Dental Association”.</p> --}}
		</div>
		<div class="row">
			<div class="offset-md-2 col-md-4 col-sm-6">
				<div class="single-key">
					<img src="{{ asset('images/partners/uda.png') }}" alt="">
					{{-- <h5>Oral disease prevention</h5> --}}
					{{-- <p>Oral disease prevention is an important aspect of maintaining good body health.</p> --}}
					{{-- <a href="{{ route('/') }}">Read more</a> --}}
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<img src="{{ asset('images/partners/umdpc.png') }}" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<div class="top-msg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 vkjd ohs">
				<h2><i class="far fa-clock"></i>Opening Hours</h2>
				<ul>
					<li>Mon - Fri<span>8.00AM - 8.00PM</span></li>
					<li>Saturday<span>8.00AM - 8.00PM</span></li>
					<li>Sunday<span>10.00AM - 5.00PM</span></li>
					<li>Public holidays<span>8.00AM - 5.00PM</span></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 vkjd">
				<h2><i class="fas fa-calendar-alt"></i>Doctors Timetable</h2>
				<p>Our Dental Clinic is dedicated to providing the most up to date general, orthodontic and family dentistry. Our doctors are on duty throughout the week. <a href="{{ route('timetable') }}" class="text-primary">Take a look</a> at our schedule.</p>
			</div>
			<div class="col-lg-3 col-md-6 vkjd">
				<h2><i class="far fa-envelope"></i>Appointments</h2>
				<p>Our clinics provide high-level dental services and offer comprehensive solutions for the treatment of any dental disease. <a href="{{ route('appointment') }}" class="text-primary">Click here</a> to book your appointment today.</p>
			</div>
			<div class="col-lg-3 col-md-6 vkjd">
				<h2><i class="fas fa-phone"></i>Emergency Cases</h2>
				<p>We are available on call for emergencies, not later than 8:00pm on Sunday. In case of any emergency please call
				<b class="text-warning" style="font-size: 20px;">{{ env('PHONE_1') }}</b></p>
			</div>
		</div>
	</div>
</div>
<section class="our-team">
	<div class="container">
		<div class="inner-title row">
			<h2>Meet our doctors</h2>
			<p>Our doctors are dedicated to providing the most up-to-date general, orthodontic and family dentistry. Get to know them.</p>
		</div>
		<div class="row team-row">
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/doctor-1-sq.jpg') }}" alt="">
					<div class="det-o">
						<h4>Dr. Peter Muthon</h4>
						{{-- <i>&nbsp;</i> --}}
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/doctor-2-sq.jpg') }}" alt="">
					<div class="det-o">
						<h4>Dr. Namatovu Rosen</h4>
						{{-- <i>&nbsp;</i> --}}
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/doctor-3-sq.jpg') }}" alt="">
					<div class="det-o">
						<h4 style="font-size: 20px;">Dr. Muhumuza Innocent</h4>
						{{-- <i>Facial Surgan</i> --}}
					</div>
				</div>
			</div>
			{{-- <div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/doctor-4.jpg') }}" alt="">
					<div class="det-o">
						<h4>Dr. Peter Muthon</h4>
						<i>Facial Surgan</i>
					</div>
				</div>
			</div> --}}
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('team') }}" class="text-white">Read more</a></button>
		</div>
	</div>
</section>
<section class="testimonial-container">
	<div class="container">
		<div class="inner-title row">
			<h2>Testimonials</h2>
			<p>Don't take our word for it. Take a look at what other people say about us!</p>
		</div>
		<div class="row">
			<div class="col-md-offset-2 float-auto col-md-10">
				<div id="testimonial-slider" class="owl-carousel">
					<div class="testimonial">
						<div class="pic"><img src="{{ asset('images/testimonial/testimonial.jpg') }}" alt=""></div>
						<p class="description">A cool place with top care like no other, took my son there but right from the reception to the doctors, things were all great.</p>
						{{-- <h3 class="title">Lutalo<span class="post"> - Developer </span></h3> --}}
						<h3 class="title">Lutalo<span class="post"></span></h3>
					</div>
					<div class="testimonial">
						<div class="pic"><img src="{{ asset('images/testimonial/testimonial.jpg') }}" alt=""></div>
						<p class="description">Great place to treat kids, so friendly, engaging doctors and patient!</p>
						<h3 class="title">Peter<span class="post"></span></h3>
					</div>
					<div class="testimonial">
						<div class="pic"><img src="{{ asset('images/testimonial/testimonial-2.jpg') }}" alt=""></div>
						<p class="description">Great team from the Dr to the nurse! I always felt like I’m part of the family and well taken care of! I Highly recommend them!</p>
						<h3 class="title">Cathy<span class="post"></span></h3>
					</div>
					<div class="testimonial">
						<div class="pic"><img src="{{ asset('images/testimonial/testimonial-2.jpg') }}" alt=""></div>
						<p class="description">I would like to share my painless experience at the Primecare Dental Clinic. From receiving numbing medicine to fitting my crown, I felt no pain. Thank you for her gentle touch.</p>
						<h3 class="title">Fifi<span class="post"></span></h3>
					</div>
					<div class="testimonial">
						<div class="pic"><img src="{{ asset('images/testimonial/testimonial-2.jpg') }}" alt=""></div>
						<p class="description">Excellent service! Very accommodating Drs and Staff. Highly recommendable Dental Clinic</p>
						<h3 class="title">Stephie<span class="post"></span></h3>
					</div>
					<div class="testimonial">
						<div class="pic"><img src="{{ asset('images/testimonial/testimonial.jpg') }}" alt=""></div>
						<p class="description">I have been there today -it is such a nice place and not only the place but also the staff and services are woow....I felt well taken care-of after the treatment. keep it up.</p>
						<h3 class="title">Fixx Nemesis<span class="post"></span></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('gallery') }}" class="text-white">Read more</a></button>
		</div>
	</div>
</section>
<div class="professional-details">
	<div class="layy">
		<div class="container">
			<div class="title-another row">
				<h4>Make your dream smile a reality! Call us on</h4>
				<h2>{{ env('PHONE_1') }}</h2>
				<h3>or make an appointment</h3>
				<div class="btn-ro">
					<button class="btn btn-warning bg-warning"><a href="{{ route('appointment') }}" class="text-white">Book an appointment</a></button>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
