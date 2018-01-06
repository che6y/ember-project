@extends('layouts.app')

@section('title', 'Abbakumova | About')

@section('content')
    <vue-page skills="{{ $skills }}" works="{{ $works }}" contact="{{ $contact }}"></vue-page>
@endsection
