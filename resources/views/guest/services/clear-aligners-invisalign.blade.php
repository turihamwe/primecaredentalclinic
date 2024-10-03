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
				<p>Clear aligners are a type of orthodontic treatment that uses a series of clear, removable trays to gradually straighten teeth. The aligners are custom-made for each individual patient using 3D imaging technology, and each set of aligners is worn for a specific period of time, typically two weeks, before being replaced with the next set in the series.</p><br>
				<p>Clear aligners are a popular alternative to traditional metal braces, as they are virtually invisible, more comfortable to wear, and can be removed for eating, brushing, and flossing. They are often used to treat mild to moderate orthodontic issues, such as crooked or crowded teeth, gaps between teeth, and minor bite problems. However, they may not be suitable for more complex cases, and it's important to consult with your doctor to determine the best treatment option for your specific needs.</p><br>
				<p>Clear aligners procedure is simple and begins with getting impressions of your teeth taken. These impressions are used to get molds of your jaws and teeth. A series of custom clear aligners will be developed for you to wear over the course of treatment. Aligners are usually changed every one-two weeks as the teeth begin to shift and settle in place. Planned reviews will be required during the this treatment and a final retainer will have to be worn to keep teeth in their new and corrected positions.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
