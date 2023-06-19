<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hastag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class HastagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hastags = Hastag::withTrashed()->paginate(10);
        // $totalHatags = Hastag::count();
        // return view('admin.hastags.index', compact('hastags', 'totalHatags'));
        return view('admin.hastags.index', compact('hastags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.hastags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name' => 'required|between:2,255',
        ]);
        hastag::create(["name" => $request->name]);
        Alert::success('hastag Created Successfully');
        return redirect()->route("hastags.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $hastag = Hastag::findOrFail($id);
        return view("admin.hastags.edit", compact('hastag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hastag $hastag)
    {
        //
        $hastag->update($request->all());
        Alert::success('hastag updated Successfully');
        return redirect()
            ->route("hastags.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hastag $hastag)
    {
        //
        $hastag->delete();
        Alert::warning('Hastag deleted Successfully');
        return back();
    }
    public function hastagRestore($id)
    {
        $hastag = Hastag::onlyTrashed()
            ->where("id", $id)
            ->restore();
        Alert::info('Hastag Restored Successfully');
        return back();
    }
}
