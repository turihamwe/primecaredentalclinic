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
				{{-- <h2>Welcome to {{ config('app.name') }}</h2> --}}
				<p>Root canal treatment (endodontic treatment), is a dental procedure used to treat an infected or damaged tooth. The procedure involves removing the infected or damaged pulp, which is the soft tissue inside the tooth that contains nerves, blood vessels, and connective tissue.</p><br>
				<p>During the root canal treatment, the dentist will numb the affected area with local anesthesia and create a small access hole in the top of the tooth to access the pulp chamber. They will then remove the pulp and clean out the canals inside the roots of the tooth. The canals are then filled with a material, such as gutta-percha, to prevent further infection.</p><br>
				<p>After the root canal treatment, the tooth will be restored with a filling or crown to protect it against fracturing and restore its function. Root canal treatment is typically recommended when the pulp becomes infected or inflamed due to deep decay, repeated dental procedures, or a crack or chip in the tooth. Without treatment, the infection can spread to the surrounding tissue and cause pain, swelling, and other complications.</p><br>
				<h1>Safe Root Canal procedure.</h1>
				<p>Safety is our peak priority here at Primecare dental clinics. This applies to all our procedures, including root canal treatment procedures.</p>
				<p>As a standard, when you undergo root canal therapy or other endodontic procedures, the inflamed or infected pulp is removed and the inside of the infected tooth is cleaned from the deep decay, then filled and sealed with a rubber-like material called gutta-percha.</p>
				<p>Root canal procedures can be a high-risk procedure if strict infection control and disposal procedures are not followed strictly enough. Here, we have listed some of the safety protocol we practice at Primecare dental clinic to ensure cleanliness and safety during your root canal procedures.</p>
				<h1>Single-Use Shaping Files and Irrigation Needles</h1>
				<p>With the use of single-use shaping files, there is high infection control, a smaller chance of files breaking inside the tooth. This practice also means the root canal surgery can be accomplished within a shorter duration as the files are not blunt.</p>
				<p>We also use side venting irrigation needles which are also single use, this helps to prevent irrigation solution entering tissue spaces.</p>
				<h1>The Use of Rubber Dam</h1>
				<p>Proper isolation is an essential prerequisite for successful endodontic treatment. Our dentists use a rubber dam to secure the area of surgery.</p>
				<p>A rubber dam, also referred to as a "dental dam", is a latex sheet that the treated tooth sticks to. The dam serves as a tooth "isolation," that acts as a partition of the treated tooth from the wet environment of your mouth.</p>
				<p>This prevents irrigation solution and materials from being swallowed and inhaled. It also prevents saliva from contaminating the root canals, resulting in higher root canal success rates.</p>
				<p>We use equipment such as the NSK Apex Locator, NSK Rotary endodontic Handpiece. The use of these materials, known to be effective, help to enhance success rate of treatment for our patients.</p>
				<h1>Crowning</h1>
				<p>Following root canal (endodontic) treatment, we recommend a crown to be placed on the tooth to provide a proper coronal seal against leakage of oral fluids into the and future fracturing.</p>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
