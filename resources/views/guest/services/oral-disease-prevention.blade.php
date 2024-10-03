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
				<p>Oral disease prevention is an important aspect of maintaining good body health. Ways to help prevent oral diseases include but are not limited to the following:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Brush your teeth at least twice a day with fluoride toothpaste. Use a soft-bristled toothbrush and brush for at least two minutes each time.</li>
					<li class="list-group-item border-0">2. Floss at least once a day to remove plaque and food particles from between your teeth.</li>
					<li class="list-group-item border-0">3. Limit sugary and acidic foods and drinks, as they can contribute to tooth decay and erosion.</li>
					<li class="list-group-item border-0">4. Visit your dentist regularly for check-ups and cleanings. Your dentist can identify and treat oral health problems before they become more serious.</li>
					<li class="list-group-item border-0">5. Consider using an antimicrobial mouthwash or rinse to help kill bacteria that can cause gum disease and bad breath.</li>
					<li class="list-group-item border-0">6. Quit smoking and avoid tobacco products, which can increase your risk of oral cancer and other health problems.</li>
					<li class="list-group-item border-0">7. Practice good nutrition and eat a healthy diet that is rich in fruits, vegetables, and whole grains.</li>
				</ul><br>
				<p>By following these tips, you can help prevent oral diseases and keep your teeth and gums healthy.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
