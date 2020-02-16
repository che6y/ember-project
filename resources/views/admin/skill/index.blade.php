@extends('layouts.admin')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

    <?php echo Breadcrumbs::render('skills'); ?>

      <div class="add-new-item">
        <a href="/skills/create">
          <button type="button" name="button" class="btn">
            Add new
          </button>
        </a>
      </div>

      <div class="grid-row-4">
        <div>#</div>
        <div>Title</div>
        <div>Position</div>
        <div>Action</div>
      </div>
      @for ( $i = 0; $i < count( $skills ); ++$i )
      <div class="grid-row-4">
          <div>{{ $i }}</div>
          <div>{{ $skills[$i]->title }}</div>
          <div>{{ $skills[$i]->position }}</div>
          <div>
            <a href="/skills/edit/{{ $skills[$i]->id }}" class="edit-button"><button class="btn  ">Edit</button></a>
            <form action="{{ url('/delete-skill', ['id' => $skills[$i]->id]) }}" method="POST" class="delete-form">
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
