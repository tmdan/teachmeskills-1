<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Http\Controllers\Controller;


class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', ['tags' => $tags]);
    }


    public function create()
    {
        return view('admin.tags.create');
    }


    public function store(StoreTagRequest $request)
    {
        Tag::create($request->validated());
        return redirect()->route('admin.tags.index');
    }


    public function show(Tag $tag)
    {
        //
    }


    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', ['tag' => $tag]);
    }


    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        return redirect()->route('admin.tags.index');
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index');
    }
}
