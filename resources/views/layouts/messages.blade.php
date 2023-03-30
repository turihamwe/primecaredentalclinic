@if(count($errors) > 0)
	@foreach ($errors->all() as $error)
		<div class="alert alert-danger alert-dismissable text-center col-md-12 col-md-offset-4">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			{{ $error }}
		</div>
	@endforeach
@endif

@if (session('success'))
	<div class="alert alert-success alert-dismissable text-center col-md-12 col-md-offset-4">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{{ session('success') }}
	</div>
@endif

@if (session('error'))
	<div class="alert alert-danger alert-dismissable text-center col-md-12 col-md-offset-4">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{{ session('error') }}
	</div>
@endif