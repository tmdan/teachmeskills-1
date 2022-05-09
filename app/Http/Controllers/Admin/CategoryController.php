<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\IndexCategoryRequest;
use App\Http\Requests\Admin\Category\CreateCategoryRequest;
use App\Http\Requests\Admin\Category\StoreCategoryRequest;
use App\Http\Requests\Admin\Category\ShowCategoryRequest;
use App\Http\Requests\Admin\Category\EditCategoryRequest;
use App\Http\Requests\Admin\Category\UpdateCategoryRequest;
use App\Http\Requests\Admin\Category\DestroyCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(IndexCategoryRequest $request)
    {   $categories = Category::all();

        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create(CreateCategoryRequest $request)
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route("admin.categories.index");
    }

    public function show(ShowCategoryRequest $request, Category $category)
    {
        //
    }

    public function edit(EditCategoryRequest $request, Category $category)
    {
        return view('admin.categories.edit', ["category" => $category]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route("admin.categories.index");
    }

    public function destroy(DestroyCategoryRequest $request, Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
