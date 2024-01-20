@extends('layouts.guest')
@section('content')
@section('title', $title)

{{-- <div style="margin-top:0px;" class="row no-margin">
	<iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div> --}}
<div class="row contact-rooo no-margin">
	<div class="container">

		@include('layouts.messages')

		<div class="row">
			<div style="padding:20px" class="col-sm-6">
				<h2 style="font-size:18px">{{ $title }}</h2>
				<p>Make your appointment online using our email <span class="text-info">{{ env('EMAIL_APP') }}</span> or the convenient form below.</p><br>
				<form action="{{ route('appointment') }}" method="POST">
					@csrf

					<div class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Your name*:</label></div>
						<div class="col-sm-8"><input name="name" type="text" placeholder="Eg. John Doe" class="form-control input-sm" required></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Address:</label></div>
						<div class="col-sm-8"><input name="address" type="text" placeholder="Eg. Kyengera, Kampala" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Phone number*:</label></div>
						<div class="col-sm-8"><input name="phone" type="text" placeholder="Eg. 256784392100" class="form-control input-sm" required></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Email address:</label></div>
						<div class="col-sm-8"><input name="email" type="email" placeholder="Eg. example@email.com" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Date*:</label></div>
						<div class="col-sm-8"><input name="date" type="date" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Preferred time*:</label></div>
						<div class="col-sm-8">
							<select name="time" id="time" class="form-control input-sm">
								<option value="">Select</option>
								<option value="8:00am - 10:00am">8:00am - 10:00am</option>
								<option value="10:00am - 12:00pm">10:00am - 12:00pm</option>
								<option value="12:00pm - 2:00pm">12:00pm - 2:00pm</option>
								<option value="2:00pm - 4:00pm">2:00pm - 4:00pm</option>
								<option value="4:00pm - 6:00pm">4:00pm - 6:00pm</option>
								<option value="6:00pm - 8:00pm">6:00pm - 8:00pm</option>
							</select>
						</div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Message:</label></div>
						<div class="col-sm-8">
							<textarea name="message" rows="5" placeholder="Notes for the doctor" class="form-control input-sm" required></textarea>
						</div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label></label></div>
						<div class="col-sm-8">
							<button class="btn btn-info btn-sm">Book appointment</button>
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
				<div style="margin:50px" class="serv">
					<h2 style="margin-top:10px;">Payment methods</h2>
					<p>MTN Mobile money: <b>{{ env('PHONE_1') }}</b></p>
					<p>Airtel money: <b>{{ env('PHONE_3') }}</b></p>
					<p>Equity till number: <b>{{ env('PAY_EQUITY') }}</b></p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
