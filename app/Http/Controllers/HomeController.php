<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();

        return view('pages.index', [
            'posts' => $posts,
            'tags'  => $tags,
        ]);
    }


    public function show($id)
    {
        //
    }


}
