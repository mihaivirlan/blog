<?php

namespace App\Http\Controllers;

use App\Model\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = (new Post())->getAll()->paginate(4);
        return view('home', ['posts' => $posts]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function admin()
    {
        $this->middleware('auth');
        if(!auth()->user()->is_admin) return redirect('/');
        return view('admin');
    }
}
