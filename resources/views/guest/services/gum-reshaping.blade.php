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
				<p>Gum reshaping, also known as gum contouring or gum sculpting, is a cosmetic dental procedure that involves removing or reshaping excess gum tissue to improve the appearance of the gums and teeth.</p><br>
				<p>Excess gum tissue can make teeth look shorter and create a "gummy" smile. Gum reshaping can help create a more balanced and symmetrical smile by removing or reshaping the excess gum tissue. The procedure can also help improve overall oral health by reducing pockets where bacteria can accumulate and cause gum disease.</p><br>
				<p>During the procedure, your dentist will use a laser or scalpel to remove or reshape the gum tissue. Depending on the extent of the reshaping needed, local anesthesia may be used to minimize discomfort. After the procedure, patients may experience some mild swelling or discomfort, but this typically resolves within a few days.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
