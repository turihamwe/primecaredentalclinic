@extends('layouts.guest')
@section('content')
@section('title', $title)

{{-- @include('layouts.messages') --}}

<!--  ************************* About Us Content Start Here  ************************** -->
<div class="our-team">
	<div class="container">
		<div class="inner-title row">
			<h2>{{ $title ?? "-" }}</h2>
			{{-- <p>Take a look at our Team</p> --}}
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-12">
				<h2>Dental braces</h2>
				{{-- <small>Facial Surgeon</small> --}}
				<p>Take a look at how braces are fixed.</p><br>
				<iframe width="900" height="506" src="https://www.youtube.com/embed/5BsVjywyGuE" title="How Invisalign Attachments are placed?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				{{-- <p>Dr Peter Muthon joined the dental profession in 2003, and he's also a Rotarian since 2005. He qualified from University of Nairobi in 2002 and gained his early professional experience in general practice in Nairobi and Mombasa.</p><br> --}}
			</div>
		</div>
	</div>
</div>
<div class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-12">
				<h2>Root canal treatment</h2>
				{{-- <small>Facial Surgeon</small> --}}
				<p>Take a look at how root canal treatment is done.</p><br>
				<iframe width="900" height="506" src="https://www.youtube.com/embed/UQH3GWsCmr8" title="Root canal treatment - Endodontics for tooth decay ©" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				{{-- <p>She has a desire to provide excellence at every level of dental care and is continually pusin g herself to advance her skills and keep up with the latest technologies, such as CBCT snanning tecnhology, so she can provide fast and effective treatment plannig of complex dental issues.</p><br> --}}
			</div>
			{{-- <div class="col-md-6 col-sm-12">
				<img src="{{ asset('images/team/doctor-2.jpg') }}" alt="">
			</div> --}}
		</div>
	</div>
</div>

@endsection
