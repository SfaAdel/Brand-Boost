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

        return redirect()->route('admin.admins.index')->with('sucess', 'تم انشاء المدير');
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
    public function update(AdminRequest $request, Admin $admin)
    {
        //
        if ($request->filled('password') && $admin->password != $request->get('password')) {
            $admin->update($request->except('password','_token', '_method') + [
                    'password' => bcrypt($request->input('password')),
                ]);
        } else {
            $admin->update($request->except('password','_method','_token'));
        }

        return redirect()->route('admin.admins.index')->with('sucess', 'تم تعديل البيانات');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admin.admins.index')->with('sucess', 'تم حذف البيانات');
    }
}
