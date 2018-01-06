@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div class="container admin-container">

  @include('layouts.aheader')

  <div class="admin-container__outlet">

    <?php echo Breadcrumbs::render('skills'); ?>

      <p>
        <a href="/skills/create"><button type="button" name="button" class="btn btn-outline-info btn-sm">Add new</button></a>
        <a href="/adminka"><button type="button" name="button" class="btn btn-outline-secondary btn-sm">Back</button></a>
      </p>


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
              <a href="/skills/edit/{{ $skills[$i]->id }}" class="edit-button"><button class="btn btn-outline-info btn-sm">Edit</button></a>
              <form action="{{ url('/delete-skill', ['id' => $skills[$i]->id]) }}" method="POST" class="delete-form">

                {{ method_field('DELETE') }}

                {{ csrf_field() }}

                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>

              </form>
            </td>
          </tr>
        @endfor

        </tbody>
      </table>

  </div>

</div>
@endsection
