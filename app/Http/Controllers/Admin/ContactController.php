<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
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
    public function store(ContactRequest $request)
    {
        //
        Contact::create($request->except('_token'));
        return redirect()->back()->with('success', __('messages.msg_sent'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
        return view('admin.contacts.show', compact('contact'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
    
        // Check if the request includes a status change
        if ($request->has('status')) {
            $contact->status = $request->input('status');
        }
    
        // Handle other updates (if applicable)
        // $contact->fill($request->except('status'));
    
        $contact->save();
    
        return redirect()->route('admin.contacts.index')->with('success', __('messages.contact_updated'));
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', __('messages.contact_deleted'));
    }
}
