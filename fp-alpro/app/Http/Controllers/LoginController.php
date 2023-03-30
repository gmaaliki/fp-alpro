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
        return redirect()->route('tasklist.index', [$account_id]);
    }
}
