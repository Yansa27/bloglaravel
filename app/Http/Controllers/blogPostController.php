<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;


class blogPostController extends Controller
{
    public function index() {
        return view('posts.index', [
            "title" => "Blog post",
            "post" => Post::all()
        ]);
    }

    public function show($slug) {
        return view('posts.show' , [
            "title" => "single post",
            "post" => Post::find($slug)
        ]);
    }
}
