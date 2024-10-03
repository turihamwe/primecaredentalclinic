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
				<p>Digital X-rays are a modern technology we use at Primecare dental clinic to take images of teeth and other oral structures. They are similar to traditional dental X-rays but use electronic sensors instead of photographic film.</p><br>
				<p>The process of taking a digital dental X-ray is quite similar to traditional X-rays. The patient will be asked to bite down on a small device, and the X-ray machine will be positioned next to the patient's teeth. However, instead of using film to capture the image, the electronic sensor records the X-ray image digitally and instantly displays it on a computer screen.</p><br>
				<p>There are several advantages to using digital dental X-rays. First, they are much faster and more efficient than traditional X-rays. The images can be captured and displayed on a computer screen in a matter of seconds, making the entire process much faster and more convenient. Second, digital dental X-rays emit significantly less radiation than traditional X-rays, which is especially beneficial for patients who need to have X-rays taken frequently.</p><br>
				<p>Finally, digital dental X-rays allow dentists to easily manipulate and enhance the images, making it easier to identify problems and diagnose oral health issues.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
