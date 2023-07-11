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
				<p>Teeth whitening, is the lightening of the color of your teeth through the application of a safe and medically approved gel. It is easy and minimally invasive, requiring no local anesthetic or any removal of tooth substance. Professional teeth whitening procedures at Primecare dental clinic involves use of peroxide.</p><br>
				<p>Your teeth may need whitening if they are discolored. Teeth discoloration can be due to the following:</p>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Extrinsic discoloration from particular food and drinks like coffee, tea, or certain foods or smoking.</li>
					<li class="list-group-item border-0">2. Intrinsic discoloration changes to the health of the pulp within your tooth e.g., due to trauma, tooth decay, consumption of tetracycline antibiotics at a young age.</li>
					<li class="list-group-item border-0">3. Your dental history e.g., fillings, crowns.</li>
					<li class="list-group-item border-0">4. Certain medical conditions and medications e.g. Ricketts and Celiac disease.</li>
					<li class="list-group-item border-0">5. Developmental tooth abnormalities.</li>
				</ul><br>
				<h2>Two methods are available for teeth whitening.</h2>
				<p><b>Chairside Teeth Whitening</b></p>
				<p>Chairside teeth whitening is thoroughly done at our dental office by your dentist, where a strong concentration of whitening gel is used on your teeth to achieve exceptionally quicker results. This is useful if you are looking for results on short notice. At Primecare Dental Clinic, we trust our Opalescence Chairside Whitening System to aid us with this process. With this material, your teeth can be whitened by several shades from their original color with apparent differences in just one session.</p>
				<p><b>Home-Based Teeth Whitening Treatment</b></p>
				<p>Home-based teeth whitening involves the instructed self-placement of whitening gel into customized trays made specifically for your mouth, which are then placed over your teeth. The gels are of lower concentration as compared to chairside teeth whitening. Depending on the nature and severity of your tooth discoloration, the duration of a treatment usually lasts from 2 to 6 weeks. Still, it can take up to 6 months for too stubborn and intrinsic stains. Chairside and home-based tooth whitening may sometimes be used in combination to achieve enhanced and sustainable results.</p>
				<h2>What Does the Procedure Involve?</h2>
				<p><b>Stage 1:</b></p>
				<p>At your teeth whitening consultation, our dentist will thoroughly explore your concerns and determine the cause of your discolored teeth. Specific measurements and photographs of the color of your teeth, along with any necessary X-rays, will be taken. We will then discuss which type of tooth whitening (Chairside, home-based or both) and other treatments you may need e.g., scaling and polishing, airflow treatment to be most suitable to treat your teeth discoloration.</p>
				<p><b>Stage 2:</b></p>
				<p><b>Chairside Teeth Whitening;</b> The procedure lasts around 1 hour. Your eyes, lips and gums will first be covered with protective material. The whitening gel is applied over the relevant tooth/teeth. Special plasma light is then shown over to activate the gel, allowing its gentle penetration into your teeth to break up stains.</p>
				<p><b>Home-Based Teeth Whitening:</b> Intraoral mouth impressions will first be taken of your teeth to construct customized tooth whitening trays. These will be collected at your next appointment. During then, our dentist will provide you with teeth whitening gels and instructions on how to use them with the tray. Depending on your type of tooth discoloration and the tooth whitening system used, you will be advised to wear the tray for a specified number of hours during the day or at night.</p>
				<p><b>Stage 3: Post-Treatment Care</b></p>
				<p>Once your treatment has been completed, color measurements and photographs of your teeth will be retaken and reviewed with those collected before treatment, ensuring that you are satisfied with the results. This will be done immediately after the procedure for chairside teeth whitening, or at your 2 to 6-week review appointment if home-based tooth whitening has been done. Depending on how stable your whitening effects are, re-whitening or touch-up whitening may be required every 1 to 4 years. Therefore, if you have had home-based whitening, it will be useful to keep your whitening trays in a safe, dry and clean place as you may be able to re-use them should the structure of your teeth remain the same. It is very important that you avoid smoking while whitening your teeth at the same time as this can multiply the cancer-causing effects of the smoke.</p><br>
				{{-- <p>Teeth whitening is a cosmetic dental procedure that involves removing stains and discoloration from the teeth to make them appear brighter and whiter. It's a non-invasive and simple procedure that can be done in a dental office or at home.</p><br> --}}
				{{-- <p>Teeth whitening works by using a bleaching agent such as hydrogen peroxide or carbamide peroxide that penetrates the enamel and breaks down the stains and discoloration. In-office whitening procedures typically use a higher concentration of the bleaching agent and can be completed in one or two sessions.</p><br> --}}
				{{-- <p>At-home whitening kits usually come in the form of gels or strips that contain a lower concentration of the bleaching agent. They need to be used over a longer period of time, usually a few days to a couple of weeks, to achieve the desired results.</p><br> --}}
				{{-- <p>Teeth whitening is a safe and effective way to improve the appearance of your teeth and boost your confidence. However, it's important to consult with your dentist before undergoing any whitening procedure to ensure that it's safe for your teeth and gums.</p><br> --}}
				{{-- <p>Teeth whitening is a safe and effective way to improve the appearance of your teeth and boost your confidence. However, it's important to consult with your dentist before undergoing any whitening procedure to ensure that it's safe for your teeth and gums.</p><br> --}}
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
