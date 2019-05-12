@extends('layouts.app')

@section('content')
    <vue-page skills="{{ $skills }}" works="{{ $works }}"></vue-page>
@endsection
