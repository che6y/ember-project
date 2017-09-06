@extends('layouts.app')

@section('content')
<div class="container admin-container">

  <h2><a href="/adminka">Admin panel</a> &#187; portfolio</h2>

	<a href="/works/create">Add new</a>

  <div class="admin-container_items">
    @foreach ($works as $work)
      <p>{{ $work->title }}</p>
    @endforeach
  </div>

</div>
@endsection
