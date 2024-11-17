@extends('layouts.app')

@section('content')
    <h1>Lista Sarcinilor</h1>
    
    <ul class="task-list">
        @foreach($tasks as $task)
            <li>
                <h3>{{ $task['title'] }}</h3>
                <p><strong>Description: </strong>{{ $task['description'] }}</p>
                <p><strong>Category: </strong>{{ $task->categories->name }}</p>
                <p><strong>Tags: </strong>
                @if($task->tags->isNotEmpty())
                @foreach ($task->tags as $tag)
                <span class="tag">{{ $tag->name }}</span>
                @endforeach
                @else
                <strong>There are no Tags.</strong>
                @endif

            </p>
            <a href={{ route('tasks.show', $task->id) }}>More Details</a>
            </li>
        @endforeach
    </ul>
@endsection
