@extends('layout')

@section('content')

	<div class="row">
		<div class="col-md-3">
			<h1>{{ $flyer->street }}</h1>
			<h2>{{ $flyer->price }}</h2>
			<hr>
			<div class="description">{!!  nl2br($flyer->description) !!}</div>
		</div>
		<div class="col-md-9">

			@foreach ($flyer->photos as $photo)
				<img src="{{ $photo->path }}" alt="">
			@endforeach

		</div>
	</div>

	<hr>
	<h2>Add Your Photos</h2>
	
	<!-- {{ $flyer->zip }}/  -->
	<!-- store_photo_path -->
	<form id="addPhotosForm" 
		action="{{ route('store_photo_path', [$flyer->street]) }}" 
		method="POST" class="dropzone"
	>
		{{ csrf_field() }}
	</form>

@stop
@section('scripts.footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
	<script>
		dropzone.options.addPhotosForm = {
			ParamName 		: 'photo',
			maxFilesize		: 3,
			acceptedFiles	:'.jbg, .png, .jpeg'
		}
	</script>
@stop
