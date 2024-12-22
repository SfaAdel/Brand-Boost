<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FieldRequest;
use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fields = Field::with('translations')->paginate(10);
        return view('admin.fields.index', compact('fields'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.fields.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FieldRequest $request)
    {
        //
        if ($request->hasFile('icon')) {
            $ImageName = time() . '.' . $request->icon->extension();
            $request->icon->move(('images/fields'), $ImageName);
        }

         $fields = Field::create($request->except('icon', '_token') +
         ['icon' => $ImageName]);

        // $fields = Field::create($request->except( '_token'));


        return redirect()->route('admin.fields.index')->with('success', __('messages.field_created'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Field $field)
    {
        //
        return view('admin.fields.edit', compact('field'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FieldRequest $request, Field $field)
    {
        //
        $field->update(attributes: $request->except('_token', '_method', 'icon'));

         // Handle logo upload
         if ($request->hasFile('icon')) {
            $iconImageName = time() . '.' . $request->icon->extension();
            $request->icon->move(('images/fields'), $iconImageName);
            $field->update(['icon' => $iconImageName]);
        }

        return redirect()->route('admin.fields.index')->with('success', __('messages.field_updated'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Field $field)
    {
        //
        $field->delete();
        return redirect()->route('admin.fields.index')->with('success', __('messages.field_deleted'));
    
    }
}
