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
				<p>Topical fluoride is a dental treatment involving fluoride varnish or gel. Fluoride is a mineral that can help strengthen tooth enamel, hence preventing dental caries, slow it down, or stop it from getting worse. Highly concentrated topical fluoride is directly applied to your teeth surfaces. It works by reducing the loss of and increasing the uptake of essential minerals to your permanent teeth and inhibiting decay-causing bacteria, thereby preventing tooth decay. Placement of topical fluorides to your teeth is recommended at least twice per year but up to four times in patients with a high risk of tooth decay. Adults and children above 3 years of age qualify for topical fluoride. Advantages of topical fluorides include:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0"><strong>Prevent Tooth Decay;</strong> Fluoride restores minerals in the surfaces of teeth and creates a strong outer layer, protecting the inner layers of the teeth from bacteria. This protects the inner dentin and pulp and teeth are kept healthy.</li>
					<li class="list-group-item border-0"><strong>Protects Your Enamel;</strong> Tooth enamel can wear down for several reasons such as drinking acidic drinks or brushing aggressively. When enamel wears down, tooth sensitivity results. Topical fluorides restores your enamel, and reduces teeth sensitivity.</li>
					<li class="list-group-item border-0"><strong>Reduces the Need for Costly Procedures Later;</strong> Prevention of disease is always the best treatment. To prevent restoration of teeth through costly procedures e.g. dental crowns, bridges or implants, keep your teeth strong, healthy and in good condition. Fluoride is an effective method in restoring lost minerals and rebuilding teeth layers.</li>
				</ul><br>
				<p>Topical fluorides are fluoride-containing toothpaste, mouthwash, gels or varnishes. They work by remineralizing tooth enamel and making it more resistant to acid erosion caused by bacteria products in the mouth.</p><br>
				<p>Recommendation is that people of all ages use fluoride toothpaste to help prevent teeth decay. For people at high risk of developing cavities, such as children and people with weak enamel, additional sources of fluoride, such as fluoride mouthwash or fluoride treatments at the dentist's office, may be recommended by the dentist upon caries risk assessment.</p><br>
				<p>It is important to use fluoride products as directed by your dentist, as overuse of fluoride can lead to a condition called fluorosis, which can cause white or brown spots on the teeth.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
