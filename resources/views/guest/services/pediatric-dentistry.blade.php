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
				<p>Pediatric dentistry focuses on managing dental ailments in young children. Our team is skilled in dealing with young children, pre-teens, and adolescents e.g, teething problems, and early childhood caries. If it is your child's first visit to the dentist, and they need to get their baby teeth or primary teeth checked, they need to be made comfortable. Prior to and during your child's dental treatment, our dental team will explain each stage of the procedure to you and them in a child-friendly manner, so that they are able to understand and know what to expect.  According to each child's dental needs, the following types of dental treatment may be required:</p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Extraction</li>
					<li class="list-group-item border-0">2. Topical fluoride</li>
					<li class="list-group-item border-0">3. Diet education</li>
					<li class="list-group-item border-0">4. Filling</li>
					<li class="list-group-item border-0">5. Myo brace</li>
					<li class="list-group-item border-0">6. Pulpectomy</li>
					<li class="list-group-item border-0">7. Pulpotomy</li>
					<li class="list-group-item border-0">8. Scale and polish</li>
					<li class="list-group-item border-0">9. Stainless steel crown</li>
					<li class="list-group-item border-0">10. Teeth straightening</li>
				</ul><br>
				<h2>Does your child need to visit a dentist?</h2>
				<p>At your child's dental visit, our team will fully inform you of what preventive steps, mainly involving oral hygiene and dietary habits your child can use to reduce the risk of dental illnesses. Our team will discuss with you and the essentials of your active engagement in your child's dental health care and development by:</p>
				<p>-Bringing them for regular dental check-ups;</p>
				<p>-Ensuring that they adopt healthy dietary habits;</p>
				<p>-Supervising and helping them with their oral hygiene.</p><br>
				<h2>Helping your child cope with dental appointment.</h2>
				<p>Your child's visit to the dentist may cause anxiety, probably due to an unpleasant past experience or fear of the unknown. At Primecare Dental clinic, our team is trained in behavioral management; your child will have a safe, gentle, friendly, and stress-free dental experience. To improve your child's dental visit, you can also observe the following vital points:</p>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Schedule their appointment in the morning as children tend to be accommodating during this time of the day.</li>
					<li class="list-group-item border-0">2. Before and during their visit, try to resist giving instructions on how they should behave with the dentist.</li>
					<li class="list-group-item border-0">3. Avoid punishing them on the day of their appointment.</li>
					<li class="list-group-item border-0">4. Avoid exposing your child to stressful events from the day before their dental appointment up to after their appointment.</li>
					<li class="list-group-item border-0">5. As a parent accompany your child for their dental visit, especially if it is their first time.</li>
				</ul><br>
				<h2>What does the procedure involve?</h2>
				<p><b>Stage 1: Full dental assessment</b></p>
				<p>Our dentists will listen to any concerns you and your child may have about their oral health. They will inspect your child’s medical history. Therefore, it is essential to inform our team of any medical conditions, medications, or allergies your child may have. We will also investigate your child's routine oral hygiene, dietary habits, and previous dental visits.</p>
				<p>Our dentist will examine your child's baby teeth, gums, mouth, and the surrounding tissues of their face and neck, all in a child-friendly manner. This is done to help your child have a pleasant dental experience. If necessary, X-rays will be taken following an explanation to you. Please be assured that all our X-ray equipment emit shallow radiation doses and are green certified and child safe.</p>
				<p><b>Stage 2: Personalized treatment plan</b></p>
				<p>If our dentist identifies any dental diseases your child has requiring further treatment - he/she will thoroughly discuss your child's condition, benefits and risks of each possible treatment option, the procedure of having treatment, and create a personalized treatment plan for your child.  You and your child will be educated on good oral health habits and be advised on how often you should bring your child for a dental check-up. Based on their age and need, your child may require a scale and polish and a topical fluoride treatment as part of general maintenance for their oral health. This is done in order to safeguard their adult teeth as they mature.</p>
				<h2>How often should your child visit the dentist?</h2>
				<p>We recommend that your child attend their first dental visit as they approach their first birthday. This helps your child to adhere to the following:</p>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. Keeping track of their dental development;</li>
					<li class="list-group-item border-0">2. Familiarizing with the dental environment to become fear-free regular dental attendees;</li>
					<li class="list-group-item border-0">3. Ensuring that they have good oral health habits in place.</li>
				</ul><br>
				{{-- <p>With Child dentistry, we focus on the dental health needs of infants, children, and adolescents. It involves providing dental care to children from infancy through adolescence, as well as those with special needs. We manage children’s behavior and provide gentle care in a welcoming, child-friendly environment. We offer a range of services that are specific to children's dental needs, including dental cleanings, fluoride treatments, dental sealants, fillings, extractions, and orthodontic treatment.</p><br> --}}
				{{-- <p>In addition to providing treatment, we also focus on educating parents and children on how to properly care for their teeth and gums. This includes teaching children how to brush and floss effectively, as well as providing guidance on healthy eating habits that promote good dental health.</p><br> --}}
				{{-- <p>Overall, we ensure that children develop and maintain healthy teeth and gums as they grow and develop. By providing specialized care and education, pediatric dentists can help children establish good dental habits that can last a lifetime.</p><br> --}}
			</div>
		</div>
		<div class="btn-ro text-center">
			<button class="btn btn-success"><a href="{{ route('services') }}" class="text-white"><i class="fa fa-arrow-left"></i> Back to services</a></button>
		</div>
	</div>
</div>

@endsection
