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
				<p>A dental implant is a surgical component that is placed into the jawbone to replace a missing tooth or teeth. It is typically made of titanium or other biocompatible materials that fuse with the surrounding bone in a process called osseointegration.</p><br>
                {{-- <img src="{{ asset('images/visa.jpg') }}" width="100px" height="auto" alt=""> --}}
				<p>Dental implants are a popular and effective way to replace missing teeth because they offer several advantages over other tooth replacement options such as bridges or dentures. They look and function like natural teeth, are long-lasting, and do not require any additional maintenance beyond normal oral hygiene practices.</p><br>
				<p>The dental implant procedure involves the surgical placement of the implant into the jawbone, followed by a period of healing and osseointegration. Once the implant has fused with the bone, a dental crown or other prosthetic can be attached to the implant to complete the tooth replacement.</p><br>
				<p>Advantages of dental implants include;</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. <b>Feels like natural teeth;</b> Implants are firmly anchored in the jaw bone, providing a strong foundation for the artificial prosthesis, the crown. This makes it a robust teeth replacement option, letting you carry out your daily activities, like eating and talking with ease. Compared to removable options, like dentures, which can slip in and out of their position, implants are not removable and very secure. Also, implants do not need to be removed and cleaned during teeth brushing in the way dentures need to be.</li>
					<li class="list-group-item border-0">2. <b>High success rate & potential to last a lifetime:</b> Dental implants have a high success rate, lasting for a lifetime if well cared for. Titanium metal implants are known to last a lifetime and can outlive their artificial tooth crown, which needs to be replaced every average of 25 years. However, some factors affect the lifespan of your dental implants including how well you care for them, the density of your jawbone, your habits and lifestyle, and the position of the tooth along the jaw arch. For example, having low jawbone density and habits such as smoking reduces the lifespan of your implant.</li>
					<li class="list-group-item border-0">3. <b>Not supported by surrounding teeth:</b> The screws of implants surgically placed into your jawbone support and hold the artificial tooth crown unlike in a tooth-supported bridge or denture, where the surrounding teeth serve as the anchoring pillar. Neighboring teeth are therefore not strained by these structures, hence preventing teeth from cracking or being worn down over time.</li>
					<li class="list-group-item border-0">4. <b>Avoids problems associated with missing teeth & prevents jawbone loss:</b> Missing teeth is not only a cosmetic problem but also causes remaining teeth to shift and gaps to occur between them. Food easily gets impacted and this could lead to tooth cavities and decay occurring over time. Gaps in the teeth also allow plaque and bacteria to accumulate, which could eventually lead to gum disease and recession. In addition, when a tooth is missing, it causes the jawbone and tissues surrounding it to shrink and decrease in volume. This could affect the bone structure of your face and change your facial profile, making one you look aged. Implants avoid bone loss and gum recession by stimulating the growth and development of the jawbone. Once the implant is placed, it functions like a natural tooth root, allowing the jawbone to grow. In this way, your facial appearance is maintained, preventing premature ageing, and resulting in maintaining a youthful and vibrant facial appearance.</li>
					<li class="list-group-item border-0">5. <b>Enhances your speech & eating abilities:</b> Dental implants feel almost exactly like your natural teeth, permitting you to eat, drink, and talk as normal. With dentures, because the tooth root is missing, over time the jawbone can degenerate and shrink. This would cause the dentures to loosen as well, slipping in and out of their position while eating or speaking. As the jawbone depreciates further and over time, you would have to change your denture set several times over the span of a few years. Teeth are an important part of speech sound formation. When gaps are in your teeth, this causes whistling or lisps. Wearing dentures also requires getting used to them with initial problems of inability to properly enunciate certain sounds or excessive saliva.</li>
				</ul><br>
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
