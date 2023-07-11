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
				<p>Teeth straightening corrects crooked, uneven, rotated, crowded teeth, resolves gaps, and corrects a dysfunctional bite. This improves your aesthetic appearance, and general oral health. Teeth straightening at Primecare dental clinic is popular, henceforth there are a options that team will present to you upon consultation.</p><br>
				<p>Primecare dental clinic provides three types of braces that can be commonly used for teeth straightening at our practice. These are:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. <b>Traditional metal braces</b> These involve brackets and wires attached to the teeth, allowing their positioning to be periodically altered as required.</li>
					<li class="list-group-item border-0">2. <b>Ceramic braces</b> These are constructed with a ceramic material that blends with the teeth’s natural color so that the braces are less noticeable.</li>
					<li class="list-group-item border-0">3. <b>Self-ligating braces</b> Self-ligating braces (e.g., Damon braces) gradually tighten over time, using a sliding mechanism, to straighten your teeth.</li>
				</ul><br>
				<p>However, we can also provide other teeth-straightening methods to best suit your needs. These include:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. <b>Clear aligners</b> Which are transparent and customized aligners worn over the teeth and changed every week or two until proper alignment is achieved.</li>
					<li class="list-group-item border-0">2. <b>Myobrace</b> This is for preventive pre-orthodontic treatment best suited for children from ages 3 to 15 years old.</li>
				</ul><br>
				<p>Benefits of teeth straightening Include;</p>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. <b>Cosmetic smile:</b> Having a beautiful smile you're proud to show is always helpful when engaging in social activity. It increases your self-esteem, makes you self-assured individual and influences how you see yourself.</li>
					<li class="list-group-item border-0">2. <b>Enhanced Care for Teeth & Gums</b> Straight teeth are easier to brush and floss and so minimize plaque buildup. Therefore, bacteria are not left to multiply and affect gums hence preventing the formation of cavities or gum disease.</li>
					<li class="list-group-item border-0">3. <b>Aligning Your Bite</b> Having bad bite causes uneven pressure distribution across teeth, meaning some teeth experience increased pressure. This may cause teeth to get worn down faster than normal or for them to chip and break.</li>
				</ul><br>
				<p>You may need teeth straightening if you have:</p>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Rotated, Crowded, or Uneven Teeth.</li>
					<li class="list-group-item border-0">2. A Dysfunctional Bite that makes chewing of food a difficult process.</li>
					<li class="list-group-item border-0">3. Temporomandibular joint dysfunction/pain.</li>
				</ul><br>
				<p>Before selecting any of the teeth straightening methods, you will be needed to go down for a consultation to assess your general health condition, as well as the condition of your teeth and gums.</p>
				<p>This will include some X-ray scans, intraoral scans, and mouth impressions to assess your facial anatomy, teeth, and suitability for teeth straightening and other treatment options.</p>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
