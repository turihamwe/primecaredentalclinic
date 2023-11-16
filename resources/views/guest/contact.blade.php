@extends('layouts.guest')
@section('content')
@section('title', $title)

<div class="row contact-rooo no-margin">
	<div class="container">
		
		@include('layouts.messages')
		
		<div class="row">
			<div style="padding:20px" class="col-sm-6">
				<h2 style="font-size:18px">{{ $title }}</h2>
				<form action="{{ route('contact') }}" method="POST">
					@csrf

					<div class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Full name:</label></div>
						<div class="col-sm-8"><input name="name" type="text" placeholder="Enter name" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Email address:</label></div>
						<div class="col-sm-8"><input name="email" type="email" placeholder="Enter email address" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Mobile number:</label></div>
						<div class="col-sm-8"><input name="phone" type="text" placeholder="Enter mobile number" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Subject:</label></div>
						<div class="col-sm-8"><input name="subject" type="text" placeholder="Enter subject" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Your message:</label></div>
						<div class="col-sm-8">
							<textarea name="message" rows="5" placeholder="Enter your message" class="form-control input-sm"></textarea>
						</div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label></label></div>
						<div class="col-sm-8">
							<button class="btn btn-danger btn-sm">Send message</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6">
				<div style="margin:50px" class="serv">
					<h2 style="margin-top:10px;">Address</h2>
					{{ config('app.name') }}<br>
					{{ env('ADDRESS_1') }}<br>
					{{ env('ADDRESS_2') }}<br>
					Phone: {{ env('PHONE_1') }}<br>
					WhatsApp: <a href="https://api.whatsapp.com/send?phone=256704605561&text=This%20is%20a%20test" target="_blank" class=" badge badge-success">Click here to chat with us directly on WhatsApp</a><br>
					Email: <span class="text-primary">{{ env('EMAIL_INFO') }}</span><br>
					Website: <a href="{{ config('app.url') }}" class="text-warning">{{ config('app.url') }}</a><br>
				</div>
				{{-- <div style="margin:50px" class="serv">
					<h2 style="margin-top:10px;">Payment methods</h2>
					<p>Mobile money MTN: <b>077...</b></p>
					<p>Mobile money Airtel: <b>075...</b></p>
						<p>Equity till number: <b>023415</b></p>
				</div> --}}
			</div>
		</div>
	</div>
</div>
<div style="margin-bottom:5%;" class="row no-margin">
	<div style="overflow:hidden;max-width:100%;width:100%;height:450px;"><div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Kololo,+Kampala,+Uganda&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlecoder" href="https://www.bootstrapskins.com/themes" id="grab-map-info">premium bootstrap themes</a><style>#my-map-canvas .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;}</style></div>
</div>

@endsection
