@extends('layouts.admin')

@if (Auth::check())
@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

      <div class="row">
        <div class="col-sm-1">#</div>
        <div class="col-sm-6">Page</div>
        <div class="col-sm-5">Action</div>
      </div>

      <div class="row">
          <div class="col-sm-1">1</div>
          <div class="col-sm-6">About me</div>
          <div class="col-sm-5">
            <a href="/skills"><button class="btn">Edit</button></a>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-1">2</div>
        <div class="col-sm-6">Portfolio</div>
        <div class="col-sm-5">
          <a href="/works"><button class="btn">Edit</button></a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-1">3</div>
        <div class="col-sm-6">Contact</div>
        <div class="col-sm-5">
          <a href="/contacts"><button class="btn">Edit</button></a>
        </div>
      </div>

  </div>


</div>
@endsection
@endif
