<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\CreateTagRequest;
use App\Http\Requests\Tag\DestroyTagRequest;
use App\Http\Requests\Tag\EditTagRequest;
use App\Http\Requests\Tag\IndexTagRequest;
use App\Http\Requests\Tag\ShowTagRequest;
use App\Http\Requests\Tag\StoreTagRequest;
use App\Http\Requests\Tag\UpdateTagRequest;
use App\Models\Tag;

class TagController extends Controller
{

    public function index(IndexTagRequest $request)
    {
        $tags = Tag::all();

        return view('admin.tags.index', ['tags' => $tags]);
    }


    public function create(CreateTagRequest $request)
    {
        return view('admin.tags.create');
    }


    public function store(StoreTagRequest $request)
    {
        Tag::create($request->validated());

        return redirect()->route('admin.tags.index');
    }

    public function show(ShowTagRequest $request, Tag $tag)
    {
        //
    }


    public function edit(EditTagRequest $request, Tag $tag)
    {
        return view('admin.tags.edit', ['tag' => $tag]);
    }


    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());

        return redirect()->route('admin.tags.index');
    }


    public function destroy(DestroyTagRequest $request, Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index');
    }
}
