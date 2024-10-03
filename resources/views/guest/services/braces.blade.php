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
				<p>Dental braces are devices used during orthodontic treatment to correct teeth alignment and bite issues. They consist of brackets, wires, and bands that work together to gradually move the teeth into their desired positions. The brackets are typically attached to the teeth using a special dental adhesive, and the wires are then threaded through the brackets and adjusted over time to apply pressure to the teeth, gradually shifting them into place.</p><br>
				<p>Braces can be made of metal, ceramic, or plastic materials, and are often customized to fit the individual patient's teeth and orthodontic needs. Treatment with braces typically lasts for a period of months to a few years, depending on the severity of the dental issues being addressed. During this time, you will need to visit the clinic regularly to have your braces adjusted and to monitor their progress.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
