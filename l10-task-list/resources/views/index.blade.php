@extends('layout.app')

@section('title', "The list of tasks")

@section('content')

    {{--@if (count($tasks))--}}
    <div> The titles of the tasks</div>
        @forelse($tasks as $task)
            <div>
                <a href ="{{ route('task.show', ['id' => $task->id])}}"> {{$task -> title}} </a>
            </div>
        @empty
            <div>There are no  tasks!</div>
        @endforelse

    {{--@endif--}}
    
@endsection