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
				{{-- <h2>Welcome to {{ config('app.name') }}</h2> --}}
				<p>An intraoral camera is a small hand-held device we use in dentistry to capture images of a patient's mouth and teeth. The camera is typically connected to a monitor and can capture high-quality images of the inside of the mouth, including the teeth, gums, and tongue.</p><br>
				<p>The camera is designed to be small and easy to maneuver, allowing the doctor to capture images of hard-to-see areas in the mouth. The camera is also equipped with a variety of different lenses and attachments to capture different types of images and to magnify the image for greater detail.</p><br>
				<p>It assists the dentist in diagnosing dental problems and to plan treatment. By capturing images of the inside of the mouth, the dentist can get a better understanding of a patient's oral health and develop a personalized treatment plan. Intra-oral cameras can also be used to educate you about your dental health by showing you images of your teeth and explaining any issues that may be present.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
