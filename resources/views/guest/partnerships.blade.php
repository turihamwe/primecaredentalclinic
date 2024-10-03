@extends('layouts.guest')
@section('content')
@section('title', $title)

<!--  ************************* About Us Content Start Here  ************************** -->
<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title ?? "-" }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2>You're most welcome to work with us</h2>
				<p>We welcome providers of dental supplies to contact us and provide items we may require from time to time. Please get in touch with us on {{ env('PHONE_3') }}.</p>
			</div>
		</div>
	</div>
</div>

@endsection
