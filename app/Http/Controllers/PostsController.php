<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post_name) {
        $post = \App\Post::where('post_name',$post_name)->first();
        $comments = \App\Comment::where('post_id', $post->id)->latest()->limit(10)->get();

        return view('posts/single',array('post' => $post, 'comments' => $comments));
    }

    public function store() {
        $comment = new \App\Comment();
       
        $comment->post_id = request('id');
        $comment->comment_name = request('name');
        $comment->comment_email = request('email');
        $comment->comment_content = request('content');

        $comment->save();

        return back();
    }

}
