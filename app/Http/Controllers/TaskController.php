<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {   
        $tasks = Task::all();

        return view('task', compact('tasks'));
    }

    public function store(TaskRequest $request)
    {
        $tasks = new Task();
        $tasks->name = $request->name;
        $tasks->save();

        return redirect()->route('task.index')->with('success', 'Add task successfully');
    }

    public function destroy(Task $task) 
    {
        $task->delete();

        return redirect()->route('task.index')->with('success', 'Delete task successfully');
    }
}
