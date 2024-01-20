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
				<p>Dental veneers are thin, custom-made shells that are designed to cover the front surface of teeth to improve their appearance. They can be of ceramic, glass-ceramic, composite or Zirconia material and can be used to correct a range of dental imperfections, including crooked, stained, or chipped teeth.</p><br>
				<p>Basing on data by the <a href="https://aacd.com/proxy/files/Publications%20and%20Resources/AACD%20State%20of%20the%20Cosmetic%20Dentistry%20Industry%202013.pdf" class="text-info" target="blank">American Academy of Cosmetic Dentistry</a>, dental veneers are one of the most popular cosmetic dental care, accounting that 89 per cent of orthodontic patients in the study done had veneers done. Additionally, dental veneers can last ten to fifteen years with proper care, making them a long-lasting solution for those looking to improve their smile.</p><br>
				<p>Dental problems treated with veneers include:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. <b>Chipped or cracked teeth:</b> These can be repaired with veneers as the thin shells can effectively cover and protect the damaged tooth. By covering the chipped area, the dental veneer restores the tooth's appearance and provides an additional layer of protection. The veneer acts as a barrier, avoiding further damage and minimizing the risk of discomfort or sensitivity associated with damaged tooth structure.</li>
					<li class="list-group-item border-0">2. <b>Gaps between teeth:</b> Dental veneers can also close gaps between teeth, providing a more uniform appearance to your teeth. The veneers are customized to bond your visible side of teeth, which helps widen the teeth and eliminate the gaps. This not only improves the appearance of your smile but also enhances dental aesthetics by creating a more balanced teeth alignment.</li>
					<li class="list-group-item border-0">3. <b>Discolored teeth:</b> Another common use of veneers is to treat discolored teeth, whether from intrinsic stains like those from medication use or consumption of staining foods and drinks or extrinsic factors like tobacco use. Dental veneers are an excellent solution for managing teeth discoloration, as they effectively conceal and mask the stains, resulting in a uniform and stunning smile. By placing veneers on the discolored teeth, the veneers conceal any discoloration and create a consistent, white appearance that improves your overall smile.</li>
					<li class="list-group-item border-0">4. <b>Slightly misaligned teeth:</b> By placing veneers on malaligned teeth, the veneers effectively reshape and redefine their arrangement and appearance, resulting in a more attractive smile. They can correct irregularities such as unevenness, large or small teeth, and other shape anomalies. In situations where the malalignment is caused by structural issues, severe alternative treatments such as dental crowns or orthodontic treatment may be recommended.</li>
				</ul><br>
				<h2>Comparative differences between types of veneers</h2>
				<table border="">
					<thead>
						<th></th>
						<th>Porcelain Veneers</th>
						<th>Composite Resin Veneers</th>
					</thead>
					<tbody>
						<tr>
							<td>Material</td>
							<td>Porcelain</td>
							<td>Tooth-colored filling material</td>
						</tr>
						<tr>
							<td>Appearance</td>
							<td>Natural-looking, translucent, and mimics the sheen of natural teeth</td>
							<td>Less translucent and may not match natural teeth as closely</td>
						</tr>
						<tr>
							<td>Durability</td>
							<td>Highly durable and resistant to staining or discoloration</td>
							<td>Less durable and more prone to chipping or staining over time</td>
						</tr>
						<tr>
							<td>Lifespan</td>
							<td>Typically, last for ten to fifteen years or longer with proper care</td>
							<td>May last for five to seven years or less</td>
						</tr>
						<tr>
							<td>Tooth preparation</td>
							<td>Requires some tooth preparation, including removal of a thin layer of enamel</td>
							<td>Requires less tooth preparation and removal of less enamel</td>
						</tr>
						<tr>
							<td>Cost</td>
							<td>More expensive than composite resin veneers</td>
							<td>Less expensive than porcelain veneers</td>
						</tr>
						<tr>
							<td>Maintenance</td>
							<td>Require regular dental check-ups and proper oral hygiene to maintain longevity</td>
							<td>May require more frequent repairs or replacements due to chipping or staining</td>
						</tr>
						<tr>
							<td>Reversibility</td>
							<td>Reversible; flexible material and can be removed without causing significant damage to the natural tooth structure</td>
							<td>Reversible; flexible material and can be removed without causing significant damage to the natural tooth structure</td>
						</tr>
						<tr>
							<td>Price</td>
							<td>Reasonably more costly than composite veneers</td>
							<td>They are cheap</td>
						</tr>
					</tbody>
				</table><br>
				{{-- <p>Porcelain veneers, similarly known as porcelain laminates, are thin shells fabricated out of porcelain which fit precisely over the front surfaces of front teeth. They completely cover unattractive stains while allowing light-through to appear entirely real. Porcelain veneers are the most commonly used cosmetic option for smile makeovers and are used to mask imperfections like stains and discoloration; chipped, broken, cracked, misshapen, uneven, crooked, small and gapped teeth alike can all be improved with porcelain veneers. Like fake fingernails, they are affixed with an adhesive to the surfaces of front teeth. Unlike bonded composite, porcelain veneers offer better strength and support. If one has dark stains to be masked or existing porcelain crowns to be matched, porcelain veneers are the treatment of choice. Porcelain veneers require two dental visits because of the laboratory work involved. On your initial appointment, minimal shaping is required to create space for the veneer. Typically, there is 1 - 2 weeks between appointments but arrangements can be made for a shorter waiting time. Between visits, the patient wears temporary veneers.</p><br> --}}
				{{-- <p>Porcelain veneers are cared for in the same manner as your natural teeth. This involves keeping up with an excellent oral hygiene routine and attending regular dental cleanings every six months. Porcelain veneers are created to be naturally stain resistant. However, by minimizing the normal consumption of products such as red wine, tobacco and coffee, you will be able to prolong their bright white, pearly presence. Also, in order for porcelain veneers not to chip over time, it’s equally important to not clench, bite unusually hard food like hard-corn or grind your teeth. Mouth guards are helpful and recommended once veneers are placed. By adopting a superlative dental care routine, minimal prep veneers have the ability to last for decades.</p><br> --}}
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
