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
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect()->route('task.store')->with('message', trans('task.addTaskSuccess'));
    }
}
