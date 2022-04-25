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
        //
    }


    public function create(CreateTagRequest $request)
    {
        //
    }


    public function store(StoreTagRequest $request)
    {
        //
    }

    public function show(ShowTagRequest $request, Tag $tag)
    {
        //
    }


    public function edit(EditTagRequest $request, Tag $tag)
    {
        //
    }


    public function update(UpdateTagRequest $request, Tag $tag)
    {
        //
    }


    public function destroy(DestroyTagRequest $request, Tag $tag)
    {
        //
    }
}
