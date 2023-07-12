@extends('layouts.guest')
@section('content')
@section('title', $title)

<section class="key-features kf-2">
	<div class="container">
		<div class="inner-title">
			<h2>{{ $title }}</h2>
			<p>Take a look at some of our key features</p>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-stethoscope"></i>
					<h5>Dental implants</h5>
					<p>A dental implant is a surgical component that is placed into the jawbone to replace a missing tooth or teeth.</p>
					<a href="{{ route('dental-implant') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-capsules"></i>
					<h5>Pediatric dentistry</h5>
					<p>With Child dentistry, we focus on the dental health needs of infants, children, and adolescents.</p>
					<a href="{{ route('pediatric-dentistry') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-hospital-alt"></i>
					<h5>Braces</h5>
					<p>Dental braces are devices used during orthodontic treatment to correct teeth alignment and bite issues.</p>
					<a href="{{ route('braces') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-medkit"></i>
					<h5>Crowns</h5>
					<p>This is a tooth-shaped cap placed over a damaged or weakened tooth to restore its shape, strength, size, and appearance.</p>
					<a href="{{ route('crowns') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-h-square"></i>
					<h5>Veneers</h5>
					<p>Porcelain veneers are thin shells fabricated out of porcelain which fit precisely over the front surfaces of front teeth.</p>
					<a href="{{ route('veneers') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-hospital-alt"></i>
					<h5>Dental Check-up</h5>
					<p>Visiting your dentist on a regular basis is an important part of your routine oral hygiene. Schedule your dental checkup today.</p>
					<a href="{{ route('dental-checkup') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-hospital-alt"></i>
					<h5>Dental Fillings</h5>
					<p>A dental filling is carried out to repair a tooth damaged by mechanical trauma or decay (caries).</p>
					<a href="{{ route('dental-fillings') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-hospital-alt"></i>
					<h5>Oral disease prevention</h5>
					<p>Oral disease prevention is an important aspect of maintaining good teeth and body health.</p>
					<a href="{{ route('oral-disease-prevention') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-user-md"></i>
					<h5>General dentistry</h5>
					<p>It involves the prevention, diagnosis, and treatment of a wide range of dental conditions, diseases, and disorders.</p>
					<a href="{{ route('general-dentistry') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-ambulance"></i>
					<h5>Airflow treatment</h5>
					<p>Removes persistent stains on your teeth using a combination of water, compressed air and fine powder particles.</p>
					<a href="{{ route('airflow-treatment') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-briefcase-medical"></i>
					<h5>Oral surgery</h5>
					<p>We diagnose and surgically treat various conditions affecting the mouth, teeth, jaw area and face.</p>
					<a href="{{ route('oral-surgery') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-prescription-bottle-alt"></i>
					<h5>Dental hygiene</h5>
					<p>This entails maintaining oral health and preventing dental problems through regular maintenance of the teeth and gums.</p>
					<a href="{{ route('dental-hygiene') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-heart"></i>
					<h5>Glass-Ceramic restorations</h5>
					<p>Glass ceramic dental restorations are dental restorations that are made from a type of ceramic material called glass-ceramic.</p>
					<a href="{{ route('glass-ceramic-restorations') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-heartbeat"></i>
					<h5>Inlay</h5>
					<p>A dental inlay is a type of dental restoration that is used to repair a tooth that has been damaged by decay or other types of damage.</p>
					<a href="{{ route('inlays-onlays') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-plus-square"></i>
					<h5>Bridge</h5>
					<p>This consists of crowns (that fit over your natural teeth) and artificial teeth (that “bridge the gap” in your smile).</p>
					<a href="{{ route('bridge') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-user-md"></i>
					<h5>Teeth straightening (Clear aligners/Invisalign)</h5>
					<p>These are a type of orthodontic treatment that uses a series of clear, removable trays to gradually straighten teeth.</p>
					<a href="{{ route('clear-aligners-invisalign') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-ambulance"></i>
					<h5>Teeth whitening</h5>
					<p>This is a cosmetic dental procedure that involves removing stains from the teeth to make them appear brighter and whiter.</p>
					<a href="{{ route('teeth-whitening') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-briefcase-medical"></i>
					<h5>Space maintainers</h5>
					<p>They are used to preserve the space left by a prematurely lost primary tooth until the permanent tooth erupts.</p>
					<a href="{{ route('space-maintainers') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-capsules"></i>
					<h5>Root canal treatment</h5>
					<p>Root canal treatment (endodontic treatment), is a dental procedure used to treat an infected or damaged tooth.</p>
					<a href="{{ route('root-canal-treatment') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-prescription-bottle-alt"></i>
					<h5>Gum reshaping</h5>
					<p>This involves removing or reshaping excess gum tissue to improve the appearance of the gums and teeth.</p>
					<a href="{{ route('gum-reshaping') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-h-square"></i>
					<h5>Mouthwash</h5>
					<p>Mouthwash is a liquid oral hygiene product used in dentistry to rinse the mouth and freshen breath.</p>
					<a href="{{ route('mouthwash') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-heart"></i>
					<h5>Scaling and Polishing (Teeth cleaning)</h5>
					<p>This involves removing plaque, tartar, and stains from teeth to improve oral hygiene and prevent cavities and gum disease.</p>
					<a href="{{ route('teeth-cleaning') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-heartbeat"></i>
					<h5>Digital dental X-rays</h5>
					<p>Digital X-rays are a modern technology we use at Primecare dental clinic to take images of teeth and other oral structures.</p>
					<a href="{{ route('digital-dental-xrays') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-medkit"></i>
					<h5>Intraoral Camera</h5>
					<p>An intraoral camera is a small handheld device we use to dentists to capture images of a patient's mouth and teeth.</p>
					<a href="{{ route('intraoral-camera') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-plus-square"></i>
					<h5>Root planing</h5>
					<p>Root planing, also known as deep teeth cleaning, is a dental procedure used to treat gum disease.</p>
					<a href="{{ route('root-planing') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fa fa-stethoscope"></i>
					<h5>Wisdom molar extraction</h5>
					<p>Wisdom tooth extraction is a common dental procedure in which one or more of the third molars are removed from the mouth.</p>
					<a href="{{ route('wisdom-molar-extraction') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-hospital-alt"></i>
					<h5>Sinus lift</h5>
					<p>This is a surgical procedure that is performed to add bone mass to the upper jaw in the area of the molars and premolars.</p>
					<a href="{{ route('sinus-lift') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-user-md"></i>
					<h5>Topical fluoride application</h5>
					<p>This involves the application of highly concentrated fluoride varnishes to prevent erosion of the teeth.</p>
					<a href="{{ route('topical-fluoride-treatment') }}" class="text-primary">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-key">
					<i class="fas fa-user-md"></i>
					<h5>Bad breath treatment</h5>
					<p>Treatment of bad breath helps in the increased confidence in social situations amongst family and friends.</p>
					<a href="{{ route('bad-breath') }}" class="text-primary">Read more</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
