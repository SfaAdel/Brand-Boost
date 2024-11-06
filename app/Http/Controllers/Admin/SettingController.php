<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $settings= Setting::first();
        return view('admin.settings.index', compact('settings'));

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
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
        
        return view('admin.settings.edit', compact('setting'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        //
        $setting->update($request->except('_token', '_method','logo','favicon'));
        if ($request->hasFile('logo')) {
            $LogoImageName = time() . '.' . $request->logo->extension();
            $request->logo->move(('images/settings'), $LogoImageName);
            $setting->update(['logo' => $LogoImageName]);
        }
        if ($request->hasFile('favicon')) {
            $favIconName = time() . '.' . $request->favicon->extension();
            $request->favicon->move(('images/settings'), $favIconName);
            $setting->update(['favicon' => $favIconName]);
        }
        return redirect()->route('admin.settings.index')->with('success', 'تم تعديل بيانات الموقع بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
