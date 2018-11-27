@extends('layout')
@section('title', 'Projects')
@section('content')
    <h1>{{ $project->title }}</h1>
    <p>
        {{ $project->description }}
    </p>
    <div><a href="/projects/{{ $project->id }}/edit">Edit project</a> </div>

    @if($project->tasks->count())
    <div>
        <ul>
            @foreach($project->tasks as $task)
                <li>{{$task->description}}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection