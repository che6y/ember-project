@extends('layouts.app')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__outlet">

    <?php echo Breadcrumbs::render('about'); ?>

    @foreach ($skills as $skill)
      <input class="form-control" type="text" value="{{ $skill->title }}">
      <br>
    @endforeach

  </div>

</div>
@endsection
