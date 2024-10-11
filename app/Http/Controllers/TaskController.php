<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // List of tasks
    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => 'Task 1', 'description' => 'This is task 1'],
            ['id' => 2, 'title' => 'Task 2', 'description' => 'This is task 2'],
        ];
        return view('tasks.index', compact('tasks'));
    }

    // Show a single task
    public function show($id)
    {
        $task = [
            'id' => $id,
            'title' => 'Task ' . $id,
            'description' => 'This is the description for task ' . $id,
        ];
        return view('tasks.show', compact('task'));
    }

    // Create a new task form
    public function create()
    {
        return view('tasks.create');
    }

    // Store a new task
    public function store(Request $request)
    {
        // Logic to store the task
    }

    // Edit an existing task
    public function edit($id)
    {
        // For now, return empty view
        return view('tasks.edit');
    }

    // Update the task
    public function update(Request $request, $id)
    {
        // Logic to update the task
    }

    // Delete a task
    public function destroy($id)
    {
        // Logic to delete the task
    }

    
}
