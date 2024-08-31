@extends('layouts.guest')
@section('content')
@section('title', $title)

{{-- @include('layouts.messages') --}}

<!--  ************************* About Us Content Start Here  ************************** -->
<div class="our-team">
	<div class="container">
		<div class="inner-title row">
			<h2>{{ $title }}</h2>
			{{-- <p>Take a look at our Team</p> --}}
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('images/team/doctor-4-sq.jpg') }}" alt="Dr. Alex Kizito">
			</div>
			<div class="col-md-6 col-sm-12">
				<h2>Dr. Alex Kizito</h2>
				{{-- <small>Facial Surgeon</small> --}}
				<p>Welcome to Primecare dental clinic, where Dr. Alex Kizito, a career dentist with experience spanning since 2012, leads a passionate team dedicated to advancing oral health and overall well-being.</p><br>
                <p>Dr. Kizito's career extends to top institutions in the field such as Kampala Hospital Kololo (KH dental) and Kay's dental clinic. With a keen interest in aesthetics and prevention, he focuses on cases of teeth alignment and preventive dentistry, ensuring every patient achieves not only optimal oral health but also a confident and beautiful smile.</p><br>
                <p>Beyond his commitment to dentistry, Dr. Kizito finds leisure in reading and chess play, reflecting his analytical approach to patient care. Trust our team for a personalized and comfortable dental experience, where your smile's health and beauty are our prime priorities.</p>
			</div>
		</div>
	</div>
</div>
<div class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<h2>Dr. Bob Matsiko</h2>
				{{-- <small>Facial Surgeon</small> --}}
				<p>With a illustrious career spanning over a decade in dentistry, Mr. Bob Matsiko, has been a resolute advocate for teeth conservation. Since 2009, he has contributed his expertise to renowned establishments like KH Dental and Kays Dental, solidifying his reputation as a compassionate and skilled dentist.</p><br>
                <p>Currently, Mr. Matsiko serves as a key member of the Primecare Dental Clinic team, where his commitment to preserving natural smiles aligns seamlessly with the clinic's ethos.</p><br>
                <p>His particular interest in digital dentistry showcases not only his technical proficiency but also his aesthetic sensibility. Patients under Bob's care benefit from his holistic approach to dentistry, ensuring not only optimal treatment but also a lasting commitment to their overall well-being.</p>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('images/team/doctor-5-sq.jpg') }}" alt="Dr. Bob">
			</div>
		</div>
	</div>
</div>
<div class="our-team">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('images/team/doctor-6-sq.jpg') }}" alt="Dr. Innocent">
			</div>
			<div class="col-md-6 col-sm-12">
				<h2>Dr. Raymond</h2>
				{{-- <small>Facial Surgeon</small> --}}
				<p>Dr Raymond joined Primecare dental clinic in 2023 becoming an enthusiastic participant within our caring team.</p><br>
				<p>Committed to providing excellent service for patients who require endodontic treatment, he makes sure that all clinical options are explored and explained in order to achieve clinical excellence every time.</p><br>
			</div>
		</div>
	</div>
</div>

<!-- ################# Our Team Starts Here#######################--->
{{-- <section class="our-team">
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
						<h4>Dr. Peter Muthon</h4>
						<i>Facial Surgeon</i>
						<p><a href="{{ route('/') }}" style="color:yellow">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/team.jpg') }}" alt="">
					<div class="det-o">
						<h4>Dr. Namatovu Rosen</h4>
						<i>Facial Surgeon</i>
						<p><a href="{{ route('/') }}" style="color:yellow" data-toggle="collapse" data-target="#demo">Read more</a></p>
					</div>
				</div>
				<!-- <div class="single-usr">
					<div class="card-body collapse" id="demo">
						<p>Dr. Namatovu Rosen is the elder of two sisters and she qualified from The Univserity of Cairo in 2016. She worked in Cape town before joining {{ config('app.name') }} in 2023.</p>
						<p>She has a desire to provide excellence at every level of dental care and is continually pusin g herself to advance her skills and keep up with the latest technologies, such as CBCT snanning tecnhology, so she can provide fast and effective treatment plannig of complex dental isssues.</p>
						<p>Rosen loves her job and is passionate about dentistry, and she hopes that this shows in her work. Her main interest in the field of dentistry is pediatric dentistry including prevention and restorative treatment as well as the area of family dentistry.</p>
					</div>
				</div> -->
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/team.jpg') }}" alt="">
					<div class="det-o text-center">
						<h4>Dr. Muhumuza Innocent</h4>
						<i>Facial Surgeon</i>
						<p><a href="{{ route('/') }}" style="color:yellow">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/team/team.jpg') }}" alt="">
					<div class="det-o">
						<h4>Dr. David Kanuel</h4>
						<i>Facial Surgan</i>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}

@endsection
