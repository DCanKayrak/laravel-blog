<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){


        return view('posts',[
            'posts'=> Post::latest()->get()
        ]);
    }

    function show(Post $post){

        return view('post',[
            'post'=> $post
        ]);
    }

    function getWithUser(User $user){
        return view('posts',[
            'posts'=> $user->posts()->get()
        ]);
    }

    function getWithCategory(Category $category){

        return view('posts',[
            'posts'=> $category->posts()->get()
        ]);
    }
}
