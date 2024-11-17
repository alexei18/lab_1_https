<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // List of tasks
    public function index()
    {
        $tasks = Task::with('categories', 'tags')->get();
        return view('tasks.index', compact('tasks'));
    }

    // Show a single task
    public function show($id)
    {
        $task = Task::with('categories', 'tags')->findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    // Create a new task form
    public function create()
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('tasks.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        'tags' => 'array',
        'tags.*' => 'exists:tags,id'
    ]);

    $task = Task::create([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'category_id' => $validated['category_id'],
    ]);

    if (!empty($validated['tags'])) {
        $task->tags()->sync($validated['tags']);
    }

    return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
}


    public function edit($id)
    {
        $task = Task::with('tags')->findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('tasks.edit', compact('task', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255', // Correct field name 'title'
        'description' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        'tags' => 'array',
        'tags.*' => 'exists:tags,id'
    ]);

    $task = Task::findOrFail($id);

    // Update the task
    $task->update([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'category_id' => $validated['category_id'],
    ]);

    if (!empty($validated['tags'])) {
            $task->tags()->sync($validated['tags']);
    } else {
        $task->tags()->detach();
    }

    return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
}


    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->tags()->detach();
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}