<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TitleRequest;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titles = Title::latest()->paginate(10);
        return view('admin.titles.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.titles.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TitleRequest $request)
    {
        //
        if ($request->hasFile('icon')) {
            $ImageName = time() . '.' . $request->icon->extension();
            $request->icon->move(('images/titles'), $ImageName);
        }
        if ($request->hasFile('banner')) {
            $BannerImageName = time() . '.' . $request->banner->extension();
            $request->banner->move(('images/pages_banners'), $BannerImageName);
        }
        Title::create($request->except('icon', '_token','banner') +
            ['icon' => $ImageName]+
            ['banner' => $BannerImageName]);


        return redirect()->route('admin.titles.index')->with('success', 'تم اضافة البيانات بنجاح');

    }

    /**
     * Display the specified resource.
     */
    public function show(Title $title)
    {
        //
        return view('admin.titles.show', compact('title'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Title $title)
    {
        //
        return view('admin.titles.edit', compact('title'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TitleRequest $request, Title $title)
    {
        //
        $title->update($request->except('icon', '_token', '_method'));
        if ($request->hasFile('icon')) {
            $ImageName = time() . '.' . $request->icon->extension();
            $request->icon->move(('images/titles'), $ImageName);
            $title->update(['icon' => $ImageName]);
        }
        if ($request->hasFile('banner')) {
            $BannerImageName = time() . '.' . $request->banner->extension();
            $request->banner->move(('images/pages_banners/'), $BannerImageName);
            $title->update(['banner' => $BannerImageName]);
        }
        return redirect()->route('admin.titles.index')->with('success', 'تم تعديل البيانات بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Title $title)
    {
        //
        $title->delete();
        return redirect()->route('admin.titles.index')->with('delete', 'تم حذف البيانات بنجاح');
    }
}
