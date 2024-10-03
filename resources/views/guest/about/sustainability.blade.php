@extends('layouts.guest')
@section('content')
@section('title', $title)

<!--  ************************* About Us Content Start Here  ************************** -->
<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title ?? "-" }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
	</div>
</div>
<!-- ######## About US End ####### -->
<!-- ################# Hospital Detail Starts Here#######################--->
<div class="top-msg pt-00">
	<div class="container">
		{{-- <div class="row">
			<div class="col-lg-6 col-md-6 vkjd">
				<h2><i class="fa fa-eye"></i> Our Vision</h2>
				<p>To become the center of dental excellence and most sought dental service provider in Uganda offering the highest quality of family and cosmetic dental services in the most hospitable setup. In achieving so, Primecare dental clinic will meet patients' expectations by using the highest quality dental products and take advantage of leading dental technologies.</p>
			</div>
			<div class="col-lg-6 col-md-6 vkjd">
				<h2><i class="fa fa-list"></i> Our Mission</h2>
				<p>Our mission is to develop long-term relationships with our patients and insurance providers, and to warrant illustrious service through personalized, ethical and informed care. We aspire to help our community achieve outstanding oral healthcare through high quality, multidisciplinary and cost-effective dental services.</p>
			</div>
		</div> --}}
		<div class="row">
			<div class="col-lg-12 col-md-6 vkjd">
				<p>Our mission is to develop long-term relationships with our patients and insurance providers, and to warrant illustrious service through personalized, ethical and informed care. We aspire to help our community achieve outstanding oral healthcare through high quality, multidisciplinary and cost-effective dental services.</p><br>
			</div>
		</div>
	</div>
</div>

@endsection
