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
				<p>A dental filling is carried out to repair a tooth damaged by mechanical trauma or decay(caries). It is important to enable the tooth to function normally and maintain its shape and appearance.</p><br>
				<p>There are a variety of dental fillings at Primecare dental that our dentists use when treating patients.</p><br>
				<p>The type of tooth filling material that is most suitable for you depends primarily on these factors:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Where in the mouth the filling is needed.</li>
					<li class="list-group-item border-0">2. How much repair is required for the decay (extent of decay).</li>
					<li class="list-group-item border-0">3. Your preference for how visible the filling is in the mouth.</li>
				</ul><br>
				<p>These fillings are placed directly into your tooth, and may be placed completely freehand within your mouth.</p><br>
				<h2>What is a Dental Filling?</h2>
				<p>Dental fillings are artificial restorations which are commonly used to treat and restore a damaged tooth back to its original function and appearance. Types of Dental Fillings include;</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. <b>Amalgam;</b> This is an alloy forming a mixture of metals, consisting of liquid (elemental) mercury and a powdered alloy composed of silver, tin, and copper.</li>
					<li class="list-group-item border-0">2. <b>Composite Resin;</b> Composite resin filling is a tooth-colored filling material that is known to be long-lasting, durable, and aesthetic. It tends to be used on your front teeth and in external cavities.</li>
					<li class="list-group-item border-0">3. <b>Glass Ionomer;</b> Glass ionomer is also a tooth-colored filling material. It is used in deep cavities as it has a therapeutic, healing effect, therefore reducing chances of post-operative sensitivity or pain.</li>
				</ul><br>
				<h2>Benefits Of Dental Fillings</h2>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. <b>Cost-effective;</b> A filling can usually be placed during a single visit to Primecare dental clinic and is less costly than dental crowns, which are used to repair larger areas of decay.</li>
					<li class="list-group-item border-0">2. <b>Enhanced tooth functionality;</b> Dental decay has the potential to make chewing quite difficult and painful. Have your decayed teeth filled and you might find eating proves less painful.</li>
					<li class="list-group-item border-0">3. <b>Enhances appearance;</b> Fillings repair a damaged tooth and restores its normal function and appearance.</li>
					<li class="list-group-item border-0">4. <b>Fillings can even release fluoride;</b> Some fillings like the glass ionomer release fluoride to safeguard the tooth in question from additional decay and damage. This type of filling is commonly used in instances where there is decay above the gum line. It can also be used for children with a high teeth decay risk.</li>
					<li class="list-group-item border-0">5. Fillings can last upwards of 15 years and are highly resistant to corrosion.</li>
					<li class="list-group-item border-0">6. Halting the progression of decay; Fillings are used to fix small areas of decay and they prevent further deterioration by providing a barrier against harmful bacteria.</li>
					<li class="list-group-item border-0">7. Preserving tooth structure; Filling a damaged part of the tooth helps retain the structure of the tooth.</li>
				</ul><br>
				<h2>How is the procedure done?</h2>
				<p><b>Stage 1:</b> Dental Assessment; At your dental check-up, our dentist will thoroughly examine your teeth. You will need to take the necessary X-ray(s) and will be informed about any conditions that require a filling, or if other treatment options such as an onlay or crown is preferable. Your filling material will be decided according to your situation and expectations.</p><br>
				<p><b>Stage 2:</b> Placement of Your Filling; Placement of your filling can last from 15 minutes to 1 hour, depending on its size. Our dentist may need to administer local anesthesia to numb the tooth, especially for larger cavities, to make the procedure painless and comfortable. The dentist will gently remove the weakened or decayed parts of the tooth or old cements. The filling is then placed and shaped into your cavity and polished till it is smooth and harmonious with your bite.</p><br>
				<p><b>Stage 3:</b> Post-Operative Care; After the procedure, our dentist will give you instructions on how to look after your filling and also provide oral hygiene and health advice. Fillings that are done well and looked after meticulously can potentially last many years, usually over 10 years depending on the material used.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
