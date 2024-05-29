@extends('layout.app')

@section('title', $task -> title)

@section('content')
    <p>{{$task -> description }} </p>


    @if($task -> long_description)
        <p>{{$task -> long_description}}</p>
    @endif

    <p>The Task is created at : {{$task -> created_at}}</p>
    <p>The Task is updated at : {{$task -> updated_at}}</p>
@endsection