<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeroSectionRequest;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $heroSections = HeroSection::latest()->paginate(10);
        return view('admin.hero_sections.index', compact('heroSections'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.hero_sections.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeroSectionRequest $request)
    {
        //
        $heroSection = HeroSection::create($request->except('_token'));

        return redirect()->route('admin.hero_sections.index')->with('success', __('messages.created'));
   
    }

    /**
     * Display the specified resource.
     */
    public function show(HeroSection $heroSection)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( HeroSection  $heroSection)
    {
        //
        return view('admin.hero_sections.edit', compact('heroSection'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( HeroSectionRequest $request, HeroSection $heroSection)
    {
        //
        $heroSection->update($request->except('_token', '_method')); 



        return redirect()->route('admin.hero_sections.index')->with('success', __('messages.updated'));
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $heroSection)
    {
        //
        $heroSection->delete();
        return redirect()->route('admin.hero_sections.index')->with('success', __('messages.deleted'));
    
    }
}
