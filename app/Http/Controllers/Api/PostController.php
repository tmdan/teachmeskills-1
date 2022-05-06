<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Post\StorePostRequest;
use App\Http\Requests\Api\Post\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;


class PostController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::paginate(10));
    }


    public function store(StorePostRequest $request)
    {
        //
    }


    public function show(Post $post)
    {
        //
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
