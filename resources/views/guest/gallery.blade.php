@extends('layouts.guest')
@section('content')
@section('title', $title)
                                
{{-- @include('layouts.messages') --}}

<section class="our-team">
	<div class="container">
		<div class="inner-title row">
			<h2>{{ $title }}</h2>
			<p>Take a look at our work before and after.</p>
		</div>
		<div class="row team-row">
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-1.jpg') }}" alt="">
					<div class="det-o">
						{{-- <h4>Dr. Peter Muthon</h4>
						<i>Facial Surgeon</i>
						<p><a href="{{ route('/') }}" style="color:yellow">Read more</a></p> --}}
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-2.jpg') }}" alt="">
					<div class="det-o">
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
					<img src="{{ asset('images/gallery/gallery-3.jpg') }}" alt="">
					<div class="det-o text-center">
						{{-- <h4>Dr. Muhumuza Innocent</h4>
						<i>Facial Surgeon</i>
						<p><a href="{{ route('/') }}" style="color:yellow">Read more</a></p> --}}
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-4.jpg') }}" alt="">
					<div class="det-o">
						{{-- <h4>Dr. David Kanuel</h4>
						<i>Facial Surgan</i> --}}
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-5.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-6.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-7.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-8.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-9.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-10.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-11.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-12.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-13.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-14.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-15.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-16.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-17.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-18.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-19.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-20.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-21.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-22.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-23.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-usr">
					<img src="{{ asset('images/gallery/gallery-24.jpg') }}" alt="">
					<div class="det-o">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
