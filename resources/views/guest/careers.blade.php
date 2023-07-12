@extends('layouts.guest')
@section('content')
@section('title', $title)

<div class="about-us">
	<div class="container">
		<div class="inner-title">
			<h1 class="text-center">{{ $title }}</h1>
			{{-- <p>Take a look at some of our key features</p> --}}
		</div>
	</div>
</div>
<div class="top-msg pt-00">
	<div class="container">
		{{-- <div class="row">
			<div class="col-lg-6 col-md-6 vkjd">
				<h2><i class="fa fa-eye"></i> Our Vision</h2>
				<p>To become the center of dental excellence and most sought dental service provider in Uganda offering the highest quality of family and cosmetic dental services in the most hospitable setup. In achieving so, {{ config('app.name') }} will meet patients' expectations by using the highest quality dental products and take advantage of leading dental technologies.</p>
			</div>
			<div class="col-lg-6 col-md-6 vkjd">
				<h2><i class="fa fa-list"></i> Our Mission</h2>
				<p>Our mission is to develop long-term relationships with our patients and insurance providers, and to warrant illustrious service through personalized, ethical and informed care. We aspire to help our community achieve outstanding oral healthcare through high quality, multidisciplinary and cost-effective dental services.</p>
			</div>
		</div> --}}
		<div class="row">
			<div class="col-lg-12 col-md-6 vkjd">
				<p>{{ config('app.name') }} is an Equal Opportunity and Non-Discriminatory home, committed to providing equal employment opportunities to all individuals without regard to race, color, religion, sex, national origin, disability, age, genetic information, sexual orientation, gender identity, or any other protected characteristic as defined by applicable laws. The company prohibits discrimination and harassment in all aspects of employment, including recruitment, hiring, promotions, compensation, benefits, and training.</p><br>
				<p><b>Professional Development and Training:</b> We recognize the importance of continuous professional development and encourages employees to enhance their skills and knowledge. The company will provide opportunities for training, workshops, conferences, and other relevant educational activities to support career growth and personal development. Employees will be encouraged to attend relevant seminars, courses, and certification programs to stay updated with the latest advancements in the dental field.</p><br>
				<p><b>Performance Evaluation and Feedback:</b> At Primecare we believe in fostering a culture of open communication and constructive feedback. Regular performance evaluations will be conducted to assess employee performance, identify areas for improvement, and recognize achievements. Managers will provide timely feedback and guidance to help employees develop their skills and meet their career goals. Performance evaluations will be based on clear and objective criteria, ensuring fairness and transparency.</p><br>
				<p><b>Career Advancement Opportunities:</b> {{ config('app.name') }} is committed to promoting internal growth and providing career advancement opportunities to deserving employees. Vacant positions will be first advertised internally to encourage internal mobility and career progression. The company will provide clear guidelines and criteria for promotion, ensuring fair and transparent selection processes. Additionally, employees will have access to mentorship programs and career counseling to help them identify and achieve their long-term career goals.</p><br>
				<p><b>Work-Life Balance:</b> {{ config('app.name') }} acknowledges the importance of maintaining a healthy work-life balance. The company will strive to provide flexible work arrangements whenever possible, such as remote work options, flexible scheduling, and family-friendly policies. By supporting employees' personal well-being, Prime Dental Care aims to create a positive and productive work environment.</p><br>
				<p><b>Compensation and Benefits:</b> Prime Dental Clinic is committed to providing competitive compensation and benefits packages to attract and retain top talent. Salaries will be benchmarked against industry standards, and employees will receive regular performance-based salary reviews. In addition to competitive pay, the company offers a comprehensive benefits package, including health insurance, retirement plans, paid time off, and other employee assistance programs.</p><br>
				<p><b>Employee Engagement and Recognition:</b> {{ config('app.name') }} recognizes that engaged and motivated employees are key to the company's success. Regular employee engagement activities, team-building events, and social initiatives will be organized to foster a sense of community and collaboration among employees. The company implements employee recognition program to acknowledge and reward outstanding performance and contributions.</p><br>
				<p><b>Code of Conduct and Ethics:</b> {{ config('app.name') }} expects all employees to adhere to a code of conduct and ethics that upholds the highest standards of professionalism, integrity, and patient care. The company will provide clear guidelines on ethical practices and professional behavior to ensure the delivery of quality dental care and maintain patient trust.</p><br>
				<p><b>Health and Safety:</b> {{ config('app.name') }} is committed to providing a safe and healthy work environment for all employees. The company will comply with all applicable health and safety regulations and implement measures to prevent work-related injuries and illnesses. Regular training on safety protocols will be provided to employees, and necessary safety equipment will be provided to ensure a safe working environment.</p><br>
				<p><b>Continuous Improvement:</b> {{ config('app.name') }} recognizes the importance of continuous improvement in providing quality dental care and maintaining a successful organization. Our company encourages employees to provide feedback and suggestions for improvement through regular channels. The feedback is used to implement positive changes, streamline processes, and enhance the overall employee experience.</p><br>
				<p>This career policy is designed to support employee growth, foster a positive work environment, and ensure equal opportunities for all. {{ config('app.name') }} is committed to implementing and upholding this policy to attract, develop, and retain talented professionals in the dental field.</p><br>
			</div>
		</div>
	</div>
</div>

@endsection
