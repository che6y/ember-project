@extends('layouts.app')

@section('content')
<div class="container admin-container">

  <h2><a href="/adminka">Admin panel</a> &#187; about me</h2>

  <div class="admin-container_items">
    @foreach ($skills as $skill)
      <p>{{ $skill->title }}</p>
    @endforeach
  </div>

</div>
@endsection
