@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
    <h2>{{ $task['title'] }}</h2>
    <p>{{ $task['description'] }}</p>
@endsection
