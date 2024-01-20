<!-- ################# Header Starts Here#######################--->
<header id="menu-jk" style="background:;">
	<div class="container">
		<div class="row top">
			{{-- <div class="col-md-3 d-none d-lg-block"> --}}
			<div class="col-lg-3 d-md-none d-sm-none d-none d-lg-block">
				<div class="call d-flex">
					<a href="https://api.whatsapp.com/send?phone=256704605561&text=This%20is%20a%20test" title="Click to chat directly on WhatsApp" target="_blank" class=""><i class="fab fa-whatsapp" style="background:green; color:white;"></i></a>
					<div class="call-no">{{ env('PHONE_4') }}<br>{{ env('PHONE_2') }}</div>&nbsp;&nbsp;&nbsp;
					{{-- <a href="https://api.whatsapp.com/send?phone=256704605561&text=This%20is%20a%20test" title="Click to chat directly on WhatsApp" target="_blank" class=""><img src="{{ asset('images/whatsapp.png') }}" alt="" width="200px" height="auto"><!--<i class="fab fa-whatsapp"></i>--></a> --}}
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
					<a href="https://maps.app.goo.gl/tKtfo49uA5aS6xrM8" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
					<div class="call-no">{{ env('ADDRESS_1') }}<br>{{ env('ADDRESS_2') }}</div>
				</div>
			</div>
			<div class="d-lg-none col-md-3 col-sm-6 col-xs-12">
				<div class="call d-flex" style="padding-left:0;">
					<a href="https://api.whatsapp.com/send?phone=256704605561&text=This%20is%20a%20test" title="Click to chat directly on WhatsApp" target="_blank" class=""><i class="fab fa-whatsapp" style="background:green; color:white;"></i></a>
					<div class="call-no">{{ env('PHONE_4') }}<br>{{ env('PHONE_2') }}<br>{{ env('EMAIL_INFO') }}</div>&nbsp;&nbsp;&nbsp;
					<a href="https://maps.app.goo.gl/tKtfo49uA5aS6xrM8" target="_blank"><i class="fas fa-map-marker-alt d-none d-xs-block"></i></a>
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
					<li>
						<div class="dropdown">
							<a href="{{ route('about') }}" class="btn btn-sm btn-success">About us</a>
							<div class="dropdown-content">
								<a href="{{ route('about') }}">Who we are</a>
							  	<a href="{{ route('vision') }}">Vision</a>
							  	<a href="{{ route('mission') }}">Mission</a>
							  	<a href="{{ route('values') }}">Core values</a>
							  	<a href="{{ route('team') }}">Team</a>
							  	<a href="{{ route('tutorials') }}">Education resources</a>
							  	<a href="{{ route('technology') }}">Our technology</a>
							  	<a href="{{ route('gallery') }}">Gallery</a>
							  	<a href="{{ route('payments') }}">Payments</a>
							  	<a href="{{ route('insurance') }}">Insurance</a>
							  	<a href="{{ route('partnerships') }}">Partnerships</a>
							  	<a href="{{ route('sustainability') }}">Sustainability</a>
							  	<a href="{{ route('csr') }}">CSR</a>
							  	<a href="{{ route('careers') }}">Careers</a>
							  	{{-- <a href="{{ route('faqs') }}">FAQs</a> --}}
							  	{{-- <a href="{{ route('events') }}">Events</a> --}}
							  	{{-- <a href="{{ route('news') }}">News & media</a> --}}
							</div>
						</div>
					</li>
					{{-- <li title="Our services"><a href="{{ route('services') }}" class="btn btn-sm btn-success">Services</a></li> --}}
					<li title="Services">
						<div class="dropdown">
							<a href="{{ route('services') }}" class="btn btn-sm btn-success">Services</a>
							<div class="dropdown-content">
							  	<a href="{{ route('dental-implants') }}">Dental implants</a>
							  	<a href="{{ route('pediatric-dentistry') }}">Pediatric dentistry</a>
							  	<a href="{{ route('braces') }}">Braces</a>
							  	<a href="{{ route('crowns') }}">Crowns</a>
							  	<a href="{{ route('veneers') }}">Veneers</a>
							  	<a href="{{ route('dental-checkup') }}">Dental check-up</a>
							  	<a href="{{ route('dental-fillings') }}">Dental fillings</a>
							  	<a href="{{ route('oral-disease-prevention') }}">Oral disease prevention</a>
							  	<a href="{{ route('general-dentistry') }}">General dentistry</a>
							  	<a href="{{ route('airflow-treatment') }}">Airflow treatment</a>
							  	<a href="{{ route('services') }}">More services...</a>
							  	{{-- <a href="{{ route('oral-surgery') }}">Oral surgery</a> --}}
							  	{{-- <a href="{{ route('dental-hygiene') }}">Dental hygiene</a> --}}
							  	{{-- <a href="{{ route('glass-ceramic-restorations') }}">Glass-ceramic restorations</a> --}}
							  	{{-- <a href="{{ route('inlays-onlays') }}">Inlays & onlays</a> --}}
							  	{{-- <a href="{{ route('bridges') }}">Bridges</a> --}}
							  	{{-- <a href="{{ route('clear-aligners-invisalign') }}">Clear aligners/Invisalign</a> --}}
							  	{{-- <a href="{{ route('teeth-whitening') }}">Teeth whitening</a> --}}
							  	{{-- <a href="{{ route('space-maintainers') }}">Space maintainers</a> --}}
							  	{{-- <a href="{{ route('root-canal-treatment') }}">Root canal treatment</a> --}}
							  	{{-- <a href="{{ route('gum-reshaping') }}">Gum reshaping</a> --}}
							  	{{-- <a href="{{ route('mouthwash') }}">Mouthwash</a> --}}
							  	{{-- <a href="{{ route('teeth-cleaning') }}">Scaling and polishing</a> --}}
							  	{{-- <a href="{{ route('digital-dental-xrays') }}">Digital dental x-rays</a> --}}
							  	{{-- <a href="{{ route('intraoral-camera') }}">Intra-oral camera</a> --}}
							  	{{-- <a href="{{ route('root-planing') }}">Root planing</a> --}}
							  	{{-- <a href="{{ route('wisdom-molar-extraction') }}">Wisdom molar extraction</a> --}}
							  	{{-- <a href="{{ route('sinus-lift') }}">Sinus lift</a> --}}
							  	{{-- <a href="{{ route('topical-fluoride-application') }}">Topical fluoride application</a> --}}
							  	{{-- <a href="{{ route('bad-breath-treatment') }}">Bad breath treatment</a> --}}
							</div>
						</div>
					</li>
					<li><a href="{{ route('testimonials') }}" class="btn btn-sm btn-warning">Testimonials</a></li>
					{{-- <li><a href="{{ route('partnerships') }}" class="btn btn-sm btn-success">Partnerships</a></li> --}}
					<li title="Appointment"><a href="{{ route('appointment') }}" class="btn btn-sm btn-warning">Book an appointment</a></li>
					{{-- <li><a href="{{ route('team') }}" class="btn btn-sm btn-success">Our team</a></li> --}}
					<li><a href="{{ route('tutorials') }}" class="btn btn-sm btn-success">Tutorials</a></li>
					{{-- <li title="Technology"><a href="{{ route('technology') }}" class="btn btn-sm btn-success">Technology</a></li> --}}
					{{-- <li title="Insurance"><a href="{{ route('insurance') }}" class="btn btn-sm btn-success">Insurance</a></li> --}}
					{{-- <li title="Careers"><a href="{{ route('careers') }}" class="btn btn-sm btn-success">Careers</a></li> --}}
					<li title="Contact us"><a href="{{ route('contact') }}" class="btn btn-sm btn-success">Contact us</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
