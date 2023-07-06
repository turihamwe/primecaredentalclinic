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
				<p>Porcelain veneers, similarly known as porcelain laminates, are thin shells fabricated out of porcelain which fit precisely over the front surfaces of front teeth. They completely cover unattractive stains while allowing light-through to appear entirely real. Porcelain veneers are the most commonly used cosmetic option for smile makeovers and are used to mask imperfections like stains and discoloration; chipped, broken, cracked, misshapen, uneven, crooked, small and gapped teeth alike can all be improved with porcelain veneers. Like fake fingernails, they are affixed with an adhesive to the surfaces of front teeth. Unlike bonded composite, porcelain veneers offer better strength and support. If one has dark stains to be masked or existing porcelain crowns to be matched, porcelain veneers are the treatment of choice. Porcelain veneers require two dental visits because of the laboratory work involved. On your initial appointment, minimal shaping is required to create space for the veneer. Typically, there is 1 - 2 weeks between appointments but arrangements can be made for a shorter waiting time. Between visits, the patient wears temporary veneers.</p><br>
				<p>Porcelain veneers are cared for in the same manner as your natural teeth. This involves keeping up with an excellent oral hygiene routine and attending regular dental cleanings every six months. Porcelain veneers are created to be naturally stain resistant. However, by minimizing the normal consumption of products such as red wine, tobacco and coffee, you will be able to prolong their bright white, pearly presence. Also, in order for porcelain veneers not to chip over time, it’s equally important to not clench, bite unusually hard food like hard-corn or grind your teeth. Mouth guards are helpful and recommended once veneers are placed. By adopting a superlative dental care routine, minimal prep veneers have the ability to last for decades.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
