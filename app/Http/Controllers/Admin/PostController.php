<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        return view('admin.posts.create', ['categories' => Category::all(), 'tags' => Tag::all()]);
    }


    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->validated());

        $post->tags()->sync($request->tags);

        return redirect()->back();
    }


    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post)
    {
        $post = $post->load(['tags', 'category']);

        return view('admin.posts.edit', ['categories' => Category::all(), 'tags' => Tag::all(), 'post' => $post]);
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        $post->tags()->sync($request->tags);

        return redirect()->back();
    }


    public function destroy(Post $post)
    {
        //
    }

    public function deleteImage(Post $post)
    {
        dd($post);
    }
}
