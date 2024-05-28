<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('admin.dashboard', ['tasks' => $tasks, 'title' => 'Dashboard']);
    }

    public function store(Request $request){
        $request->validate(['task' => 'required']);
        Task::create(['task' => $request->task, 'tanggal' => now()]);
        return redirect()->route('admin.dashboard');
    }

    public function showTask($id) {
        $task = Task::findOrFail($id);
        return view('admin.task', ['task' => $task]);
    }

    public function deleteTask($id){
        Task::where('id', $id)->delete();
        return redirect()->route('admin.dashboard');
    }
}
