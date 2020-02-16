@extends('layouts.admin')

@if (Auth::check())
@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

    <?php echo Breadcrumbs::render('contact'); ?>

    <form method="POST" action="{{ route('contact-update') }}">

      {{ csrf_field() }}

      {{ method_field('PUT') }}

      @foreach( $contacts as $contact )
        <div class="form-group">
          <label for="my-email">$contact->name</label>
          <input type="text" class="form-control" name="" value="{{ $contact->name }}">
          <input type="text" class="form-control" name="" value="{{ $contact->value }}">
        </div>
      @endforeach

      <button type="submit" class="btn  ">Submit</button>

    </form>

  </div>

</div>
@endsection
@endif
