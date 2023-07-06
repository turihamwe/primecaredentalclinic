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
				<p> Dental hygiene entails maintaining oral health and preventing dental problems through regular cleaning and maintenance of the teeth and gums.  Your typical dental hygiene appointment involves several components, including:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Teeth cleaning: We use special tools to remove plaque and tartar from the teeth and gums, which can prevent gum disease and cavities and polish the teeth to remove stains and keep them smooth.</li>
					<li class="list-group-item border-0">2. Oral health education: We teach you about proper brushing and flossing techniques, as well as other ways to maintain good oral health, such as a healthy diet and lifestyle.</li>
					<li class="list-group-item border-0">3. Periodontal care & Root planing: When necessary, we perform deep cleanings to treat gum disease and other periodontal problems.</li>
					<li class="list-group-item border-0">4. X-rays: A dentist may take dental x-rays to help dentists diagnose and treat dental problems.</li>
				</ul><br>
				<p>Overall, this aspect of dental care plays a critical role in maintaining optimal oral health and preventing dental problems. We provide preventive care and education to patients, dental hygienists help ensure that patients have healthy teeth and gums for a lifetime.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
