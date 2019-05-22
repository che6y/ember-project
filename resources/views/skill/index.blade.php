@extends('layouts.app')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__output">

    <?php echo Breadcrumbs::render('skills'); ?>

      <div>
        <a href="/skills/create">
          <button type="button" name="button" class="btn btn-outline-secondary btn-sm">
            Add new
          </button>
        </a>
      </div>

      <table class="table table-bordered">

        <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Position in list</th>
          <th>Action</th>
        </tr>
        </thead>

        <tbody>

        @for ($i=0; $i<count($skills); ++$i)
          <tr>
            <th scope="row">{{ $i+1 }}</th>
            <td>{{ $skills[$i]->title }}</td>
            <td>{{ $skills[$i]->position }}</td>
            <td>
              <a href="/skills/edit/{{ $skills[$i]->id }}" class="edit-button"><button class="btn  ">Edit</button></a>
              <form action="{{ url('/delete-skill', ['id' => $skills[$i]->id]) }}" method="POST" class="delete-form">

                {{ method_field('DELETE') }}

                {{ csrf_field() }}

                <button type="submit" class="btn  ">Delete</button>

              </form>
            </td>
          </tr>
        @endfor

        </tbody>
      </table>

  </div>

</div>
@endsection
