<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('post.index');
    }

    public function show(Request $request)
    {
        return view('post.show', ['post' => 'show']);
    }

    public function store(Request $request)
    {
        return view('post.show', ['post' => 'store']);
    }
}
