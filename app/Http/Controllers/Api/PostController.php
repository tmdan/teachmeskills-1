<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\posts\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->validated() + ['category_id' => $request->get('category_id')]);

        $post->tags()->sync($request->get('tags'));

        return $post;
    }


    public function show(Post $post)
    {
        //return new PostResource(Post::with('author')->with('category')->with('comments')->findOrFail($id));
        //return new PostResource(Post::findOrFail($id));
        return new PostResource($post);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
