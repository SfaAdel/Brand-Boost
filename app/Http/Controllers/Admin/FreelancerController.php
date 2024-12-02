<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Freelancer;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $freelancers = Freelancer::latest()->paginate(10);
            
        return view('admin.freelancers.index', compact('freelancers'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Freelancer $freelancer)
    {
        //
        return view('admin.freelancers.show', compact('freelancer'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Freelancer $freelancer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Freelancer $freelancer)
    {
        //
        $active = $request->input('active');

        if ($request->has('fav')) {
            $fav = $request->input('fav');

        }else {
            $fav = 0;
        }
    
        // Update the order status
        $freelancer->update(['fav' => $fav , 'active' => $active]);
    
        return redirect()->route('admin.freelancers.index')->with('success', __('messages.data_updated'));
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Freelancer $freelancer)
    {
        //
        $freelancer->delete();

        return redirect()->route('admin.freelancers.index')->with('success', __('messages.freelancer_deleted'));
    
    }
}
