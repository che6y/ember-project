@extends('layouts.app')

@section('title', 'Upload image')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__outlet">

    <?php echo Breadcrumbs::render('work', $work); ?>

    <form method="POST" action="/save-img/{{ $work->id }}" enctype="multipart/form-data">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="upload-img">Image</label>
        <input id="upload-img" type="file" class="form-control-file" name="file"></input>
      </div>

			@if(!empty($work->image))
					<div>
						<img src="/storage/{{ $work->image }}" alt="" class="img-thumbnail">
					</div>
			@endif

      <button type="submit" class="btn btn-outline-success btn-sm">Save image</button>

    </form>

    <form action="{{ url('/delete-image', ['id' => $work->id]) }}" method="POST" class="delete-image-form">

      {{ method_field('DELETE') }}

      {{ csrf_field() }}

      <button type="submit" class="btn btn-outline-danger btn-sm">Delete image</button>

    </form>

  </div>

</div>
@endsection
