<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Post::all();
        return view('admin/main', array('posts' => $posts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'name' => 'required|max:15',
        ]);

        $post = \App\Post::create([
            'post_title' => $request->title,
            'post_content' => $request->content,
            'post_author' => '1',
            'post_name' => $request->name,
            ]);

        return redirect('admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \App\Post::where('post_name',$id)->first();
        return view('admin/show', array('post' => $post));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = \App\Post::where('post_name',$id)->first();
        return view('admin/edit', array('post' => $post));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'name' => 'required|max:15',
        ]);

        $post = \App\Post::where('post_name',$id)->first();

        $post->post_title = $request->title;
        $post->post_content = $request->content;
        $post->post_name = $request->name;
        $post->save();

        return redirect('admin/articles');
        // return redirect('admin/show', array('post' => $post));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = \App\Post::where('post_name',$id)->first();

        $post->delete();

        return redirect('admin/articles');
    }
}
