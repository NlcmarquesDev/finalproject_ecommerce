<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $faqs = Faq::withTrashed()->paginate(10);
        $totalFaqs = Faq::count();
        return view('admin.faq.index', compact('faqs', 'totalFaqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'question' => 'required|between:2,255',
        ]);
        Faq::create(["question" => $request->question, "answer" => $request->answer]);
        Alert::success('Faq Created Successfully');
        return redirect()->route("faq.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        //
        $faq = Faq::findOrFail($faq->id);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        //
        $faq->update($request->all());
        Alert::success('Faq updated Successfully');
        return redirect()->route("faq.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        //
        $faq->delete();
        Alert::warning('Faq deleted Successfully');
        return back();
    }
    public function faqRestore($id)
    {
        $faq = Faq::onlyTrashed()
            ->where("id", $id)
            ->restore();
        Alert::info('Faq Restored Successfully');
        return back();
    }
}
