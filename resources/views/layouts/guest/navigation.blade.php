<!-- ################# Header Starts Here#######################--->
<header id="menu-jk">
	<div class="container">
		<div class="row top">
			<div class="col-md-3 d-none d-lg-block">
				<div class="call d-flex">
					<i class="fas fa-phone"></i>
					<div class="call-no">{{ env('PHONE_1') }}<br>{{ env('PHONE_2') }}</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-7 logo">
				<a href="{{ route('/') }}"><img src="{{ asset('images/logo4.png') }}" alt=""></a>
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
	<nav id="menu" class="d-none d-md-block">
		<div class="container">
			<div class="row nav-ro">
				<ul>
					<li><a href="{{ route('/') }}">Home</a></li>
					<li><a href="{{ route('about') }}">About us</a></li>
					<li><a href="{{ route('services') }}">Services</a></li>
					{{-- <li><a href="{{ route('about') }}">Blog</a></li> --}}
					{{-- <li><a href="{{ route('about') }}">Gallery</a></li> --}}
					<li><a href="{{ route('contact') }}">Contact us</a></li>
					<li><a href="{{ route('appointment') }}" class="btn btn-sm btn-success">Book an appointment</a></li>
					{{-- <li><a href="{{ route('contact') }}">Free Consultation</a></li> --}}
				</ul>
			</div>
		</div>
	</nav>
</header>