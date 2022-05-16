<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePostRequest;
use App\Http\Requests\Admin\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('tags', 'author')->get();
//        dd($posts->author->name);
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->validated());
        $post->tags()->attach($request->get('tags'));

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
