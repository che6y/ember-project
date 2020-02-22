@extends('layouts.admin')

@if (Auth::check())
@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

      <div class="grid-row-3">
        <div>#</div>
        <div>Page</div>
        <div>Action</div>
      </div>

      <div class="grid-row-3">
          <div class="col-sm-1">1</div>
          <div class="col-sm-6">About me</div>
          <div class="col-sm-5">
            <a href="/skills"><button class="btn">Edit</button></a>
          </div>
      </div>
      <div class="grid-row-3">
        <div>2</div>
        <div>Portfolio</div>
        <div>
          <a href="/works"><button class="btn">Edit</button></a>
        </div>
      </div>
      <div class="grid-row-3">
        <div>3</div>
        <div>Contact</div>
        <div>
          <a href="/contacts"><button class="btn">Edit</button></a>
        </div>
      </div>

  </div>


</div>
@endsection
@endif
