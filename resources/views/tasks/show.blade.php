@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $task->title }}</h2>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p><strong>Category:</strong> {{ $task->categories->name }}</p>
    <p><strong>Tags:</strong>
        @foreach($task->tags as $tag)
            <span class="badge badge-primary">{{ $tag->name }}</span>
        @endforeach
    </p>

    <!-- Edit Button -->
    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-secondary">Edit</a>

    <!-- Delete Button -->
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
    </form>

    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to Task List</a>
</div>
@endsection
