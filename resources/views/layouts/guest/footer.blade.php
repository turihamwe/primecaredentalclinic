		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<h2>About Us</h2>
						<p>{{ config('app.name') }} is a leading provider of dental services, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.</p>
						<p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
						<p>&nbsp;</p><br>
					</div>
					<div class="col-md-4 col-sm-12">
						<h2>&nbsp;</h2>
						<ul class="list-unstyled link-list">
							<li><a ui-sref="about" href="{{ route('/') }}">Home</a><i class="fa fa-angle-right"></i></li>
							<li><a ui-sref="portfolio" href="{{ route('about') }}">About us</a><i class="fa fa-angle-right"></i></li>
							<li><a ui-sref="products" href="{{ route('services') }}">Services</a><i class="fa fa-angle-right"></i></li>
							<li><a ui-sref="gallery" href="{{ route('contact') }}">Contact us</a><i class="fa fa-angle-right"></i></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12 map-img">
						<h2>Contact Us</h2>
						<address class="md-margin-bottom-40">
							{{ env('ADDRESS_1') }}<br>
							{{ env('ADDRESS_2') }} <br>
							Phone 1: {{ env('PHONE_1') }} <br>
							Phone 2: {{ env('PHONE_2') }} <br>
							Email: <a href="mailto:{{ env('EMAIL_INFO') }}" class="text-info">{{ env('EMAIL_INFO') }}</a><br>
							Web: <a href="{{ config('app.url') }}" class="text-info">{{ config('app.url') }}</a>
						</address>
					</div>
				</div>
			</div>
		</footer>
		<div class="copy">
			<div class="container">
				<a>{{ date("Y") }} &copy; {{ config('app.name') }}. All Rights Reserved.</a>
				<span>
					<a href="{{ route('/') }}"><i class="fab fa-github"></i></a>
					<a href="{{ route('/') }}"><i class="fab fa-google-plus-g"></i></a>
					<a href="{{ route('/') }}"><i class="fab fa-pinterest-p"></i></a>
					<a href="{{ route('/') }}"><i class="fab fa-twitter"></i></a>
					<a href="{{ route('/') }}"><i class="fab fa-facebook-f"></i></a>
				</span>
			</div>
		</div>
	</body>
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
	<script src="{{ asset('plugins/testimonial/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
</html>