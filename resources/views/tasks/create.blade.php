@extends('layouts.app')

@section('content')
    <h1 class="create">Creează o nouă sarcină</h1>

    <div class="create-task-container">
        <form action="{{ route('tasks.store') }}" method="POST">
            
            <label for="title">Titlu Sarcină:</label>
            <input type="text" id="title" name="title">

            <label for="description">Descriere:</label>
            <textarea id="description" name="description"></textarea>

            <button type="submit">Salvează Sarcina</button>
        </form>
    </div>
@endsection
