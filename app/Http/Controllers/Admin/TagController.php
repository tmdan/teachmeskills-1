<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

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
        Tag::create($request->all());
        return redirect()->route('tags.index');
    }


    public function show(Tag $tag)
    {
        //
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', ['tag' => $tag]);
    }

    public function update(StoreTagRequest $request, Tag $tag)
    {
        $tag->title = $request->title;
        $tag->save();
        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
