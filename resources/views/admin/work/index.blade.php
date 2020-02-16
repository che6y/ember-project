@extends('layouts.admin')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

    <?php echo Breadcrumbs::render('works'); ?>

    <div class="add-new-item">
        <a href="/works/create">
            <button type="button" name="button">Add new</button>
        </a>
    </div>

    <div class="grid-row-3">
        <div>#</div>
        <div>Title</div>
        <div>Action</div>
    </div>

    @for ( $i = 0; $i < count($works); ++$i )
    <div class="grid-row-3">
      <div>{{ $i+1 }}</div>
      <div>{{ $works[$i]->title }}</div>
      <div>
        <a href="/works/edit/{{ $works[$i]->id }}" class="edit-button"><button class="btn  ">Edit</button></a>
        <form action="{{ url('/delete-work', ['id' => $works[$i]->id]) }}" method="POST" class="delete-form">

            {{ method_field('DELETE') }}

            {{ csrf_field() }}

            <button type="submit" class="btn  ">Delete</button>

        </form>
      </div>
    </div>
    @endfor

  </div>


</div>
@endsection
