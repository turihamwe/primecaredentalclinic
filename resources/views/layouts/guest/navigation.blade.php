<!-- ################# Header Starts Here#######################--->
<header id="menu-jk" style="background:;">
	<div class="container">
		<div class="row top">
			{{-- <div class="col-md-3 d-none d-lg-block"> --}}
			<div class="col-lg-3 d-md-none d-sm-none d-none d-lg-block">
				<div class="call d-flex">
					<i class="fa fa-phone"></i>
					<div class="call-no">{{ env('PHONE_1') }}<br>{{ env('PHONE_2') }}</div>&nbsp;&nbsp;&nbsp;
					<a href="https://api.whatsapp.com/send?phone=256704605561&text=This%20is%20a%20test" title="Click to chat directly on WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a>
					<i class="fas fa-map-marker-alt d-lg-none d-xs-none"></i>
					<div class="call-no d-lg-none d-xs-none">{{ env('ADDRESS_1') }}<br>{{ env('ADDRESS_2') }}</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 logo">
				<a href="{{ route('/') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
				<a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 call-r">
				<div class="call d-flex">
					<i class="fas fa-map-marker-alt"></i>
					<div class="call-no">{{ env('ADDRESS_1') }}<br>{{ env('ADDRESS_2') }}</div>
				</div>
			</div>
			<div class="d-lg-none col-md-3 col-sm-6 col-xs-12">
				<div class="call d-flex" style="padding-left:0;">
					<i class="fab fa-whatsapp"></i>
					<div class="call-no">{{ env('PHONE_1') }}<br>{{ env('EMAIL_INFO') }}</div>&nbsp;&nbsp;&nbsp;
					<i class="fas fa-map-marker-alt d-none d-xs-block"></i>
					<div class="call-no d-none d-xs-block">{{ env('ADDRESS_1') }}<br>{{ env('ADDRESS_2') }}</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="menu" class="d-none d-md-block" style="background: white;">
		<div class="container">
			<div class="row nav-ro">
				<ul>
					<li title="Home"><a href="{{ route('/') }}" class="btn btn-sm btn-success">Home</a></li>
					{{-- <li title="About us"><a href="{{ route('about') }}" class="btn btn-sm btn-success">About us</a></li> --}}
					<li title="About">
						<div class="dropdown">
							<a href="{{ route('about') }}" class="btn btn-sm btn-success">About us</a>
							<div class="dropdown-content">
							  	<a href="{{ route('vision') }}">Vision</a>
							  	<a href="{{ route('mission') }}">Mission</a>
							  	<a href="{{ route('values') }}">Core values</a>
							  	<a href="{{ route('sustainability') }}">Sustainability</a>
							  	<a href="{{ route('csr') }}">CSR</a>
							  	<a href="{{ route('partnerships') }}">Partnerships</a>
							  	<a href="#">Who we are</a>
							  	<a href="#">Management</a>
							  	<a href="{{ route('technology') }}">Our technology</a>
							  	<a href="{{ route('partnerships') }}">Events</a>
							  	<a href="{{ route('payments') }}">Payments</a>
							  	<a href="#">Gallery</a>
							  	<a href="#">FAQs</a>
							  	<a href="#">News & media</a>
							  	<a href="#">Careers</a>
							</div>
						</div>
					</li>
					<li title="Our services"><a href="{{ route('services') }}" class="btn btn-sm btn-success">Services</a></li>
					<li><a href="{{ route('team') }}" class="btn btn-sm btn-success">Our team</a></li>
					{{-- <li><a href="{{ route('partnerships') }}" class="btn btn-sm btn-success">Partnerships</a></li> --}}
					<li title="Appointment"><a href="{{ route('appointment') }}" class="btn btn-sm btn-warning">Book an appointment</a></li>
					{{-- <li title="Technology"><a href="{{ route('technology') }}" class="btn btn-sm btn-success">Technology</a></li> --}}
					<li title="Insurance"><a href="{{ route('insurance') }}" class="btn btn-sm btn-success">Insurance</a></li>
					<li title="Careers"><a href="{{ route('careers') }}" class="btn btn-sm btn-success">Careers</a></li>
					<li title="Contact us"><a href="{{ route('contact') }}" class="btn btn-sm btn-success">Contact us</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>