@extends('layouts.app')

@if (Auth::check())
@section('content')
<div class="container admin-container">

  <h2><a href="/adminka">Admin panel</a></h2>

  <div class="admin-container_items">
    <div class="admin-container_item">
      <h3><a href="/edit-about">About me</a></h3>
    </div>

    <div class="admin-container_item">
      <h3><a href="/works">Portfolio</a></h3>
    </div>

    <div class="admin-container_item">
      <h3><a href="/edit-contact">Contact</a></h3>
    </div>
  </div>

</div>
@endsection
@endif
