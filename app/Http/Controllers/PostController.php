<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Doctrine\Inflector\Rules\French\Rules;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    function store(){
        $newPost = request()->validate([
           'title'=>'required',
           'slug'=>['required',Rule::unique('posts','slug')],
           'category_id'=>['required',Rule::exists('categories','id')],
            'content'=>'required|min:3'
        ]);

        $newPost['user_id'] = auth()->id();

        Post::create($newPost);

        return redirect('/');
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
