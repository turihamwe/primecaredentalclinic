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
				<p>With Child dentistry, we focus on the dental health needs of infants, children, and adolescents. It involves providing dental care to children from infancy through adolescence, as well as those with special needs. We manage children’s behavior and provide gentle care in a welcoming, child-friendly environment. We offer a range of services that are specific to children's dental needs, including dental cleanings, fluoride treatments, dental sealants, fillings, extractions, and orthodontic treatment.</p><br>
				<p>In addition to providing treatment, we also focus on educating parents and children on how to properly care for their teeth and gums. This includes teaching children how to brush and floss effectively, as well as providing guidance on healthy eating habits that promote good dental health.</p><br>
				<p>Overall, we ensure that children develop and maintain healthy teeth and gums as they grow and develop. By providing specialized care and education, pediatric dentists can help children establish good dental habits that can last a lifetime.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
