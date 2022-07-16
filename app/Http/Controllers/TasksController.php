<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index() {
        return view('tasks.index')->with('tasks', Task::all());
    }

    public function show($taskId) {
        $task = Task::find($taskId);
        return view('tasks.show')->with('task', $task);
    }

    public function create() {
        return view('tasks.create');
    }

    public function store() {
        $this->validate(request(), [
            'name' => 'required|min:6|max:20|unique:tasks',
            'description' => 'required'
        ]);
        $data = request()->all();
        $task = new Task();
        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->completed = false;
        $task->save();
        return redirect('/tasks');
    }

    public function edit($taskId) {
        $task = Task::find($taskId);
        return view('/tasks.edit')->with('task', $task);
    }

    public function update($taskId) {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);
        $data = request()->all();
        $task = Task::find($taskId);
        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->save();
        return redirect('/tasks');
    }

    public function destroy($taskId) {
        $task = Task::find($taskId);
        $task->delete();
        return redirect('/tasks');
    }

    public function complete($taskId) {
        $task = Task::find($taskId);
        $task->completed = true;
        $task->save();
        return redirect('/tasks');
    }
}
