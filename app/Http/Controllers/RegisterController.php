<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function create(){
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'username'=>'required|min:3|max:255|unique:users,username',
            'name'=>'required|min:3|max:255',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|min:7|max:255',
        ]);

        $attributes['role_id'] = 0;

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/');
    }
}
