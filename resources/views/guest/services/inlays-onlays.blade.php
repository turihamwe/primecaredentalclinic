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
				<p>A dental inlay is a type of dental restoration that is used to repair a tooth that has been damaged by decay or other types of damage. It is a custom-made filling that is placed in the center of the tooth, between the cusps or bumps on the chewing surface.</p><br>
				<p>Inlays are made from a variety of materials, including porcelain, gold, or composite resin. They are used when a tooth has too much damage to be repaired with a simple filling, but not enough damage to require a full dental crown. Inlays provide a more conservative approach than crowns, as less of the natural tooth structure needs to be removed in order to place them.</p><br>
				<p>The procedure for placing a dental inlay typically involves two appointments. During the first appointment, the damaged part of the tooth is removed, and an impression is taken of the tooth. The impression is used to create a custom-made inlay that fits perfectly into the tooth. During the second appointment, the inlay is placed into the tooth and bonded in place with dental cement.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
