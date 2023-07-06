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
				<img src="{{ asset('images/team/doctor-1-sq.jpg') }}" alt="">
			</div>
			<div class="col-md-6 col-sm-12">
				<h2>Dr. Peter Muthon</h2>
				{{-- <small>Facial Surgeon</small> --}}
				<p>Dr Peter Muthon joined the dental profession in 2003, and he's also a Rotarian since 2005. He qualified from University of Nairobi in 2002 and gained his early professional experience in general practice in Nairobi and Mombasa.</p><br>
				<p>He has consistently developed his career and has completed many prestigious postgraduate courses in advanced dentistry including cosmetic and occlusion seminars. This extensive knowledge helps him create beautiful life-changing smiles.</p><br>
				<p>Peter's special interests are cosmetic teeth straightening and aesthetic cosmetic dentistry. Peter has been a full member of  Kenya dental association since 2003 until 2022 and is proud of it. He says the most rewarding part of his job is the moment of finishing treatment and seeing his patient realisze it was all worth it.</p>
				<p>Peter is married to Maria and they live with their three children. He loves football and tennis.</p>
			</div>
		</div>
	</div>
</div>
<div class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<h2>Dr. Namatovu Rosen</h2>
				{{-- <small>Facial Surgeon</small> --}}
				<p>Dr. Namatovu Rosen is the elder of two sisters and she qualified from The Univserity of Cairo in 2016. She worked in Cape town before joining {{ config('app.name') }} in 2023.</p><br>
				<p>She has a desire to provide excellence at every level of dental care and is continually pusin g herself to advance her skills and keep up with the latest technologies, such as CBCT snanning tecnhology, so she can provide fast and effective treatment plannig of complex dental issues.</p><br>
				<p>Rosen loves her job and is passionate about dentistry, and she hopes that this shows in her work. Her main interest in the field of dentistry is pediatric dentistry including prevention and restorative treatment as well as the area of family dentistry.</p>
				<p>Rosen lives in Buziga, Kampala with her husband Moses and their one daughter. A self-confessed sports addict Rosen plays golf frequently. She's a Chelsea FC fan in England and Villa FC I  Uganda and has been at several matches as she could with her husband for both teams.</p>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('images/team/doctor-2.jpg') }}" alt="">
			</div>
		</div>
	</div>
</div>
<div class="our-team">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('images/team/doctor-3.jpg') }}" alt="">
			</div>
			<div class="col-md-6 col-sm-12">
				<h2>Dr. Muhumuza Innocent</h2>
				{{-- <small>Facial Surgeon</small> --}}
				<p>Dr Muhumuza Innocent  joined Primecare dental clinic in 2023 becoming an enthusiastic participant within our caring team.</p><br>
				<p>Committed to providing excellent service for patients who require endodontic treatment, he makes sure that all clinical options are explored and explained in order to achieve clinical excellence every time.</p><br>
				<p>He qualified as a dentist at Makerere university  before moving to South Africa in 2014 where he has held a full registration as a dentist. He gained his Master's degree in Endodontics at University of the Witwatersrand in 2021.</p>
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
