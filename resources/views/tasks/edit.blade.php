@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Task</h2>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Task Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('title', $task->title) }}" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $task->description) }}</textarea>
        </div>

        <!-- Category Selection -->
        <div class="form-group">
            <label for="category">Select Category</label>
            <select class="form-control" id="category" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $task->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tags Selection -->
        <div class="form-group">
            <label>Select Tags</label>
            <div>
                @foreach($tags as $tag)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="tag{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}"
                               {{ $task->tags->contains($tag->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
</div>
@endsection
