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
				<p>Glass ceramic dental restorations are made from a type of ceramic material called glass-ceramic. This material is a combination of glass and ceramic that is designed to have the best properties of both materials.</p><br>
				<p>We use glass ceramic restorations to create crowns, veneers, and inlays that can be used to repair damaged teeth or improve the appearance of a person's smile. They are preferred over traditional metal restorations because they are more aesthetically pleasing and can be customized to match the color of your natural teeth.</p><br>
				<p>Glass ceramic restorations are also known for their durability and resistance to wear and tear. They are less likely to crack or chip than other types of restorations, and they can last for many years with proper care.</p><br>
				<p>The process of creating a glass ceramic dental restoration involves taking an impression of the patient's teeth and sending it to a dental laboratory. The restoration is then fabricated using computer-aided design and manufacturing (CAD/CAM) technology, which allows for precise customization and fit. Once the restoration is completed, it is bonded to the patient's tooth using dental cement.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
