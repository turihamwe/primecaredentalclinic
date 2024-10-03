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
				<p>Airflow treatment removes stains. It involves delivering a powdered jet of pressurized air onto your teeth through the use of a small handheld device that moves across your tooth surfaces, similar to a high-pressure jet water cleaner. It can be considered an air-polishing treatment for your stained teeth. This treatment removes stains and plaque and it's a painless process.</p><br>
				<h2>Stage 1: Dental check-up</h2>
				<p>A dental check-up is done by our dentists to evaluate your dental health. Your teeth will then be scaled and polished.</p><br>
				<h2>Stage 2: Airflow treatment</h2>
				<p>If stubborn stains persist, airflow treatment can be used to remove these. Airflow treatment may also be done immediately before your dentist places a filling, crown, onlay, or bridge, to improve the bond strength for a longer lifespan of your new restoration.</p><br>
				<p>The airflow device will be held in close proximity and moved across your teeth whilst emitting high pressured powdered air. This air will be collected on the opposite end of the device with a high-volume suction tip.</p><br>
				<p>You may feel slight air pressure on your teeth during the teeth cleaning procedure as if having your teeth blown dry. But you should not feel any pain. Patient comfort is our priority and our dental practice always focuses on that.</p><br>
				<h2>Stage 3: Post-treatment care</h2>
				<p>After the procedure, your dentist will show you the result in a mirror to ensure that you are satisfied and then provide you with further oral health advice to ensure a lasting effect.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
