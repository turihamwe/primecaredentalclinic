@extends('layouts.guest')
@section('content')
@section('title', $title)

<div class="about-us">
	<div class="container">

		@include('layouts.messages')

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
				<p>Are you a dynamic and organized individual with a passion for providing exceptional customer service in a professional setting?</p><br>
				{{-- <p class="text-info"><i class="fa fa-info-circle"></i> We are hiring. If you've got what it takes, we want to work with you. Please find the form <a href="#form" class="text-warning text-bold"><b><u>here</u></b></a> and send us your application to get started.</p><br> --}}
				<p class="text-info"><i class="fa fa-info-circle"></i> We are hiring. If you've got what it takes, we want to work with you. You may apply for the job positions below;</p><br>
			</div>
		</div>
        <div class="row">
            <h2><i class="fa fa-eye"></i> Position: Customer Care Manager/Administrator</h2>
            <p><b>Department:</b> Sales & Marketing</p>
            <p><b>Reports to:</b> Operations Director</p>
            {{-- <p><b>Company site:</b> <a class="text-info">www.primecaredentalclinics.com</a></p> --}}
            <p><b>Job summary:</b></p>
            <p>We are looking for a dedicated call center manager/administrator to join our sales and marketing team. In this role, you will handle inbound and outbound calls, address customer inquiries, and ensure timely issue resolution. Additionally, you will perform vital administrative tasks;</p>
            <div class="col-lg-6 col-md-6 vkjd mt-4">
                <p><b>Key responsibilities:</b></p>
                <ul>
                    <li style="list-style: disc;">Manage inbound and outbound calls, delivering outstanding customer service.</li>
                    <li style="list-style: disc;">Resolve customer complaints, escalating issues when necessary and patient follow-up.</li>
                    <li style="list-style: disc;">Generate reports, monitor and follow up on tasks, and strive for 100% customer satisfaction.</li>
                    <li style="list-style: disc;">Maintain adequate stock levels to facilitate same-day deliveries.</li>
                    <li style="list-style: disc;">Collaborate with team members to identify and address emerging issues.</li>
                    <li style="list-style: disc;">Provide constructive feedback to management for continuous improvement.</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 vkjd mt-4">
                <p><b>Requirements:</b></p>
                <ul>
                    <li style="list-style: disc;">High school diploma or equivalent; a bachelor's degree in a relevant field is advantageous.</li>
                    <li style="list-style: disc;">Proven experience in a call center or similar customer service role preferably in a dental clinic.</li>
                    <li style="list-style: disc;">Exceptional verbal and written communication skills plus strong organizational and multitasking abilities.</li>
                    <li style="list-style: disc;">Ability to thrive under pressure and handle challenging customer interactions.</li>
                    <li style="list-style: disc;">Proficiency in Microsoft Office Suite.</li>
                    <li style="list-style: disc;">Capability to use Microsoft Word, Excel, and the Internet.</li>
                    <li style="list-style: disc;">Flexibility to work beyond regular business hours if needed.</li>
                </ul>
            </div>
            {{-- <p>If you are ready to contribute to a dynamic team and uphold the standards of {{ config('app.name') }}, we encourage you to send your resume and application to info@primecaredentalclinics.com and dentalclinicsprimecare@gmail.com by 12th/December/2023. Join us in delivering exceptional care to our valued customers.</p> --}}
        </div>
        <div class="row mt-5">
            <h2><i class="fa fa-list"></i> Position: Human Resource Operations Officer</h2>
            {{-- <p><b>Organization: {{ config('app.name') }}</b></p>
            <p><b>Location: Kampala, Uganda</b></p> --}}
            {{-- <p><b>Company site:</b> <a class="text-info">www.primecaredentalclinics.com</a></p> --}}
            <p><b>Job summary:</b></p>
            <p>As the Human Resource Operations Officer, you will play a pivotal role in facilitating and enhancing HR operations in collaboration with Line Managers and the HR Team at {{ config('app.name') }}.</p>
            <div class="col-lg-6 col-md-6 vkjd mt-4">
            <p><b>Key responsibilities:</b></p>
            <ul>
                <li style="list-style: disc;">Manage and update employee-related data in the HRMIS and physical files.</li>
                <li style="list-style: disc;">Ensure compliance with HR policies, implement policy changes, and keep staff informed.</li>
                <li style="list-style: disc;">Handle employee relations and disciplinary processes and conduct investigations.</li>
                <li style="list-style: disc;">Coordinate the annual HR audit, ensuring compliance and providing necessary information.</li>
                <li style="list-style: disc;">Provide timely HR analytics, including headcount reports, joiners/leavers reports, and leave reports.</li>
                <li style="list-style: disc;">Administer staff separation process, exit interviews, and participate in HR policy review.</li>
                <li style="list-style: disc;">Handle documentation in the HR department and ensure accuracy.</li>
            </ul>
            </div>
            <div class="col-lg-6 col-md-6 vkjd mt-4">
            <p><b>Qualifications, Skills, and Experience:</b></p>
            <ul>
                <li style="list-style: disc;">Bachelor's Degree in Human Resource Management or a relevant field.</li>
                <li style="list-style: disc;">Three years of experience in a dynamic work environment.</li>
                <li style="list-style: disc;">Good knowledge of labor law.</li>
                <li style="list-style: disc;">Hands-on experience with Human Resources Information Systems.</li>
                <li style="list-style: disc;">Ability to develop clear and fair company policies and apply them consistently.</li>
                <li style="list-style: disc;">Excellent analytical and decision-making abilities.</li>
                <li style="list-style: disc;">Strong team management skills.</li>
            </ul>
            </div>
            {{-- <p>If you are ready to contribute to a dynamic team and uphold the standards of {{ config('app.name') }}, we encourage you to send your resume and application to info@primecaredentalclinics.com and dentalclinicsprimecare@gmail.com by 12th/December/2023. Join us in delivering exceptional care to our valued customers.</p> --}}
        </div>
        <div class="row mt-5">
            <h2><i class="fa fa-list"></i> Position: Accountant</h2>
            <p><b>Reports to:</b> Operations Director</p>
            {{-- <p><b>Company site:</b> <a class="text-info">www.primecaredentalclinics.com</a></p> --}}
            <p><b>Job summary:</b></p>
            <p>{{ config('app.name') }} is seeking a dedicated and skilled accountant to join our team. As an integral part of our dental practice, you will be responsible for managing our financial records, ensuring compliance, and contributing to the overall success of the clinic. If you have a strong background in accounting and are ready to make a difference in a healthcare environment, we'd love to hear from you.</p>
            <div class="col-lg-6 col-md-6 vkjd mt-4">
                <p><b>Key responsibilities:</b></p>
                <ul>
                    <li style="list-style: disc;">Maintain accurate financial records and ledgers.</li>
                    <li style="list-style: disc;">Prepare and analyze financial reports.</li>
                    <li style="list-style: disc;">Manage payroll and accounts payable/receivable.</li>
                    <li style="list-style: disc;">Ensure compliance with tax regulations and financial standards.</li>
                    <li style="list-style: disc;">Assist in budgeting and financial planning.</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 vkjd mt-4">
                <p><b>Qualifications, Skills, and Experience:</b></p>
                <ul>
                    <li style="list-style: disc;">Bachelor's degree in Accounting or Finance.</li>
                    <li style="list-style: disc;">Relevant experience in accounting.</li>
                    <li style="list-style: disc;">Strong analytical and problem-solving skills.</li>
                    <li style="list-style: disc;">Proficiency in financial software and tools.</li>
                    <li style="list-style: disc;">Knowledge of healthcare finance is a plus.</li>
                </ul>
            </div>
            {{-- <p>If you are ready to contribute to a dynamic team and uphold the standards of {{ config('app.name') }}, we encourage you to send your resume and application to info@primecaredentalclinics.com and dentalclinicsprimecare@gmail.com by 12th/December/2023. Join us in delivering exceptional care to our valued customers.</p> --}}
        </div>
        <div class="row mt-5">
            <h2><i class="fa fa-list"></i> Position:</b> Front-desk Administrator</h2>
            <p><b>Reports to:</b> Operations Director</p>
            {{-- <p><b>Company site:</b> <a class="text-info">www.primecaredentalclinics.com</a></p> --}}
            <p><b>Job summary:</b></p>
            <p>{{ config('app.name') }} is in search of a friendly and efficient Front-desk Administrator to be the welcoming face of our clinic. If you thrive in a fast-paced environment, excel at multitasking, and have a passion for providing exceptional customer service, we want to meet you!</p>
            <div class="col-lg-6 col-md-6 vkjd mt-4">
                <p><b>Key responsibilities:</b></p>
                <ul>
                    <li style="list-style: disc;">Greet and assist patients in a courteous and professional manner.</li>
                    <li style="list-style: disc;">Manage appointment scheduling and confirmations.</li>
                    <li style="list-style: disc;">Handle patient inquiries and resolve any issues.</li>
                    <li style="list-style: disc;">Maintain patient records and ensure accuracy.</li>
                    <li style="list-style: disc;">Support claims management and the smooth flow of clinic operations.</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 vkjd mt-4">
                <p><b>Qualifications, Skills, and Experience:</b></p>
                <ul>
                    <li style="list-style: disc;">Strong interpersonal and communication skills.</li>
                    <li style="list-style: disc;">Exceptional organizational abilities.</li>
                    <li style="list-style: disc;">Previous experience in customer service or front-desk roles.</li>
                    <li style="list-style: disc;">Proficiency in office software and scheduling systems.</li>
                    <li style="list-style: disc;">Empathy and patience in dealing with patients.</li>
                    <li style="list-style: disc;">Experience in a dental clinic setting is an added advantage.</li>
                </ul>
            </div>
            <p>If you are ready to contribute to a dynamic team to deliver exceptional dental care to our valued customers and uphold the standards at {{ config('app.name') }}, we encourage you to send your resume and application to <b>{{ env('EMAIL_INFO') }}</b>.</p>
		</div>
		{{-- <div class="row">
			<div class="col-lg-12 col-md-6 vkjd">
				<p>{{ config('app.name') }} is an Equal Opportunity and Non-Discriminatory home, committed to providing equal employment opportunities to all individuals without regard to race, color, religion, sex, national origin, disability, age, genetic information, sexual orientation, gender identity, or any other protected characteristic as defined by applicable laws. The company prohibits discrimination and harassment in all aspects of employment, including recruitment, hiring, promotions, compensation, benefits, and training.</p><br>
				<p class="text-info"><i class="fa fa-info-circle"></i> We are hiring. If you've got what it takes, we want to work with you. Please find the form <a href="#form" class="text-warning text-bold"><b><u>here</u></b></a> and send us your application to get started.</p><br>
				<p><b>Professional Development and Training:</b> At {{ config('app.name') }}, we recognize the importance of continuous professional development and encourages employees to enhance their skills and knowledge. The company will provide opportunities for training, workshops, conferences, and other relevant educational activities to support career growth and personal development. Employees will be encouraged to attend relevant seminars, courses, and certification programs to stay updated with the latest advancements in the dental field.</p><br>
				<p><b>Performance Evaluation and Feedback:</b> We believe in fostering a culture of open communication and constructive feedback. Regular performance evaluations will be conducted to assess employee performance, identify areas for improvement, and recognize achievements. Managers will provide timely feedback and guidance to help employees develop their skills and meet their career goals. Performance evaluations will be based on clear and objective criteria, ensuring fairness and transparency.</p><br>
				<p><b>Career Advancement Opportunities:</b> We are committed to promoting internal growth and providing career advancement opportunities to deserving employees. Vacant positions will be first advertised internally to encourage internal mobility and career progression. The company will provide clear guidelines and criteria for promotion, ensuring fair and transparent selection processes. Additionally, employees will have access to mentorship programs and career counseling to help them identify and achieve their long-term career goals.</p><br>
				<p><b>Work-Life Balance:</b> We acknowledge the importance of maintaining a healthy work-life balance. The company will strive to provide flexible work arrangements whenever possible, such as remote work options, flexible scheduling, and family-friendly policies. By supporting employees' personal well-being, we aim to create a positive and productive work environment.</p><br>
				<p><b>Compensation and Benefits:</b> {{ config('app.name') }} is committed to providing competitive compensation and benefits packages to attract and retain top talent. Salaries will be benchmarked against industry standards, and employees will receive regular performance-based salary reviews. In addition to competitive pay, the company offers a comprehensive benefits package, including health insurance, retirement plans, paid time off, and other employee assistance programs.</p><br>
				<p><b>Employee Engagement and Recognition:</b> We recognize that engaged and motivated employees are key to the company's success. Regular employee engagement activities, team-building events, and social initiatives will be organized to foster a sense of community and collaboration among employees. The company implements employee recognition program to acknowledge and reward outstanding performance and contributions.</p><br>
				<p><b>Code of Conduct and Ethics:</b> We expect all employees to adhere to a code of conduct and ethics that upholds the highest standards of professionalism, integrity, and patient care. The company will provide clear guidelines on ethical practices and professional behavior to ensure the delivery of quality dental care and maintain patient trust.</p><br>
				<p><b>Health and Safety:</b> {{ config('app.name') }} is committed to providing a safe and healthy work environment for all employees. The company will comply with all applicable health and safety regulations and implement measures to prevent work-related injuries and illnesses. Regular training on safety protocols will be provided to employees, and necessary safety equipment will be provided to ensure a safe working environment.</p><br>
				<p><b>Continuous Improvement:</b> We recognize the importance of continuous improvement in providing quality dental care and maintaining a successful organization. Our company encourages employees to provide feedback and suggestions for improvement through regular channels. The feedback is used to implement positive changes, streamline processes, and enhance the overall employee experience.</p><br>
				<p>This career policy is designed to support employee growth, foster a positive work environment, and ensure equal opportunities for all. We are committed to implementing and upholding this policy to attract, develop, and retain talented professionals in the dental field.</p><br>
			</div>
		</div> --}}
		{{-- <div id="form" class="col-sm-12 mt-5 mb-5">
			<h2 style="font-size:18px">Application form</h2>
			<p>Please fill your details and submit the form and we shall contact you when you are short-listed.</p><br>
			<form action="{{ route('careers-submit') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="row">
					<div style="padding-top:10px;" class="col-sm-3"><label>Full name:</label></div>
					<div class="col-sm-8"><input name="name" type="text" placeholder="" class="form-control input-sm" required></div>
				</div>
				<div style="margin-top:10px;" class="row">
					<div style="padding-top:10px;" class="col-sm-3"><label>Email address:</label></div>
					<div class="col-sm-8"><input name="email" type="email" placeholder="" class="form-control input-sm" required></div>
				</div>
				<div style="margin-top:10px;" class="row">
					<div style="padding-top:10px;" class="col-sm-3"><label>Mobile number:</label></div>
					<div class="col-sm-8"><input name="phone" type="text" placeholder="" class="form-control input-sm" required></div>
				</div>
				<div style="margin-top:10px;" class="row">
					<div style="padding-top:10px;" class="col-sm-3"><label>Upload your CV, cover letter and academic transcripts (All in 1 PDF document):</label></div>
					<!-- <div class="col-sm-8"><input name="subject" type="text" placeholder="" class="form-control input-sm" required></div> -->
					<div class="col-sm-8"><input name="cv" type="file" class="form-control input-sm" required></div>
				</div>
				<div style="margin-top:10px;" class="row">
					<div style="padding-top:10px;" class="col-sm-3"><label>Your message:</label></div>
					<div class="col-sm-8">
						<textarea name="message" rows="5" placeholder="Something brief about you" class="form-control input-sm" required></textarea>
					</div>
				</div>
				<div style="margin-top:10px;" class="row">
					<div style="padding-top:10px;" class="col-sm-3"><label></label></div>
					<div class="col-sm-8">
						<button class="btn btn-danger btn-sm float-right">Submit</button>
					</div>
				</div>
			</form>
		</div> --}}
	</div>
</div>

@endsection
