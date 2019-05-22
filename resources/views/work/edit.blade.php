@extends('layouts.app')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

    <?php echo Breadcrumbs::render('work', $work); ?>

    <form method="POST" action="/update-work/{{ $work->id }}">

      {{ csrf_field() }}

      {{ method_field('PUT') }}

      <div class="form-group">
        <label for="exampleInputEmail1">Title</label><br />
        <input type="text" class="form-control" name="title" value="{{ $work->title }}">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Description</label><br />
        <textarea type="text" class="form-control" name="description" rows="5" cols="33">{{ $work->description }}</textarea>
      </div>

      <button type="submit" class="btn">Update</button>

    </form>

  </div>

</div>
@endsection
