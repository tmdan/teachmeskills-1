<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\tags\CreateTagRequest;
use App\Http\Requests\Admin\tags\DestroyTagRequest;
use App\Http\Requests\Admin\tags\EditTagRequest;
use App\Http\Requests\Admin\tags\IndexTagRequest;
use App\Http\Requests\Admin\tags\ShowTagRequest;
use App\Http\Requests\Admin\tags\StoreTagRequest;
use App\Http\Requests\Admin\tags\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(IndexTagRequest $request)
    {
        $tags = Tag::paginate(2);
        return view('admin.tags.index', ['tags' => $tags]);
    }

    public function create(CreateTagRequest $request)
    {
        return view('admin.tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        $request->validated();

        Tag::create($request->all());

        return redirect()->route('admin.tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag,ShowTagRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag, EditTagRequest $request)
    {
        return view('admin.tags.edit', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        return redirect()->route('admin.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag, DestroyTagRequest $request)
    {
        $tag->delete();
        return redirect()->route("admin.tags.index");
    }
}
