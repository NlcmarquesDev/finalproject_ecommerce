<?php

namespace App\Http\Controllers\Admin;

use App\Models\color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $colors = Color::withTrashed()->paginate(10);
        return view('admin.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.colors.create');
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
        Color::create(["name" => $request->name, "code" => $request->code]);
        return redirect()->route("colors.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(color $colors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        return view("admin.colors.edit", [
            "color" => Color::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, color $color)
    {
        //
        $color->update($request->all());
        return redirect()
            ->route("colors.index")
            ->with("status", $color->name . " has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(color $color)
    {
        //
        $color->delete();
        return back()->with("status", $color->name . "Deleted");
    }
    public function colorRestore($id)
    {
        $color = Color::onlyTrashed()
            ->where("id", $id)
            ->restore();
        return back()->with("status", "has been restored");
    }
}
