<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); 
        return view('dashboard.admin.pages.tasks.task');;
    }

    public function create()
    {
        $users = User::all()->filter(function($user){
            return in_array($user->role, ['employee', 'volunteer']);
        });
        return view('dashboard.admin.pages.Tasks.create',compact('users'));
    }    

    public function store(Request $request)
    {
        Log::debug($request->all());
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
        $assigneeIds = $request->input('assigned_workers', []); // Assuming the input field name is 'assigned_workers'
        $task->assignees()->attach($assigneeIds);
    
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

