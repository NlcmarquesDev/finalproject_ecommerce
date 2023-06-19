<?php

namespace App\Http\Controllers\Admin;

use App\Traits\Slugify;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::withTrashed()->paginate(10);
        $totalCategories = Category::count();
        return view('admin.categories.index', compact('categories', 'totalCategories'));
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
        Alert::success('Category created successfully');
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
        Alert::success('Category updated successfully');
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
        Alert::success('Category deleted successfully');
        return back()->with("status", $category->name . "Deleted");
    }
    public function categoryRestore($id)
    {
        $category = Category::onlyTrashed()
            ->where("id", $id)
            ->restore();
        Alert::info('Category restored successfully');
        return back()->with("status", "has been restored");
    }
}
