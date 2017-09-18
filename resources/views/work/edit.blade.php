@extends('layouts.app')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__outlet">

    <?php echo Breadcrumbs::render('work', $work); ?>

    <form method="POST" action="/update-work/{{ $work->id }}">

      {{ csrf_field() }}

      {{ method_field('PUT') }}

      <div class="form-group">
        <label for="edit-title">Title</label>
        <input id="edit-title" type="text" class="form-control" name="title" value="{{ $work->title }}">
      </div>

      <div class="form-group">
        <label for="edit-description">Description</label>
        <input id="edit-description" type="text" class="form-control" name="description" value="{{ $work->description }}">
      </div>

      <button type="submit" class="btn btn-outline-success btn-sm">Update</button>

    </form>

  </div>

</div>
@endsection
