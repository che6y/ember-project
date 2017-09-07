@extends('layouts.app')

@section('content')
<div class="container admin-container">

  <h2><a href="/adminka">Admin panel</a> &#187; <small>edit</small> {{ $work->title }}</h2>

  <form method="POST" action="/works">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" value="{{ $work->title }}">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" name="description" value="{{ $work->description }}">
    </div>

    <button type="submit" class="btn btn-primary">Publish</button>

  </form>

</div>
@endsection
