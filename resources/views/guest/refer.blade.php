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
				<h2 style="font-size:18px">{{ $title ?? "-" }}</h2>
				<p>Refer a patient using our emergency phone <span class="text-info">{{ env('PHONE_1') }}</span> or the convenient form below.</p><br>
				<form action="{{ route('refer-a-patient') }}" enctype="multipart/form-data" method="POST">
					@csrf

					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Select service:</label></div>
						<div class="col-sm-8">
							<select name="service" id="service" class="form-control input-sm">
								<option value="">Select</option>
								<option value="Dental implants">Dental implants</option>
							  	<option value="Pediatric dentistry">Pediatric dentistry</option>
							  	<option value="Braces">Braces</option>
							  	<option value="Crowns">Crowns</option>
							  	<option value="Veneers">Veneers</option>
							  	<option value="Dental check-up">Dental check-up</option>
							  	<option value="Dental fillings">Dental fillings</option>
							  	<option value="Oral disease prevention">Oral disease prevention</option>
							  	<option value="General dentistry">General dentistry</option>
							  	<option value="Airflow treatment">Airflow treatment</option>
							  	<option value="Oral surgery">Oral surgery</option>
							  	<option value="Dental hygiene">Dental hygiene</option>
							  	<option value="Glass-ceramic restorations">Glass-ceramic restorations</option>
							  	<option value="Inlays & onlays">Inlays & onlays</option>
							  	<option value="Bridges">Bridges</option>
							  	<option value="Clear aligners/Invisalign">Clear aligners/Invisalign</option>
							  	<option value="Teeth whitening">Teeth whitening</option>
							  	<option value="Space maintainers">Space maintainers</option>
							  	<option value="Root canal treatment">Root canal treatment</option>
							  	<option value="Gum reshaping">Gum reshaping</option>
							  	<option value="Mouthwash">Mouthwash</option>
							  	<option value="Scaling and polishing">Scaling and polishing</option>
							  	<option value="Digital dental x-rays">Digital dental x-rays</option>
							  	<option value="Intra-oral camera">Intra-oral camera</option>
							  	<option value="Root planing">Root planing</option>
							  	<option value="Wisdom molar extraction">Wisdom molar extraction</option>
							  	<option value="Sinus lift">Sinus lift</option>
							  	<option value="Topical fluoride application">Topical fluoride application</option>
							  	<option value="Bad breath treatment">Bad breath treatment</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Provider details:</label></div>
						<div class="col-sm-8"><input name="provider_details" type="text" placeholder="Eg. John Doe" class="form-control input-sm" required></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Reason for referral/specific medical concern</label></div>
						<div class="col-sm-8">
							<textarea name="reason" rows="5" placeholder="Notes for the doctor" class="form-control input-sm" required></textarea>
						</div>
					</div>
                    <b>Patient information</b>
					<div class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Patient name:</label></div>
						<div class="col-sm-8"><input name="patient_name" type="text" placeholder="Eg. John Doe" class="form-control input-sm" required></div>
					</div>
					<div class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Gender:</label></div>
						<div class="col-sm-8">
                            <label><input type="radio" name="patient_gender" value="male" class="form-control input-sm" checked>Male</label>
                            <label><input type="radio" name="patient_gender" value="female" class="form-control input-sm">Female</label>
                        </div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Date of birth:</label></div>
						<div class="col-sm-8"><input name="dob" type="date" class="form-control input-sm"></div>
					</div>
					<div class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Parent name (If under 18):</label></div>
						<div class="col-sm-8"><input name="parent" type="text" placeholder="Eg. John Doe" class="form-control input-sm" required></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Address:</label></div>
						<div class="col-sm-8"><input name="address" type="text" placeholder="Eg. Kyengera, Kampala" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Medical records:</label></div>
						<div class="col-sm-8"><input name="records" type="file" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Preferred date:</label></div>
						<div class="col-sm-8"><input name="date" type="date" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Preferred time:</label></div>
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
                    <b>Insurance information</b>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Does the patient have insurance?:</label></div>
						<div class="col-sm-8">
                            <label><input type="radio" name="insurance" value="yes" class="form-control input-sm" checked>Yes</label>
                            <label><input type="radio" name="insurance" value="no" class="form-control input-sm">No</label>
                        </div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>If yes, insurance provider:</label></div>
						<div class="col-sm-8"><input name="provider" type="text" placeholder="Eg. 256784392100" class="form-control input-sm" required></div>
					</div>
                    <b>Referring physician</b>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Name:</label></div>
						<div class="col-sm-8"><input name="doctor_name" type="text" placeholder="Eg. 256784392100" class="form-control input-sm" required></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Phone number:</label></div>
						<div class="col-sm-8"><input name="doctor_phone" type="text" placeholder="Eg. 256784392100" class="form-control input-sm" required></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label>Email address:</label></div>
						<div class="col-sm-8"><input name="doctor_email" type="email" placeholder="Eg. example@email.com" class="form-control input-sm"></div>
					</div>
					<div style="margin-top:10px;" class="row">
						<div style="padding-top:10px;" class="col-sm-3"><label></label></div>
						<div class="col-sm-8">
							<button class="btn btn-info btn-sm">Submit</button>
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
					<p>MTN Mobile money: <b>0772639412</b></p>
					<p>Airtel money: <b>0704605561</b></p>
					<p>Equity till number: <b>{{ env('PAY_EQUITY') }}</b></p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
