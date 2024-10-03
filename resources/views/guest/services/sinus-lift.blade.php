@extends('layouts.guest')
@section('content')
@section('title', $title)

<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title ?? "-" }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				{{-- <h2>Welcome to {{ config('app.name') }}</h2> --}}
				<p>A sinus lift procedure is a surgical procedure that is performed to add bone mass to the upper jaw in the area of the molars and premolars. The procedure is typically performed when there is insufficient bone mass in the upper jaw to support a dental implant.</p><br>
				<p>During a sinus lift procedure, the dentist will create a small incision in the gum tissue and lift it away from the bone. They will then make a small opening in the underlying bone to access the sinus cavity. The membrane lining the sinus is carefully lifted away from the bone, and a bone graft material is placed into the space created between the sinus membrane and the underlying bone. The bone graft material can be obtained from the patient's own body, from a donor, or from synthetic materials.</p><br>
				<p>After the bone graft is placed, the dentist will typically place a protective membrane over the bone graft and suture the gum tissue back in place. The area will be allowed to heal for several months, during which time the bone graft will fuse with the surrounding bone. Once the area has fully healed, a dental implant can be placed into the newly created bone.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
