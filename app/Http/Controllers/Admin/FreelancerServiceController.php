<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FreelancerProjectRequest;
use App\Models\FreelancerService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FreelancerServiceController extends Controller
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
        $services = Service::get();
        return view('front-end.dashboard.dashboard-talent-services-new', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'service_id' => 'required|exists:services,id|unique:freelancer_services,service_id,NULL,id,freelancer_id,' . Auth::guard('freelancer')->user()->id,
            'price_per_unit' => 'required|numeric|min:0',
        ]);
    
        // Create the new freelancer service
        FreelancerService::create([
            'freelancer_id' => Auth::guard('freelancer')->user()->id, 
            'service_id' => $request->service_id,
            'price_per_unit' => $request->price_per_unit,
        ]);
    
        $freelancerId = Auth::guard('freelancer')->user()->id; 
    
        return redirect()->route('dashboard-talent-services', $freelancerId)
                         ->with('success', __('messages.service_created'));
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(FreelancerService $freelancerService)
    {
        //
        
        return view('front-end.dashboard.dashboard-talent-serices-service', compact('freelancerService'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FreelancerService $freelancerService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FreelancerService $freelancerService)
    {
        $request->validate([
            'price_per_unit' => 'required|numeric|min:0',
        ]);
    
        $freelancerService->update([
            'price_per_unit' => $request->price_per_unit,
            'active' => $request->active,
        ]);
    
        return redirect()->back()->with('success', 'Service updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FreelancerService $freelancerService)
    {
        // Check if the service has associated orders
        if ($freelancerService->orders()->exists()) {
            // If there are orders, set the service to inactive
            $freelancerService->update(['active' => false]);
    
            return redirect()->back()->with('error', 'This service has associated orders and cannot be deleted. It has been set to Not active.');
        }
    
        // If no orders, delete the service
        $freelancerService->delete();
    
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
    
}
