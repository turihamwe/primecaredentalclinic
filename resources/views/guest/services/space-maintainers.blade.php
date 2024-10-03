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
				<p>Space maintainers are devices used to preserve the space left by a prematurely lost primary tooth (baby tooth) until the permanent tooth erupts. They help prevent other teeth from drifting into the empty space, which can cause alignment problems and negatively affect the bite.</p><br>
				<p>Space maintainers can be made of different materials, such as metal or plastic, and can be either removable or fixed in place. Removable space maintainers are similar to orthodontic appliances and can be taken out for cleaning and oral hygiene. Fixed space maintainers are cemented to the teeth on either side of the empty space and are usually made of stainless-steel material.</p><br>
				<p>Dental space maintainers are typically recommended for children who lose their primary teeth prematurely due to tooth decay, trauma, or other reasons. They are customized to fit the child's mouth and are designed to be comfortable and unobtrusive. The dentist will monitor the child's progress and remove the space maintainer once the permanent tooth has erupted.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
