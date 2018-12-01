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
                    <form method="post" action="/completed-tasks/{{$task->id}}">
                        @if($task->completed)
                            @method('DELETE')
                        @endif
                        @csrf
                        <input type="checkbox" name="completed"
                               onclick="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                        {{$task->description}}
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    <div>
        <form method="post" action="/project/{{$project->id}}/task">
            @csrf
            <input type="text" name="description" value="">
            <div>
                <input type="submit" value="Add a task">
            </div>

        </form>
    </div>
    @include('errors')
@endsection