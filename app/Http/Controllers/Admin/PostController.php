<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\CreatePostRequest;
use App\Http\Requests\Admin\Post\DestroyPostRequest;
use App\Http\Requests\Admin\Post\EditPostRequest;
use App\Http\Requests\Admin\Post\IndexPostRequest;
use App\Http\Requests\Admin\Post\ShowPostRequest;
use App\Http\Requests\Admin\Post\StorePostRequest;
use App\Http\Requests\Admin\Post\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(IndexPostRequest $request)
    {
        $posts = Post::all();

        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create(CreatePostRequest $request)
    {
        $tags = Tag::pluck('title', 'id') -> all();
        $categories = Category::pluck('title', 'id') -> all();
        return view('admin.posts.create', compact('categories','tags'));
    }

    public function store(StorePostRequest $request, Post $post)
    {
        Post::create($request->validated());
        return redirect()->route('admin.posts.index');
    }

    public function show(ShowPostRequest $request, Post $post)
    {
        //
    }

    public function edit(EditPostRequest $request, Post $post)
    {
        //
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    public function destroy(DestroyPostRequest $request, Post $post)
    {
        //
    }
}
