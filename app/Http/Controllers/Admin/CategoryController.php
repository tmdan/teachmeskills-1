<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view("admin.categories.index", ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(StoreCategoryRequest $request)
    {
        //
    }


    public function show(Request $request, Category $category)
    {
        return view('test.index', [
            'category' => $category,
            'script' => "<script>alert('hello')</script>"
        ]);
    }


    public function edit(Category $category)
    {
        //
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back();
    }
}
