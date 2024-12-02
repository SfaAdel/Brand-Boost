<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Title;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::with('translations')->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tags = Tag::all();

        return view('admin.blogs.create' , compact('tags'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        //
        
        if ($request->hasFile('icon')) {
            $ImageName = time() . '.' . $request->icon->extension();
            $request->icon->move(('images/blogs'), $ImageName);
        }
        if ($request->hasFile('banner')) {
            $bannerName = time() . '.' . $request->banner->extension();
            $request->banner->move(('images/blog_banners'), $bannerName);
        }

        $blog = Blog::create($request->except('icon','banner', '_token') +
            ['icon' => $ImageName] + ['banner' => $bannerName] );

        $blog->tags()->sync($request->input('tags', []));


        return redirect()->route('admin.blogs.index')->with('success', __('messages.blog_created'));
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
        return view('admin.blogs.show', data: compact('blog'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        $tags = Tag::all();

        return view('admin.blogs.edit', compact('blog', 'tags'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        //
        $blog->update($request->except('_token', '_method' , 'icon','banner')); 

        // Handle logo upload
        if ($request->hasFile('icon')) {
            $iconImageName = time() . '.' . $request->icon->extension();
            $request->logo->move(('images/blogs'), $iconImageName);
            $blog->update(['icon' => $iconImageName]);
        }

        if ($request->hasFile('banner')) {
            $bannerName = time() . '.' . $request->banner->extension();
            $request->banner->move(('images/blog_banners'), $bannerName);
            $blog->update(['banner' => $bannerName]);
        }

        $blog->tags()->sync(ids: $request->input('tags', []));


        return redirect()->route('admin.blogs.index')->with('success', __('messages.blog_updated'));
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', __('messages.blog_deleted'));
    
    }

    public function filterByTag($tagId)
    {
        $blogSection = Title::where('section', 'blogs')->first();
        $setting = Setting::first();
        $tags = Tag::all();

        $blogs = Blog::whereHas('tags', function ($query) use ($tagId) {
            $query->where('tag_id', $tagId);
        })->get();

        $noBlogsMessage = $blogs->isEmpty() ? __('messages.no_blogs_msg') : '';

        return view('front.blogs', compact('setting', 'blogs',  'blogSection',  'tags', 'noBlogsMessage'));
    }
}
