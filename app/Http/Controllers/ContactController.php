<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('pages.contact', compact('contacts'));
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success', 'Contact created successfully.');
    }

    public function show(Contact $contact) : View
    {
        $contacts = Contact::all();
        $i = 1;
        return view('contacts.index', [
            'contacts' => $contacts,
            'i' => $i
        ]);
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'telp' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact->update($request->all());

        return redirect()->route('contacts')
            ->with('success', 'Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()
            ->with('success', 'Contact deleted successfully');
    }

}
