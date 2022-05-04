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
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.posts.create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function store(StorePostRequest $request, Post $post)
    {
        $post = Post::create($request->validated() + ['users_id' => 1]);
        $post->setCategory($request->get('category_id'));
        $post->setTags($request->get('tags'));
        return redirect()->route('admin.posts.index');
    }

    public function show(ShowPostRequest $request, Post $post)
    {
        //
    }

    public function edit(EditPostRequest $request, Post $post)
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $selectedTags = $post->tags->pluck('id')->all();
        return view('admin.posts.edit', ['post' => $post, 'categories' => $categories, 'tags' => $tags,
            'selectedTags' => $selectedTags]);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        $post->setCategory($request->get('category_id'));
        $post->setTags($request->get('tags'));
        return redirect()->route('admin.posts.index');
    }

    public function destroy(DestroyPostRequest $request, Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
