@extends('layouts.app')

@if (Auth::check())
@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

      <div class="grid-row">
        <div>#</div>
        <div>Page</div>
        <div>Action</div>
      </div>

      <div class="grid-row">
          <div scope="row">1</div>
          <div>About me</div>
          <div>
            <a href="/skills"><button class="btn">Edit</button></a>
          </div>
      </div>
      <div class="grid-row">
        <div scope="row">2</div>
        <div>Portfolio</div>
        <div>
          <a href="/works"><button class="btn">Edit</button></a>
        </div>
      </div>
      <div class="grid-row">
        <div scope="row">3</div>
        <div>Contact</div>
        <div>
          <a href="/edit-contact"><button class="btn">Edit</button></a>
        </div>
      </div>

  </div>


</div>
@endsection
@endif
