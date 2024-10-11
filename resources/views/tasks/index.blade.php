@extends('layouts.app')

@section('content')
    <h1>Lista Sarcinilor</h1>
    
    <ul class="task-list">
        @foreach($tasks as $task)
            <li>
                <h3>{{ $task['title'] }}</h3>
                <p>{{ $task['description'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection
