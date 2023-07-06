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
				<p>Mouthwash is a liquid oral hygiene product used to rinse the mouth and freshen breath. It is designed to kill bacteria and neutralize odors in the mouth, which can help prevent dental problems like tooth decay and gum disease. Most mouthwashes contain antiseptic agents like alcohol, chlorhexidine, or hydrogen peroxide, as well as flavoring agents and sometimes fluoride. Mouthwash can be used as part of a daily oral hygiene routine, but it should not be used as a substitute for brushing and flossing.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
