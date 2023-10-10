<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Validate the form data for task creation
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);
    
        // Create a new task
        $task = new Task([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);
    
        // Save the task to the database
        $task->save();
    
        // Attach workers to the task (assuming you have worker IDs from the form)
        $workerIds = $request->input('assigned_workers', []); // Assuming the input field name is 'assigned_workers'
        $task->workers()->attach($workerIds);
    
        return redirect('/tasks')->with('success', 'Task created successfully');
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
{
    // Validate the form data for task update
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable',
    ]);

    // Find the task by ID
    $task = Task::findOrFail($id);

    // Update task details
    $task->update([
        'title' => $validatedData['title'],
        'description' => $validatedData['description'],
    ]);

    // Attach workers to the task
    $attachWorkers = $request->input('attach_workers', []);
    $task->workers()->attach($attachWorkers);

    // Detach workers from the task
    $detachWorkers = $request->input('detach_workers', []);
    $task->workers()->detach($detachWorkers);

    // Sync workers for the task (removes existing and adds new)
    $syncWorkers = $request->input('sync_workers', []);
    $task->workers()->sync($syncWorkers);

    return redirect('/tasks')->with('success', 'Task updated successfully');
}

public function markAsComplete($id)
{
    $task = Task::findOrFail($id);
    $task->update(['completed' => true]);

    return redirect('/tasks')->with('success', 'Task marked as complete');
}
    public function destroy($id)
    {
        // Delete the task
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/tasks')->with('success', 'Task deleted successfully');
    }
}

