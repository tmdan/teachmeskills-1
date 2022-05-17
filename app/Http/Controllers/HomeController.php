<?php

namespace App\Http\Controllers;

use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
       return view('pages.index', ['posts' => Post::with(['author', 'category'])->paginate(10)]);
    }
}
