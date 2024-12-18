<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $videos = Video::latest()->paginate(10);
            
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.videos.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideoRequest $request)
    {
        //
        $videoName = null;
        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('videos/home'), $videoName);
        }

        // Save property details
        $video = Video::create($request->except('video', '_token') + [
            'video' => $videoName,
        ]);

        return view('admin.videos.index')->with('success', __('messages.created'));


    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
        return view('admin.videos.edit', compact('video'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VideoRequest $request, Video $video)
    {
         // Handle video update
         if ($request->hasFile('video')) {
            // Generate a new file name for the video
            $videoName = time() . '.' . $request->video->extension();
            // Move the video to the specified folder
            $request->video->move(('videos/home'), $videoName);
            // Update the video field in the database
            $video->update(['video' => $videoName]);
        }

        return redirect()->route('admin.videos.index')->with('success', __('messages.updated'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
