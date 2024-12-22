<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $faqs = Faq::with('translations')->paginate(10);
        return view('admin.faqs.index', compact('faqs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.faqs.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqRequest $request)
    {
        //
        $faqs = Faq::create($request->except( '_token'));



       return redirect()->route('admin.faqs.index')->with('success', __('messages.created'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
        return view('admin.faqs.edit', compact('faq'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        //
        return view('admin.faqs.edit', compact('faq'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        //
        $faq->update(attributes: $request->except('_token', '_method'));

        return redirect()->route('admin.faqs.index')->with('success', __('messages.updated'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        //
        $faq->delete();
        return redirect()->route('admin.faqs.index')->with('success', __('messages.deleted'));
    
    }
}
