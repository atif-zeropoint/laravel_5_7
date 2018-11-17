@extends('layout')
@section('title', 'Projects')
@section('content')
    <h1>Update project</h1>
    <form action="/projects/{{ $project->id }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
            <input type="text" placeholder="My project" name="title" value="{{ $project->title }}">
        </div>

        <div>
            <textarea placeholder="My project description" name="description">{{ $project->description }}</textarea>
        </div>

        <div><button type="submit">Update project</button></div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        <div><button type="submit">Delete project</button></div>
    </form>
@endsection