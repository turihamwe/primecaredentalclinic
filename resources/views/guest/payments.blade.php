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
		<div class="row">
			<div class="col-md-12 col-sm-12">
				{{-- <h2>We accept the following payment methods;</h2><br> --}}
				<p>Our payment options are very convenient and flexible. In case we didn't include your favorite payment method, please reach out to us so that we add it and improve your payment experience. We accept the following payment methods;</p><br>
				<p><b>Cash:</b> We accept cash payments when you physically visit our clinics in all denominations of Uganda shillings.</p><br>
				<p><b>VISA:</b> We accept Visa credit or debit cards from any card provider.</p><br>
				{{-- <p><b>Mobile money:</b> Feel free to make payment to our mobile money numbers below;</p>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. MTN: {{ env('PHONE_1') }}</li>
					<li class="list-group-item border-0">2. Airtel: {{ env('PHONE_3') }}</li>
				</ul><br> --}}
				{{-- <p><b>Equity till:</b> Feel free to pay to our Equity till number: <b>{{ env('PAY_EQUITY') }}</b></p><br>
				<p><b>Bank accounts:</b> Please find our bank account numbers below:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Stanbic bank: {{ env('ACCOUNT_STANBIC') }}</li>
					<li class="list-group-item border-0">2. Equity bank: {{ env('ACCOUNT_EQUITY') }}</li>
				</ul><br> --}}
				<p>After making payment to any of our payment methods above, where applicable, please present your receipt to redeem any of our services. We thank you for trusting us with your dental health.</p>
			</div>
		</div>
	</div>
</div>

@endsection
