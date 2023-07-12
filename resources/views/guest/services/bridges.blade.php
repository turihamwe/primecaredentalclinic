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
				<p>A dental bridge is a dental restoration that is used to replace one or more missing teeth. It is called a "bridge" because it spans the gap created by the missing teeth, using the adjacent teeth (or implants) as anchors.</p><br>
				<p>The bridge is typically made up of one or more artificial teeth, called pontics, that are attached to dental crowns on either side of the gap. These crowns are then cemented onto the adjacent natural teeth or dental implants to hold the bridge in place.</p><br>
				<p>Dental bridges can be made from a variety of materials, including porcelain, ceramic, metal, or a combination of materials. They are custom-made to match the color and shape of your natural teeth, so they blend in seamlessly with your smile.</p><br>
				<p>Bridges can improve your ability to chew and speak, prevent shifting of remaining teeth, and help maintain the shape of your face. They also provide a cosmetic solution for missing teeth. However, proper oral hygiene is important to maintain the health and longevity of the bridge and surrounding teeth.</p><br>
				<p>A bridge is ideal for the following individuals:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. People who want a tooth replacement option that is fixed in their mouth 24/7.</li>
					<li class="list-group-item border-0">2. The replacement of small to moderate gaps of 1 to 2 missing teeth.</li>
					<li class="list-group-item border-0">3. People with healthy and suitable supporting teeth able to support a bridge.</li>
					<li class="list-group-item border-0">4. Patients who are unable to have dental implants, for example, due poor bone quality.</li>
					<li class="list-group-item border-0">5. Quickly and temporarily replacing teeth that have been suddenly lost e.g., due to trauma.</li>
					<li class="list-group-item border-0">6. Younger patients less than 18 years of age who are awaiting to have dental implants when they are older.</li>
				</ul><br>
				<p>The process will take about 7-14 days and involves the following.</p><br>
				<h2>Step 1: Consultation and Pre-Treatment assessment.</h2>
				<p>At your Bridge consultation, our dentist will explore your concerns, carefully examine your teeth, and take any necessary radiographs and photographs, measurements or pulp tests.</p><br>
				<p>You will be informed if a bridge or other treatment options are suitable for your situation. If a bridge has been decided upon, the types of bridges will be discussed and decided upon according to your condition and expectations.</p><br>
				<p>Pre-treatment preparations before having a bridge may include:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Placement of a core filling material to restore large gaps in the supporting teeth for your bridge that have been damaged and removed from decay, wear, breakage.</li>
					<li class="list-group-item border-0">2. Gum contouring to enable the core filling material and Bridge to be placed securely and successfully over the supporting teeth.</li>
				</ul><br>
				<h2>Step 2: Bridge Procedure</h2>
				<p>Two appointments are needed to complete a bridge. The first visit to make any necessary preparations or refinements to the supporting teeth and to take specific measurements, the second visit to fit the bridge.</p><br>
				<p>Bridge Preparation;</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. A bridge preparation requires relevant supporting teeth to be completely numbed with a local anesthetic unless your tooth has had a prior root canal treatment, to eliminate pain.</li>
					<li class="list-group-item border-0">2. If a crown is used as a retainer, substance is removed from all superficial aspects of your supporting teeth to create space and margins whereby your bridge can seamlessly and securely sit upon. If a wing is used as a retainer, surfaces on your supporting teeth that will cover the wing will be defined.</li>
					<li class="list-group-item border-0">3. A measurement of your supporting teeth and gap will be taken and sent to a laboratory to fabricate your bridge. You will choose the specific color of your teeth and a tooth-colored temporary bridge or a temporary denture is made to replace the gap while your final bridge is made.</li>
				</ul><br>
				<p>Bridge Fit</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. The temporary bridge is removed and your final finished bridge tried-in to ensure that it is – secure, harmonious with your bite and neighboring teeth, and that you are happy with its appearance.</li>
					<li class="list-group-item border-0">2. Some minor refinements may need to be made. Once finalized, your bridge will be sealed in place on your supporting teeth with a luting cement. Numbing may not be needed for this part of the procedure. </li>
					<li class="list-group-item border-0">3. You will be given instructions on how to look after your bridge using a special bridge floss threader and additional oral health advice.</li>
				</ul><br>
				<p>Bridges that are done and looked well can last many years or even a lifetime.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
