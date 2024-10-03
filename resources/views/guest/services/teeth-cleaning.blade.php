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
				<p>Teeth cleaning is the process of removing plaque, tartar, and stains from teeth to improve oral hygiene and prevent dental problems such as cavities and gum disease. It involves the use of various tools and techniques to remove the buildup of bacteria and food particles that can accumulate on teeth and cause damage over time.</p><br>
				<p>During a teeth cleaning appointment, your dentist or dental hygienist will typically perform the following steps:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. A physical exam: The dentist or hygienist will examine the teeth and gums to check for any signs of decay, gum disease, or other dental problems.</li>
					<li class="list-group-item border-0">2. Scaling: This is the process of removing plaque and tartar buildup from the teeth using a special tool called a scaler. He will use a combination of a water jet scaler (ultrasonic) and hand scalers.</li>
					<li class="list-group-item border-0">3. Polishing: After scaling, the teeth are polished using a dental polish and a small brush to remove surface stains and create a smooth surface.</li>
					<li class="list-group-item border-0">4. Fluoride treatment: In some cases, a fluoride treatment may be recommended to strengthen the teeth and help prevent decay.</li>
				</ul><br>
				<p>Teeth cleaning is an important part of maintaining good oral hygiene and should be done regularly, typically every six months, to keep teeth healthy and prevent dental problems.</p><br>
				<h2>Why do I need scaling and polishing?</h2>
				<p>Bacteria can oftentimes grow on your teeth and gums, even right after they are brushed. If it builds up and is not cleaned regularly, your teeth develop plaque and tartar which over time lead to gum diseases, also known as periodontal diseases, like gingivitis and periodontitis, able to compromise the strength of your teeth. Worldwide, this is the leading cause of teeth loss. If tartar is left to fester, it can prevent good oral hygiene needed to maintain healthy teeth and gums, cause bad breath, and weaken your oral health. Also, tartar can come from coffee, tea, wine, curry, and tobacco, leaving an unpleasant appearance on your teeth. Scaling and Polishing is considered a preventative measure to potential gum diseases. Teeth cleaning will therefore give you the following benefits;</p>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Enjoy brighter and shining teeth.</li>
					<li class="list-group-item border-0">2. Enhanced gum health.</li>
					<li class="list-group-item border-0">3. Fresh breath.</li>
					<li class="list-group-item border-0">4. Protect your general health.</li>
					<li class="list-group-item border-0">5. Preventative care is cheaper.</li>
				</ul><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
