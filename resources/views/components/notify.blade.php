@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert text-danger">
	{{ $error }}
</div>
@endforeach
@endif
