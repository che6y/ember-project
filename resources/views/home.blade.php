@extends('layouts.app')

@if (Auth::check())
@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

    <table class="table table-bordered">

      <thead>
        <tr>
          <th>#</th>
          <th>Page</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>About me</td>
          <td>
            <a href="/skills"><button class="btn btn-outline-info btn-sm">Edit</button></a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Portfolio</td>
          <td>
            <a href="/works"><button class="btn btn-outline-info btn-sm">Edit</button></a>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Contact</td>
          <td>
            <a href="/edit-contact"><button class="btn btn-outline-info btn-sm">Edit</button></a>
          </td>
        </tr>
      </tbody>

    </table>

  </div>


</div>
@endsection
@endif
