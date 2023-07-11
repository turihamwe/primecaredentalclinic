@extends('layouts.guest')
@section('content')
@section('title', $title)

<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Visiting your dentist on a regular basis is an important part of your routine oral hygiene. Personal home-based dental care has its limits, and so, professional check up by a dentist is required.</p><br>
				<h2>Why Are Regular Dental Check-Ups important?</h2>
				<p><b>Early Detection:</b> Regular dental check-ups allow early identification of signs of any dental problems. Once these are left unattended to, you may get toothache, need costly and invasive dental treatment like root canal treatment, crowns or even worse, risk losing your natural teeth unnecessarily. It is well proven that patients who regularly have dental check-ups and visit a dentist every six months are far less likely to suffer from dental disease than those who attend sporadically or solely during dental emergencies.</p><br>
				<p><b>Maintenance:</b> At your dental check-up, your dentist will give your teeth and gums their required general maintenance to help prevent gum disease and tooth decay. This can include some or all of the following:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Scaling and Polishing, to remove tartar.</li>
					<li class="list-group-item border-0">2. Airflow Stain Removal, to remove stains.</li>
					<li class="list-group-item border-0">3. Topical Fluoride, to protect your teeth against decay.</li>
				</ul><br>
				<h2>Oral Health Education</h2>
				<p>Our dentists will also take you on an educational journey about adopting important oral health habits such as brushing, flossing daily and having a healthy diet that will empower you to take good care of your teeth, gums, and mouth. You will be able to learn that many dental problems or diseases are indeed preventable with good self-care.</p>
				<h2>What Are Some Common Dental Issues identified during routine checkup?</h2>
				<p>Many dental problems can be present and show no symptoms. Among others, these include the following:</p>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Gum disease</li>
					<li class="list-group-item border-0">2. Dental infections</li>
					<li class="list-group-item border-0">3. Developmental anomalies</li>
					<li class="list-group-item border-0">4. Dry mouth</li>
					<li class="list-group-item border-0">5. Dysfunctional bite</li>
					<li class="list-group-item border-0">6. Mouth cancer</li>
					<li class="list-group-item border-0">7. Tooth decay</li>
					<li class="list-group-item border-0">8. Tooth wear</li>
				</ul><br>
				<h2>What Does a checkup appointment Involve?</h2>
				<h2>Stage 1: Consultation</h2>
				<p>Your dentist will listen to any concerns you may have about your oral health. The condition of your teeth, gums, mouth, and surrounding tissues of your face and neck will be thoroughly assessed, taking into account your general health, dental and social habits. Any necessary X-rays and/or scans may be taken.</p>
				<h2>Stage 2: Personalized Treatment Plan</h2>
				<p>If our dentist identifies any dental disease requiring further treatment, she/he will discuss your condition, benefits, and risks of each possible treatment option, the procedure of having treatment, and provide you with a personalized treatment plan.</p>
				<p>Lastly, you will be educated on good oral health habits and be advised on how often you should attend a dental check-up - usually at 3, 6, 9, 12, 18, or 24 months, based on your level of dental health.</p>
				<h2>Stage 3: Prophylaxis</h2>
				<p>Usually, we suggest scaling and polishing of your teeth and gums, airflow stain removal, and/or topical fluoride to keep up the overall oral health.</p>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
