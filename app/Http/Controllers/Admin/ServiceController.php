<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::with('translations')->paginate(10);
        return view('admin.services.index', compact('services'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.services.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        //

        if ($request->hasFile('icon')) {
            $ImageName = time() . '.' . $request->icon->extension();
            $request->icon->move(('images/services'), $ImageName);
        }

        Service::create($request->except('icon', '_token') +
            ['icon' => $ImageName]);



        return redirect()->route('admin.services.index')->with('success', __('messages.service_created'));
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
        return view('admin.services.edit', compact('service'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {
        //
        $service->update($request->except('_token', '_method' , 'icon')); 

        // Handle logo upload
        if ($request->hasFile('icon')) {
            $iconImageName = time() . '.' . $request->icon->extension();
            $request->icon->move(('images/services'), $iconImageName);
            $service->update(['icon' => $iconImageName]);
        }

        return redirect()->route('admin.services.index')->with('success', __('messages.service_updated'));
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', __('messages.service_deleted'));
    
    }
}
