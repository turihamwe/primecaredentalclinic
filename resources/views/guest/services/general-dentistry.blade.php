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
				<p>This involves the prevention, diagnosis, and treatment of a wide range of dental conditions, diseases, and disorders. It focuses on maintaining optimal oral health and promoting healthy dental hygiene practices.</p>
				<p>Here, we provide dental care for patients of all ages. We offer a variety of services, including routine dental checkups, cleanings, x-rays, fillings, extractions, root canal treatments, and other restorative procedures.</p>
				<p>In addition to providing treatment for common dental issues, we also educate you on how to properly care for their teeth and gums. This includes recommendations for oral hygiene practices, such as brushing and flossing, as well as advice on how to maintain a healthy diet and lifestyle to support optimal dental health.</p>
				<p>We play a critical role in helping you maintain healthy teeth and gums, as well as preventing and treating dental problems as they arise.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
