@extends('layouts.app')

@if (Auth::check())
@section('content')
<div class="container admin-container">

  <h2><a href="/adminka">Admin panel</a> &#187; portfolio</h2>

  <div class="admin-container_items">
  </div>

</div>
@endsection
@endif
