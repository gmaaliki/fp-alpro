<?php

namespace App\Http\Controllers;

use App\Models\Tasklist;
use Illuminate\Http\Request;

class TasklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($account_id)
    {
        $tasklists = Tasklist::all();
        return view('user.list', ['account_id' => $account_id, 'tasklists' => $tasklists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($account_id)
    {
        return view('user.createlist', ['account_id' => $account_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $account_id)
    {
        Tasklist::create([
            'tasklist_name' => $request->task_name,
            'tasklist_desc' => $request->task_desc,
            'user_id' => $account_id,
        ]);

        return redirect()->route('tasklist.index', ['account_id' => $account_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tasklist $tasklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tasklist $tasklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tasklist $tasklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasklist $tasklist, $account_id, $list_id)
    {
        $tasklist::where('tasklist_id', $list_id)->delete();
        return redirect()->back();
    }
}
