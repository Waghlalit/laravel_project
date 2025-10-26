<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'mobile'=>'required|string|max:30',
            'notes'=>'nullable|string',
            'email'=>'nullable|email',
        ]);

        $contact = Contact::create($data);

        return redirect()->back()->with('success', __('messages.contact_success'));
    }
}
