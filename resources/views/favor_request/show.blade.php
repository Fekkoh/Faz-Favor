@extends('layouts.outer')

@section('content')


    <h3>{{ $favor_request->title }}</h3>
    <p>{{ $favor_request->description }}</p>
    {{-- <p>{{ $favor_request -> area -> name }}</p> --}}
    <p>{{ $favor_request->date }}</p>
    <p>{{ $favor_request->hour }}</p>
@endsection

