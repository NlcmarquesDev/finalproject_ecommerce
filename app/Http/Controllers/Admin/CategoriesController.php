<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Traits\Slugify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::withTrashed()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name' => 'required|string|unique:categories|between:2,255',
        ]);
        $categories = new Category();
        $categories->slug = Slugify::slugify($request->name);
        $categories->name = $request->name;
        $categories->save();
        return view("admin.categories.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        return view("admin.categories.edit", [
            "category" => Category::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $category->update($request->all());
        return redirect()
            ->route("categories.index")
            ->with("status", $category->name . " has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with("status", $category->name . "Deleted");
    }
    public function categoryRestore($id)
    {
        $category = Category::onlyTrashed()
            ->where("id", $id)
            ->restore();
        return back()->with("status", "has been restored");
    }
}
