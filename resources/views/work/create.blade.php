@extends('layouts.app')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

    <?php echo Breadcrumbs::render('create-work'); ?>

    <form method="POST" action="/works">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" name="title">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" class="form-control" name="description">
      </div>

      <button type="submit" class="btn  ">Publish</button>

    </form>

  </div>

</div>
@endsection
