@extends('layouts.guest')
@section('content')
@section('title', $title)

<!--  ************************* About Us Content Start Here  ************************** -->
<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
	</div>
</div>
<!-- ######## About US End ####### -->
<!-- ################# Hospital Detail Starts Here#######################--->
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
				<p>Our patients and staff feel that Primecare dental clinic is a special place. We believe there are two explanations for this feeling, and they are what make us different from other dental practices. One is the commitments we live by and the other is our core values.</p><br>
				<p>Our core values mirror what is truly important to us as an organization and form the foundation on which we care for our clients and conduct ourselves. They are not descriptions of the work we do or the strategies we use to carry out our mission. Our core values are the fundamentals of how we go about our day-to-day work to ensure that this is a dental clinic patients and top talent employees want to belong to. They are the practices we endeavor to use every day in everything we perform.</p><br>
				<p>Our core values remain relentless and underlie our work, how we interact with one another, and the approaches we use to achieve our objectives. It is critical to attaining our vision that the people we hire share these values. We demonstrate by our hiring choices and staff training, how seriously we take these core values.</p><br>
				<p><b>Providing High-Quality Dental Care</b> - There can be no concession on the quality of care we provide our patients. Each patient is special and treated with respect and provided dental care on a level that we would provide our closest family members. Our staff all work together as a team to deliver high quality and more complete care than the patient would receive otherwise. We use advanced technology not for its own sake, but to increase efficiency and accuracy in assessment, diagnosis, treatment, and quality of care for our patients.</p><br>
				<p><b>Ensuring a Warm, Caring, Friendly, & Safe Atmosphere:</b> We accommodate our patients who are fearful or anxious about dental treatment and work to make each visit special, comfortable and even enjoyable. We listen to their concerns and support each patient in overcoming their fear, while letting them maintain control. We ensure it is easy for patients to come to our facility by building relationships and trust beyond the expected. The design of our facility is welcoming and warm with sounds and visuals that are relaxing and comforting. The environment naturally reflects the quality and style of care we provide.</p><br>
				<p><b>Giving Extraordinary Customer Service:</b> From the first contact with our office, we work to exceed each person's expectations even prior to them becoming our patients. We deliver with honesty and integrity by doing the “right thing” in all of our interactions and transactions, appreciating that our patients are the reason that we are who we are. We know that by doing so, they will become advocates for our clinic, referring others our way. Our partnerships with insurance providers and other corporate businesses are valued in the same way.</p><br>
				<p><b>Supporting Team Member Excellence & Happiness:</b> We strive to build and uphold a magnet practice that entices and retains team members of the highest talent in health care. Our success is dependent upon the collective intelligence, energy and contributions of all of our team members. Opportunities for continued growth and education help members achieve their highest potential. We appreciate effort, innovation and reward results. While we realize that we are each responsible for our own success and happiness, we create a workplace that is comfortable, enjoyable and a supportive place to be.</p><br>
				<p><b>Appreciating Financial Success for the Office & Team Members:</b> We know firsthand that our continued existence and ability to act according to the above values is founded upon the financial capacity to do so. We take that obligation very seriously and understand that the decisions we make often have an impact on the financial health of Primecare dental clinic as an organization. While profit is not the driving force for our decisions and care, it is a consequence of the positive way we conduct ourselves, provide patient care, and run the business with fiscal responsibility. The financial success of the practice is shared by management, employees and communities through outreaches and allows us continued practice growth, as well as the ability to give back to the society.</p><br>
				<p>Primecare dental clinic is proud to provide quality dental care to residents of Kampala and to residents of surrounding areas, including Wakiso and Mukono districts. We invite you to contact our office at {{ env('PHONE_3') }}/{{ env('PHONE_2') }} to learn more about our core values and dental services and to schedule your appointment with one of our dentists. We look forward to helping you care for your smile!</p><br>
			</div>
		</div>
	</div>
</div>

@endsection
