@extends('layout')
@section('title', 'Laracasts')
@section('content')
    <h1>Hey welcome home - {{$foo}}!!!</h1>
    <h2>{{$title}}</h2>
    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>

@endsection