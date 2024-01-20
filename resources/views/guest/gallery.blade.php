@extends('layouts.guest')
@section('content')
@section('title', $title)

{{-- @include('layouts.messages') --}}

<section class="our-team">
	<div class="container">
		<div class="inner-title row">
			<h2>{{ $title }}</h2>
			<p>Take a look at Primecare in pictures.</p>
		</div>
		<div class="row team-row">
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-1.jpg') }}" alt="">
					<div class="det-o bg-info">
						{{-- <h4>Dr. Peter Muthon</h4>
						<i>Facial Surgeon</i>
						<p><a href="{{ route('/') }}" style="color:yellow">Read more</a></p> --}}
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-1a.jpg') }}" alt="">
					<div class="det-o bg-info">
						{{-- <h4>Dr. Namatovu Rosen</h4>
						<i>Facial Surgeon</i>
						<p><a href="{{ route('/') }}" style="color:yellow" data-toggle="collapse" data-target="#demo">Read more</a></p> --}}
					</div>
				</div>
				{{-- <div class="single-usr">
					<div class="card-body collapse" id="demo">
						<p>Dr. Namatovu Rosen is the elder of two sisters and she qualified from The Univserity of Cairo in 2016. She worked in Cape town before joining {{ config('app.name') }} in 2023.</p>
						<p>She has a desire to provide excellence at every level of dental care and is continually pusin g herself to advance her skills and keep up with the latest technologies, such as CBCT snanning tecnhology, so she can provide fast and effective treatment plannig of complex dental isssues.</p>
						<p>Rosen loves her job and is passionate about dentistry, and she hopes that this shows in her work. Her main interest in the field of dentistry is pediatric dentistry including prevention and restorative treatment as well as the area of family dentistry.</p>
					</div>
				</div> --}}
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-1b.jpg') }}" alt="">
					<div class="det-o bg-info text-center">
						{{-- <h4>Dr. Muhumuza Innocent</h4>
						<i>Facial Surgeon</i>
						<p><a href="{{ route('/') }}" style="color:yellow">Read more</a></p> --}}
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-1c.jpg') }}" alt="">
					<div class="det-o bg-info">
						{{-- <h4>Dr. David Kanuel</h4>
						<i>Facial Surgan</i> --}}
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-1d.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-1e.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-1f.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-1g.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-1h.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-2.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-2a.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-2b.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-2c.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-2d.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-2e.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-2f.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-2g.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3a.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3b.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3c.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3d.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3e.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3f.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3g.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3h.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-3i.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-4.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
		</div>
        <div class="row team-row">
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-4a.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-4b.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-4c.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-4d.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-4e.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-4f.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-4g.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div>
			{{-- <div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery2/gallery-4i.jpg') }}" alt="">
					<div class="det-o bg-info">
					</div>
				</div>
			</div> --}}
		</div>
	</div>
</section>

@endsection
