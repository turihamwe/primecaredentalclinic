@extends('layouts.guest')
@section('content')
@section('title', $title)

<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title ?? "-" }}</h1>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('images/brackground_7.jpg') }}" alt="Digital dental X-rays" style="float:right;">
			</div>
			<div class="col-md-6 col-sm-12">
				<h2>Digital dental X-rays</h2>
				<p>Digital X-rays are a modern technology we use at Primecare dental clinic to take images of teeth and other oral structures. They are similar to traditional dental X-rays but use electronic sensors instead of photographic film.</p><br>
				<p>The process of taking a digital dental X-ray is quite similar to traditional X-rays. The patient will be asked to bite down on a small device, and the X-ray machine will be positioned next to the patient's teeth. However, instead of using film to capture the image, the electronic sensor records the X-ray image digitally and instantly displays it on a computer screen.</p><br>
				<p>There are several advantages to using digital dental X-rays. First, they are much faster and more efficient than traditional X-rays. The images can be captured and displayed on a computer screen in a matter of seconds, making the entire process much faster and more convenient. Second, digital dental X-rays emit significantly less radiation than traditional X-rays, which is especially beneficial for patients who need to have X-rays taken frequently.</p>
				<p>Finally, digital dental X-rays allow dentists to easily manipulate and enhance the images, making it easier to identify problems and diagnose oral health issues.</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<h2>Intraoral camera</h2>
				<p>An intraoral camera is a small handheld device we use in dentistry to capture images of a patient's mouth and teeth. The camera is typically connected to a monitor and can capture high-quality images of the inside of the mouth, including the teeth, gums, and tongue.</p><br>
				<p>The camera is designed to be small and easy to maneuver, allowing the doctor to capture images of hard-to-see areas in the mouth. The camera is also equipped with a variety of different lenses and attachments to capture different types of images and to magnify the image for greater detail.</p><br>
				<p>It assists the dentist in diagnosing dental problems and to plan treatment. By capturing images of the inside of the mouth, the dentist can get a better understanding of a patient's oral health and develop a personalized treatment plan. Intraoral cameras can also be used to educate you about your dental health by showing you images of your teeth and explaining any issues that may be present.</p>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('images/about3.jpg') }}" alt="Intraoral camera">
			</div>
		</div>
	</div>
</div>
<div class="top-msg pt-00">
	<div class="container">
		{{-- <div class="row">
			<div class="col-lg-6 col-md-6 vkjd">
				<h2><i class="fa fa-eye"></i> Our Vision</h2>
				<p>To become the center of dental excellence and most sought dental service provider in Uganda offering the highest quality of family and cosmetic dental services in the most hospitable setup. In achieving so, Primecare dental clinic will meet patients' expectations by using the highest quality dental products and take advantage of leading dental technologies.</p>
			</div>
			<div class="col-lg-6 col-md-6 vkjd">
				<h2><i class="fa fa-list"></i> Our Mission</h2>
				<p>Our mission is to develop long-term relationships with our patients and insurance providers, and to warrant illustrious service through personalized, ethical and informed care. We aspire to help our community achieve outstanding oral healthcare through high quality, multidisciplinary and cost-effective dental services.</p>
			</div>
		</div> --}}
		<div class="row">
			<div class="col-lg-12 col-md-6 vkjd">
				<h2 class="text-center">Infection control</h2>
				<p>Dental clinics attend to a number of patients every day. Therefore, there is a risk of infectious diseases spreading between patients and dental staff through contaminated instruments and surfaces. Oral bacteria present may be passed via blood or saliva, resulting in the contamination of dental equipment and surfaces.</p><br>
				<p>To successfully control and prevent the spread of infectious diseases, we implement strict sterilization protocols and ensure surfaces are disinfected every after one patient. We adhere to the Ministry of health and WHO infection control procedures. </p><br>
				<p>Therefore, here at Primecare Dental clinic, we follow a strict hygiene protocol so that you are at ease during treatments and procedures.</p><br>
				<p>To prevent the spread of infection, some of the safety protocol we practice at our clinic include: the use of disposable one-time-use equipment to remove blood and saliva from the mouth, disposing of root canal files after each use, and the use of industrial-grade machinery and devices to provide contemporary technology and ensure clinical sterility and safety in our clinics. </p><br>
				<ul class="list-group list-group-flush">
					<li class="list-group-item border-0">1. All dentists and assistants wear clean personal protective equipment—a scrub apron, eyewear, disposable gloves and face masks;</li>
					<li class="list-group-item border-0">2. All treatment instruments are wrapped and autoclaved; steamed with pre-vacuum-type sterilizers prior to usage;</li>
					<li class="list-group-item border-0">3. All sterilizations are tracked by systematically logging information such as the clinician involved in packing or sterilizing the equipment at the different points of the sterility cycle;</li>
					<li class="list-group-item border-0">4. Dental chairs are cleansed with disinfectant before and after every treatment procedure;</li>
					<li class="list-group-item border-0">5. Patients are given a protective eye protector to protect their eyes during dental treatments;</li>
					<li class="list-group-item border-0">6. Antimicrobial mouth rinses are provided just before a dental procedure to reduce contamination;</li>
					<li class="list-group-item border-0">7. During surgeries, patients' faces are protected with a sterilized face mask. Solely part of the cheek, chin and lips are disinfected using Iodine;</li>
					<li class="list-group-item border-0">8. Disinfection is carried out with chlorhexidine mouthwash after the surgery.</li>
				</ul><br>
				<p>We ensure that these protocols are strictly adhered to by all dentists and clinical staff.</p><br>
			</div>
		</div>
	</div>
</div>

@endsection
