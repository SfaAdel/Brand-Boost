<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $admins = Admin::latest()->paginate(10);

        return view('admin.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.admins.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        Admin::create($request->except('password','_token') + [
                'password' => bcrypt($request->input('password'))
            ]);

            return redirect()->route('admin.admins.index')->with('success', __('messages.admin_created'));
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
        return view('admin.admins.edit', compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|string|min:8|confirmed', // Make password nullable
            'role' => 'required|in:admin,super_admin,data_entry',
        ]);
    
        // Update admin details
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->role = $request->input('role');
    
        // Only update password if provided
        if ($request->filled('password')) {
            $admin->password = bcrypt($request->input('password'));
        }
    
        $admin->save();
    
        return redirect()->route('admin.admins.index')->with('success', __('messages.admin_updated'));
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admin.admins.index')->with('success', __('messages.admin_deleted'));
    }
}
