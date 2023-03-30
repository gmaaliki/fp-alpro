<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string',
        ]);
        $account = DB::table('users')
                    ->where('name', $validatedData['username'])
                    ->first();
        if (!$account) {
            return back()->withErrors(['message' => 'Invalid username']);
        }
    
        $account_id = $account->user_id;
        return redirect()->route('home', [$account_id]);
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
    public function store(Request $request)
    {

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
    public function destroy(Tasklist $tasklist)
    {
        //
    }

    public function log(Request $request) {
        
    }
}
