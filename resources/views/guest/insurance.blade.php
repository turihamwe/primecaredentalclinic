@extends('layouts.guest')
@section('content')
@section('title', $title)

<!--  ************************* About Us Content Start Here  ************************** -->
<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
	</div>
</div>
<!-- ######## About US End ####### -->
<!-- ################# Hospital Detail Starts Here#######################--->
<div class="top-msg pt-00">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-6 vkjd">
				{{-- <h2 class="text-center">Our core values</h2> --}}
				<p>We accept insurance cards from major insurers. Dental insurance is designed to assist you to restore your mouth to a decent and acceptable dental appearance and function. The treatment plan recommended for you by our doctors is based on your individual needs and goals, not dictated by insurance company limitations, maximums, deductibles or benefit allowances. The cost of some treatments may exceed while others may cost less than your insurance limit. However, some procedures are entirely excluded in your dental cover. This is all decided in the contract your employer signed with the insurance company. Our staff will always explain to you all costs prior to any treatment.</p><br>
				<p>We are glad to file your dental claims to enable you to receive the full benefits of your coverage provided. The number of health insurance companies has increased considerably, and the number of dental plans is numerous. As Primecare dental clinic, we do our best to provide you as close an estimation as possible, based on the information presented to us by your insurer. We request that you familiarize yourself with your insurance benefits and provide us with the correct information for the submission of your claims. This is by providing us you valid and up-to-date Insurance card, in-person, whenever you have an appointment with us. We will honor the insurance payment directly from your insurance company, provided payment is received from them within stipulated terms by your insurer.</p><br>
				<p>Please note, you cannot use another person's insurance card e.g., your dependent, spouse, sibling or friend on any single occasion to obtain services at our dental practice. The insurance card must be yours and it is not exchangeable/transferable.</p><br>
				<p>We cater to the following insurance services;</p><br>
				<div class="row team-row">
					<div class="col-md-3 col-sm-6">
						<div class="single-usr">
							<img src="{{ asset('images/insurance/uap.jpg') }}" alt="">
							<div class="det-o">
								<h4>UAP</h4>
								{{-- <i>&nbsp;</i> --}}
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-usr">
							<img src="{{ asset('images/insurance/bupa.jpg') }}" alt="">
							<div class="det-o">
								<h4>Bupa</h4>
								{{-- <i>&nbsp;</i> --}}
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-usr">
							<img src="{{ asset('images/insurance/sanlam.jpg') }}" alt="">
							<div class="det-o">
								<h4 style="font-size: 20px;">Sanlam</h4>
								{{-- <i>Facial Surgan</i> --}}
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-usr">
							<img src="{{ asset('images/insurance/aar.jpg') }}" alt="">
							<div class="det-o">
								<h4>AAR</h4>
								{{-- <i>Facial Surgan</i> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
