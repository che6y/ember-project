@extends('layouts.app')

@section('title', 'Edit skill')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__outlet">

    <?php echo Breadcrumbs::render('skill', $skill); ?>

    <form method="POST" action="/update-skill/{{ $skill->id }}">

      {{ csrf_field() }}

      {{ method_field('PUT') }}

      <div class="form-group">

        <div class="row">

          <div class="col-lg-6">
            <label for="skill-title">Title</label>
            <input type="text" class="form-control" id="skill-title" name="title" value="{{ $skill->title }}">
          </div>

          <div class="col-lg-6">
            <label for="skill-position">Position</label>
            <input type="number" class="form-control" id="skill-position" name="position" value="{{ $skill->position }}">
          </div>

        </div>

      </div>

      <button type="submit" class="btn btn-outline-success btn-sm">Update</button>

    </form>

  </div>

</div>
@endsection
