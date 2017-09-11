@extends('layouts.app')

@section('content')
    <vue-page skills="{{ $skills }}" works="{{ $works }}" contact="{{ $contact }}"></vue-page>
@endsection
