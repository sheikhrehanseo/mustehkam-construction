<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Show the Contact Page
    public function index()
    {
        return view('contact');
    }

    // Handle Form Submission (POST)
    public function store(Request $request)
    {
        // 1. Validate the input
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'nullable|string',
            'phone' => 'nullable|string',
            'message' => 'required|min:10',
        ]);

        // 2. Save to Database
        Contact::create($validated);

        // 3. Return a success message text (for the Javascript to read)
        return "OK"; 
    }
}