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
				<p>A dental implant is a surgical component that is placed into the jawbone to replace a missing tooth or teeth. It is typically made of titanium or other biocompatible materials that fuse with the surrounding bone in a process called osseointegration.</p><br>
				<p>Dental implants are a popular and effective way to replace missing teeth because they offer several advantages over other tooth replacement options such as bridges or dentures. They look and function like natural teeth, are long-lasting, and do not require any additional maintenance beyond normal oral hygiene practices.</p><br>
				<p>The dental implant procedure involves the surgical placement of the implant into the jawbone, followed by a period of healing and osseointegration. Once the implant has fused with the bone, a dental crown or other prosthetic can be attached to the implant to complete the tooth replacement.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
