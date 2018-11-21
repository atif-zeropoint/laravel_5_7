@extends('layout')
@section('title', 'Projects')
@section('content')
    <h1>{{ $project->title }}</h1>
    <p>
        {{ $project->description }}
    </p>
    <div><a href="/projects/{{ $project->id }}/edit">Edit project</a> </div>
@endsection