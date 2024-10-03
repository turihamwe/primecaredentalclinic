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
				<p>We diagnose and surgically treat conditions affecting the mouth, teeth, jaws, and face. These treatments include both simple cases from tooth extractions to complex reconstructive surgery.</p><br>
				<p>Common oral surgery procedures include:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Tooth extractions: Involving removal of teeth that are damaged, infected, or impacted (stuck in the gums).</li>
					<li class="list-group-item border-0">2. Dental implants: Placement of implants to replace missing teeth and restore function and aesthetics.</li>
					<li class="list-group-item border-0">3. Jaw surgery: Corrective surgery to realign the jaw, correct a bite problem, or treat temporomandibular joint (TMJ) disorders.</li>
					<li class="list-group-item border-0">4. Biopsy: Oral surgeons can perform a biopsy to diagnose and treat oral cancer and other abnormal growths or lesions in the mouth.</li>
					<li class="list-group-item border-0">5. Facial trauma: Treatment of facial injuries resulting from accidents, falls, or sports-related injuries.</li>
				</ul><br>
				{{-- <p>By following these tips, you can help prevent oral diseases and keep your teeth and gums healthy.</p><br> --}}
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
