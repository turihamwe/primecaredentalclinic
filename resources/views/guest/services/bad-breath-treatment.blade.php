@extends('layouts.guest')
@section('content')
@section('title', $title)

<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title ?? "-" }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Bad breath is a very common problem and there are many causes. Persistent bad breath is usually caused by the smelly gases released by the bacteria that coat your throat, teeth and gums. But strong foods like garlic and onions can add to the problem. Smoking is also one of the main causes of bad breath, along with certain illnesses such as nasal and stomach conditions.</p><br>
				<h2>What Causes Bad Breath?</h2>
				<p>Bits of food caught between teeth and on the tongue rot and can sometimes cause a bad smell. So correct and regular brushing is very important to keep your breath fresh. The bacteria on our teeth and gums also cause gum disease and dental decay. If you visit our dentist regularly this will not solely help prevent bad breath but will also let the dentist look for and treat these problems. Treatment of bad breath helps in the increased confidence in social situations amongst family, co-workers, business clients and friends.</p><br>
				<h2>What Does the Procedure Involve?</h2>
				<p>Treatment of bad breath usually involves focus of multiple issues. Depending on the cause of bad breath, treatment may be as simple as routine cleaning and instruction on how to maintain good oral hygiene. In advanced cases, further investigations may be required as well as discussion with the dental & medical professional e.g, ENT specialist. One of the most effective treatments for bad breath is the elimination of bacteria in hard-to-reach areas around teeth and gums. One such way of doing this at home is through the use of an effective water flosser.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
