<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name) {
        $user = \App\User::where('name',$name)->first();

        return view('user',array('user' => $user));
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'confirmed'
        ]);

        $user = \App\User::where('id',request('id'))->first();

        $user->name = request('name');
        $user->email = request('email');

        if (request('password') != "") {
            $user->password = request('password');
        }

        $user->save();

        return view("/home");
    }
}
