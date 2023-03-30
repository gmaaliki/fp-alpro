<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|unique:User,name',
        //     'email' => 'required|between:8,12|confirimed',
        //     'password' => 'required|between:8,12|confirmed',
        // ],
        // [
        //     'name.required' => 'Name can\'t be empty!',
        //     'name.unique' => 'This name is already taken!',
        //     'email.required' => 'Email can\'t be empty!',
        //     'password.required' => 'Password can\'t be empty!',
        //     'password.between' => 'Password must be between 8 and 12 characters long',
        //     'password.confirmed' => 'Passwords do not match!',
        // ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            // 'email_verified_at' => date('Y-m-d H:i:s'),
        ]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
