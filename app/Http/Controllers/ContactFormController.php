<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the form data to the database
        $contactForm = ContactForm::create($validatedData);

        // Send the email
        Mail::to('bellodenis53@gmail.com')->send(new ContactFormSubmitted($contactForm));

        // Respond with a JSON success message
        return response()->json(['message' => 'Message Sent successfully!'], 200);
    }
}
