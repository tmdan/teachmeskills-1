<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\categories\CreateCategoryRequest;
use App\Http\Requests\Admin\categories\DestroyCategoryRequest;
use App\Http\Requests\Admin\categories\EditCategoryRequest;
use App\Http\Requests\Admin\categories\IndexCategoryRequest;
use App\Http\Requests\Admin\categories\ShowCategoryRequest;
use App\Http\Requests\Admin\categories\StoreCategoryRequest;
use App\Http\Requests\Admin\categories\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(IndexCategoryRequest $request)
    {
        $categories = Category::paginate(2);

        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateCategoryRequest $request)
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $request->validated();

        Category::create($request->all());

        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(ShowCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(EditCategoryRequest $request, Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, DestroyCategoryRequest $request)
    {
        $category->delete();
        return redirect()->route("admin.categories.index");
    }
}
