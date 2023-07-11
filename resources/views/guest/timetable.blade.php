@extends('layouts.guest')
@section('content')
@section('title', $title)

<style>
	tr:nth-child(odd){
    	background-color: rgb(190, 246, 197);
    }
   tr:nth-child(even){
    	background-color: rgb(135, 210, 115);
    }
    th{
       background-color: #00a026;
    }
</style>

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
		<div class="row">
			<div class="col-lg-12 col-md-6 vkjd">
				{{-- <h2 class="text-center">Our core values</h2> --}}
				{{-- <p>We cater to the following insurance services;</p><br> --}}
				<table border="" class="table table-striped">
					<thead class="text-white">
						<th>Day</th>
						<th>Doctor</th>
						<th>Doctor</th>
						<th>Doctor</th>
					</thead>
					<tbody>
						<tr>
							<td>Monday</td>
							<td>Dr. Namatovu Rosen</td>
							<td>Dr. Peter Muthon</td>
							<td>Dr. Muhumuza Innocent</td>
						</tr>
						<tr>
							<td>Tuesday</td>
							<td>Dr. Namatovu Rosen</td>
							<td>Dr. Peter Muthon</td>
							<td>Dr. Muhumuza Innocent</td>
						</tr>
						<tr>
							<td>Wednesday</td>
							<td>Dr. Namatovu Rosen</td>
							<td>Dr. Peter Muthon</td>
							<td></td>
						</tr>
						<tr>
							<td>Thursday</td>
							<td>Dr. Namatovu Rosen</td>
							<td>Dr. Peter Muthon</td>
							<td>Dr. Muhumuza Innocent</td>
						</tr>
						<tr>
							<td>Friday</td>
							<td>Dr. Namatovu Rosen</td>
							<td></td>
							<td>Dr. Muhumuza Innocent</td>
						</tr>
						<tr>
							<td>Saturday</td>
							<td>Dr. Namatovu Rosen</td>
							<td>Dr. Peter Muthon</td>
							<td>Dr. Muhumuza Innocent</td>
						</tr>
						<tr>
							<td>Sunday</td>
							<td></td>
							<td>Dr. Peter Muthon</td>
							<td>Dr. Muhumuza Innocent</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
