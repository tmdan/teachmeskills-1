<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EditCategoryRequest;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Models\Category;


class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.categories.index', ['categories' => Category::all()]);
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('admin.categories.index');
    }


    public function show( Category $category)
    {

        dd($category);

       // return view('admin.categories.show', ['category' => $category]);
    }


    public function edit(EditCategoryRequest $request, Category $category)
    {
        return view('admin.categories.edit');
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
       // return view('categories.update');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
