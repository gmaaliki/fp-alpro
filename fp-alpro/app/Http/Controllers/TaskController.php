<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($account_id, $list_id)
    {
        $tasks = Task::all();
        return view('user.home', ['account_id' => $account_id, 'list_id' => $list_id, 'tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $account_id, $list_id)
    {
        Task::create([
            'task_name' => $request->task_name,
            'task_status' => 'ongoing',
            'tasklist_id' => $list_id,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function showTasks(Task $task)
    {
        $tasks = DB::table('tasks')->get();
        return view('tasks', ['tasks' => $tasks]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($task_id)
    {
        $task = Task::findOrFail($task_id);
        
        $task->task_status = $task->task_status === 'ongoing' ? 'finished' : 'ongoing';
        
        $task->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task, $account_id, $list_id, $task_id)
    {
        $task::where('task_id', $task_id)->delete();
        return redirect()->route('task.index', ['account_id' => $account_id, 'list_id' => $list_id]);
    }
    public function destroyall($account_id, $list_id)
    {
        DB::table('users')->where('user_id', $account_id)->delete();
        return redirect()->back();
    }
}
