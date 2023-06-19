<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=post::where('posted','yes')->paginate(2);
        return view('web.blog.index',compact('posts'));
    }

    public function show(post $post)
    {
        return view('web.blog.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    
}

   
  
