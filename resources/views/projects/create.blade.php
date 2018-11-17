@extends('layout')
@section('title', 'Projects')
@section('content')
    <h1>Create a new project</h1>
    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" placeholder="My project" name="title">
        </div>

        <div>
            <textarea placeholder="My project description" name="description"></textarea>
        </div>

        <div><button type="submit">Create project</button></div>
    </form>
@endsection