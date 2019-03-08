<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index() {
        return view('welcome');
    }

    public function articles() {
        $posts = \App\Post::all();
        return view('articles',array(
            'posts' => $posts
        ));
    }

    public function contact() {
        return view('contact');
    }

    public function store() {
        $contact = new \App\Contact();

        $contact->contact_name = request('name');
        $contact->contact_email = request('email');
        $contact->contact_message = request('message');

        $contact->save();

        return back();
    }
}
