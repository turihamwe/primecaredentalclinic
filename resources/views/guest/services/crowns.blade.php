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
				<p>A dental crown is a tooth-shaped cap that is placed over a damaged or weakened tooth to restore its shape, strength, size, and appearance. It is commonly made of materials like porcelain, ceramic, metal, or a combination of these materials.</p><br>
				<p>A dental crown is usually recommended when a tooth has been damaged by decay, a large filling, or a crack that compromises its structural integrity. It is also used to protect a tooth after a root canal procedure, to cover a dental implant, or to improve the appearance of a misshapen or discolored tooth.</p><br>
				<p>The procedure for placing a dental crown typically involves preparing the tooth by removing any decay or damage, shaping it to fit the crown, and then taking impressions of the tooth and surrounding teeth. The crown is then custom-made in a dental laboratory to fit the tooth precisely. Once the crown is ready, it is cemented onto the prepared tooth, and any final adjustments are made to ensure a comfortable fit and proper bite. Our dentist may recommend from the following types of crowns.</p><br>
				<h1 class="text-center">Precious Metal Crowns</h1>
				<p>Precious metals such as gold, silver, platinum, and palladium, have many suitable qualities for use as a crown. They are strong and long-lasting if well looked after. They are corrosion-resistant, produce a precise fit over your tooth and live harmoniously with your neighboring and opposing tooth. However, the main drawback of precious metal crowns for many patients is their metallic color. Therefore, precious metal crowns are typically solely recommended for back molar teeth, where they can be less conspicuous.</p><br>
				<h1 class="text-center">Porcelain-Fused-With-Metal Crowns</h1>
				<p>Porcelain-fused-with-Metal crowns attempt to mask the metallic color of a metal crown by adding a layer of dental porcelain over the metal to give an aesthetic, tooth-colored appearance. These crowns are suitable on almost all the teeth in your mouth, even your front ones. But, they require the removal of more tooth substance than precious metal crowns to accommodate for the additional porcelain. The porcelain can peel off, being less durable than metal.</p><br>
				<h1 class="text-center">Lithium Disilicate Crowns</h1>
				<p>Lithium disilicate crowns are a type of full ceramic crown that are tooth-colored, very natural looking, and have considerable strength and durability. They can be used on your front, premolar and molar teeth. Patients who desire an aesthetic-looking crown, and do not like the idea of having any metal placed in their mouth can have their expectations fulfilled with lithium disilicate crowns.  These ceramic crowns also take advantage of CAD-CAM digital design and fabrication.</p><br>
				<h1 class="text-center">Zirconia Crowns</h1>
				<p>Zirconia crowns are full ceramic crowns that are tooth-colored, with very good aesthetic properties and very high strength and durability. They tend to be used on premolar or molar teeth, and for patients who do not like the idea of having any metal in their mouth. Similar to lithium disilicate crowns, CAD-CAM digital technology can be used for their construction.</p><br>
				<h1 class="text-center"> Stainless Steel Crowns</h1>
				<p>Stainless steel crowns are mainly used on children’s baby molar teeth to stop decay or to protect their weakened tooth structure after a pulpotomy or pulpectomy.</p><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
