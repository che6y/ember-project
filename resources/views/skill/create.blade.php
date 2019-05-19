@extends('layouts.app')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

    <?php //echo Breadcrumbs::render('create-skill'); ?>

    <form method="POST" action="/skills">

      {{ csrf_field() }}

      <div class="form-group">

        <div class="row">

          <div class="col-lg-6">
            <label for="skill-title">Title</label>
            <input type="text" class="form-control" id="skill-title" name="title">
          </div>

          <div class="col-lg-6">
            <label for="skill-position">Position</label>
            <input type="number" class="form-control" id="skill-position" name="position">
          </div>

        </div>

      </div>

      <button type="submit" class="btn btn-outline-success btn-sm">Publish</button>

    </form>

  </div>

</div>
@endsection
