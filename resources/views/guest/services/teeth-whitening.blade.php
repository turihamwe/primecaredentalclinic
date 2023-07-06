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
				<p>Teeth whitening is a cosmetic dental procedure that involves removing stains and discoloration from the teeth to make them appear brighter and whiter. It's a non-invasive and simple procedure that can be done in a dental office or at home.</p><br>
				<p>Teeth whitening works by using a bleaching agent such as hydrogen peroxide or carbamide peroxide that penetrates the enamel and breaks down the stains and discoloration. In-office whitening procedures typically use a higher concentration of the bleaching agent and can be completed in one or two sessions.</p><br>
				<p>At-home whitening kits usually come in the form of gels or strips that contain a lower concentration of the bleaching agent. They need to be used over a longer period of time, usually a few days to a couple of weeks, to achieve the desired results.</p><br>
				<p>Teeth whitening is a safe and effective way to improve the appearance of your teeth and boost your confidence. However, it's important to consult with your dentist before undergoing any whitening procedure to ensure that it's safe for your teeth and gums.</p><br>
				<p>Teeth whitening is a safe and effective way to improve the appearance of your teeth and boost your confidence. However, it's important to consult with your dentist before undergoing any whitening procedure to ensure that it's safe for your teeth and gums.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
