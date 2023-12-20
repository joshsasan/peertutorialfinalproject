<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function use()
    {
        $use = User::orderBy('id')->get();

        return view('User.index',['users' => $use]);
    }
    public function create(){
        return view('User.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required', // Add any additional validation rules as needed
            'full_name' => 'required',
            'email' => 'required|email',
        ]);
    
        User::create([
            'username' => $request->username,
            'full_name' => $request->full_name,
            'email' => $request->email,
        ]);
        return redirect('/user')->with('message', 'A new user has been added');
}
}