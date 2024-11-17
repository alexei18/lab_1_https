@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a New Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <!-- Task Title (previously name) -->
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <!-- Category Selection -->
        <div class="form-group">
            <label for="category">Select Category</label>
            <select class="form-control" id="category" name="category_id" required>
                <option value="">Choose a Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tags Selection -->
        <div class="form-group">
            <label>Select Tags</label>
            <div>
                @foreach($tags as $tag)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="tag{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                        <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
</div>
@endsection
