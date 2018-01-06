@extends('layouts.app')

@section('title', 'Create work')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__outlet">

    <?php echo Breadcrumbs::render('create-work'); ?>

    <form method="POST" action="/works">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="create-title">Title</label>
        <input id="create-title" type="text" class="form-control" name="title">
      </div>

      <div class="form-group">
        <label for="create-description">Description</label>
        <input id="create-description" type="text" class="form-control" name="description">
      </div>

      <button type="submit" class="btn btn-outline-success btn-sm">Publish</button>

    </form>

  </div>

</div>
@endsection

@section('pagescript')
  <script src="/ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('description',{
        language: 'ru',
        uiColor: '#9da5b3'
    });
  </script>
@stop
