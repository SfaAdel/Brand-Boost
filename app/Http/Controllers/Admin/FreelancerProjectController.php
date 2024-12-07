<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FreelancerProjectRequest;
use App\Models\FreelancerProject;
use App\Models\FreelancerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreelancerProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $freelancerServices = FreelancerService::where('freelancer_id', Auth::guard('freelancer')->user()->id)->get();
        return view('front-end.dashboard.dashboard-talent-projects-new', compact('freelancerServices'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FreelancerProjectRequest $request)
    {
        //

        $videoName = null;
        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('images/'.Auth::guard('freelancer')->user()->name.'_projects_videos'), $videoName);
        }

        $projectImageName = null;
        if ($request->hasFile('image')) {
            $projectImageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/'.Auth::guard('freelancer')->user()->name.'_projects_images'), $projectImageName);
        }

        // Save property details
        $freelancerProject = FreelancerProject::create($request->except('image', 'video', '_token') + [
            'image' => $projectImageName,
            'video' => $videoName,
        ]);

   
        $freelancerId = Auth::guard('freelancer')->user()->id; 

        return redirect()->route('dashboard-talent-projects', $freelancerId)
        ->with('success', __('messages.project_created'));
}

    /**
     * Display the specified resource.
     */
    public function show(FreelancerProject $freelancerProject)
    {
        //
        return view('front-end.dashboard.dashboard-talent-projects-project', compact('freelancerProject'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FreelancerProject $freelancerProject)
    {
        //
        $freelancerServices = FreelancerService::where('freelancer_id', Auth::guard('freelancer')->user()->id)->get();

        return view('front-end.dashboard.dashboard-talent-projects-edit', compact('freelancerServices','freelancerProject'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FreelancerProjectRequest $request, FreelancerProject $freelancerProject)
    {
        //
         // Update the property details except for image, video, and banner
         $freelancerProject->update($request->except('image', 'video', '_token', '_method'));


        // Handle video update
        if ($request->hasFile('video')) {
            // Generate a new file name for the video
            $videoName = time() . '.' . $request->video->extension();
            // Move the video to the specified folder
            $request->video->move(('images/'.Auth::guard('freelancer')->user()->name.'_projects_videos'), $videoName);
            // Update the video field in the database
            $freelancerProject->update(['video' => $videoName]);
        }

        // Handle banner update
        if ($request->hasFile('image')) {
            // Generate a new file name for the banner
            $imageName = time() . '.' . $request->image->extension();
            // Move the banner image to the specified folder
            $request->image->move(('images/'.Auth::guard('freelancer')->user()->name.'_projects_images'), $imageName);
            // Update the banner field in the database
            $freelancerProject->update(['image' => $imageName]);
        }


        $freelancerId = Auth::guard('freelancer')->user()->id; 


        return redirect()->route('dashboard-talent-projects', $freelancerId)
        ->with('success', __('messages.project_updated'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FreelancerProject $freelancerProject)
    {
        //

        $freelancerProject->delete();
    
        return redirect()->back()->with('success', 'Project deleted successfully.');
    
    }
}
