<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the tags.
     */
    public function index()
    {
        $tags = Tag::with('translations')->paginate(10);
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new tag.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created tag in storage.
     */
    public function store(TagRequest $request)
    {
        // Create a new Tag without translations
        $tag = Tag::create($request->all());

        return redirect()->route('admin.tags.index')->with('success', __('messages.tag_created'));
    }


    /**
     * Show the form for editing the specified tag.
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified tag in storage.
     */
    public function update(TagRequest $request, Tag $tag)
    {
        // Update the main settings table fields
        $tag->update($request->except('_token', '_method')); 



        return redirect()->route('admin.tags.index')->with('success', __('messages.tag_updated'));
    }

    /**
     * Remove the specified tag from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('success', __('messages.tag_deleted'));
    }
}
