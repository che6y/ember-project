@extends('layouts.app')

@if (Auth::check())
@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

    <?php echo Breadcrumbs::render('contact'); ?>

    <form method="POST" action="{{ route('contact-update') }}">

      {{ csrf_field() }}

      {{ method_field('PUT') }}

      <div class="form-group">
        <label for="my-email">Email</label>
        <input type="text" class="form-control" id="my-email" name="email" value="{{ $contact->email }}">
      </div>

      <div class="form-group">
        <label for="my-github">Github</label>
        <input type="text" class="form-control" id="my-github" name="github" value="{{ $contact->github }}">
      </div>

      <div class="form-group">
        <label for="my-codewars">Codewars</label>
        <input type="text" class="form-control" id="my-codewars" name="codewars" value="{{ $contact->codewars }}">
      </div>

      <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>

    </form>

  </div>

</div>
@endsection
@endif
