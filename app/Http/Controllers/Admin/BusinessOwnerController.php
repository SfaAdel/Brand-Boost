<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessOwner;
use Illuminate\Http\Request;

class BusinessOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $businessOwners = BusinessOwner::latest()->paginate(10);
            
        return view('admin.business_owners.index', compact('businessOwners'));
    
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
    public function show(BusinessOwner $businessOwner)
    {
        //
        return view('admin.business_owners.show', compact('businessOwner'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessOwner $businessOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessOwner $businessOwner)
    {
        //
        $active = $request->input('active');


    
        // Update the order status
        $businessOwner->update(['active' => $active]);
    
        return redirect()->route('admin.business_owners.index')->with('success', __('messages.data_updated'));
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessOwner $businessOwner)
    {
        //
        $businessOwner->delete();

        return redirect()->route('admin.business_owners.index')->with('success', __('messages.business_owner_deleted'));
    
    }
}
