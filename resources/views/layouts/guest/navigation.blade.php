<!-- ################# Header Starts Here#######################--->
<header id="menu-jk" style="background:;">
	<div class="container">
		<div class="row top">
			<div class="col-md-3 d-none d-lg-block">
				<div class="call d-flex">
					<i class="fas fa-phone"></i>
					<div class="call-no">{{ env('PHONE_1') }}<br>{{ env('PHONE_2') }}</div>
					{{-- &nbsp;
					<i class="fa fa-envelope"></i>
					<div class="call-no">{{ env('EMAIL_INFO') }}<br>{{ env('EMAIL_INFO') }}</div> --}}
				</div>
			</div>
			<div class="col-lg-6 col-md-7 logo">
				<a href="{{ route('/') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
				<a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
			</div>
			<div class="col-lg-3 col-md-5 d-none d-md-block call-r">
				<div class="call d-flex">
					<i class="fas fa-map-marker-alt"></i>
					<div class="call-no">{{ env('ADDRESS_1') }}<br>{{ env('ADDRESS_2') }}</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="menu" class="d-none d-md-block" style="background: white;">
		<div class="container">
			<div class="row nav-ro">
				<ul>
					<li title="Home"><a href="{{ route('/') }}">Home</a></li>
					<li title="About us"><a href="{{ route('about') }}">About us</a></li>
					<li title="Our services"><a href="{{ route('services') }}">Services</a></li>
					{{-- <li title="Corporate partnerships"><a href="{{ route('partnerships') }}">Partnerships</a></li> --}}
					<li title="Corporate partnerships"><a href="{{ route('partnerships') }}">Events</a></li>
					<li><a href="{{ route('team') }}">Our team</a></li>
					<li title=""><a href="{{ route('about') }}">News & media</a></li>
					{{-- <li title=""><a href="{{ route('about') }}">Gallery</a></li> --}}
					<li title="Appointment"><a href="{{ route('appointment') }}" class="btn btn-sm btn-success">Book an appointment</a></li>
					<li title="Contact us"><a href="{{ route('contact') }}">Contact us</a></li>
					{{-- <li title=""><a href="{{ route('contact') }}">Free Consultation</a></li> --}}
				</ul>
			</div>
		</div>
	</nav>
</header>