<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\DestroyCategoryRequest;
use App\Http\Requests\Category\EditCategoryRequest;
use App\Http\Requests\Category\IndexCategoryRequest;
use App\Http\Requests\Category\ShowCategoryRequest;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index(IndexCategoryRequest $request)
    {
        $categories = Category::all();

        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create(CreateCategoryRequest $request)
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('admin.categories.index');
    }

    public function show(ShowCategoryRequest $request, Category $category)
    {
        //
    }

    public function edit(EditCategoryRequest $request, Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('admin.categories.index');
    }

    public function destroy(DestroyCategoryRequest $request, Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
