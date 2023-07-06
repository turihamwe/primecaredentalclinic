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
				<p>Root planing, also known as deep teeth cleaning, is a dental procedure used to treat gum disease. It involves cleaning the tooth roots to remove plaque and tartar buildup that has accumulated below the gum line.</p><br>
				<p>During the procedure the dentist will use specialized dental tools to scrape and smooth the surface of the tooth roots, which helps remove bacteria and promote gum healing. Local anesthesia may be used to minimize any discomfort during the procedure.</p><br>
				<p>Root planing is typically done in conjunction with scaling, which involves removing plaque and tartar from the tooth surfaces above the gum line. Together, these two procedures are effective in treating early stages of gum disease and preventing its progression to more severe forms that can cause tooth loss.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
