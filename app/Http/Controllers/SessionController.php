<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){

        return view('sessions.create',[
            'categories'=>Category::all()
        ]);
    }

    public function store(){
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(!auth()->attempt($attributes)){
            throw ValidationException::withMessages(['email','Your provided credentials could not be verified.']);
        }

        session()->regenerate();

        return redirect('/');

//        return back()
//            ->withInput()
//            ->withErrors(['email','Your provided credentials could not be verified.']);
    }
    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success','GoodBye');
    }
}
