<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{

    public function store(Post $post){
        request()->validate([
            'message'=>'required'
        ]);


        Comment::create([
            'user_id'=> auth()->user()->id,
            'post_id'=> $post->id,
            'body'=> request('message')
        ]);

        return back();
    }
}
