<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobTitleRequest;
use App\Models\JobTitle;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jobTitles = JobTitle::with('translations')->paginate(10);
        return view('admin.job_titles.index', compact('jobTitles'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.job_titles.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobTitleRequest $request)
    {
        //
                // Create a new Tag without translations
        $tag = JobTitle::create($request->all());

        return redirect()->route('admin.job_titles.index')->with('success', __('messages.job_title_created'));
   
    }

    /**
     * Display the specified resource.
     */
    public function show(JobTitle $jobTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobTitle $jobTitle)
    {
        //
        return view('admin.job_titles.edit', compact('jobTitle'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobTitleRequest $request, JobTitle $jobTitle)
    {
        //
        $jobTitle->update($request->except('_token', '_method')); 



        return redirect()->route('admin.job_titles.index')->with('success', __('messages.job_title_updated'));
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobTitle $jobTitle)
    {
        //
        $jobTitle->delete();
        return redirect()->route('admin.job_titles.index')->with('success', __('messages.job_title_deleted'));
    
    }
}
