<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateTagRequest;
use App\Http\Requests\Admin\DestroyTagRequest;
use App\Http\Requests\Admin\EditTagRequest;
use App\Http\Requests\Admin\IndexTagRequest;
use App\Http\Requests\Admin\ShowTagRequest;
use App\Http\Requests\Admin\StoreTagRequest;
use App\Http\Requests\Admin\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

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
