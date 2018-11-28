@extends('layout')
@section('title', 'Projects')
@section('content')
    <h1>{{ $project->title }}</h1>
    <p>
        {{ $project->description }}
    </p>
    <div><a href="/projects/{{ $project->id }}/edit">Edit project</a></div>

    @if($project->tasks->count())
        <div>
            @foreach($project->tasks as $task)
                <div>
                    <form method="post" action="/tasks/{{$task->id}}">
                    @method('PATCH')
                    @csrf
                        <input type="checkbox" name="completed" onclick="this.form.submit()">
                        {{$task->description}}
                    </form>
                </div>
            @endforeach
        </div>
    @endif
@endsection