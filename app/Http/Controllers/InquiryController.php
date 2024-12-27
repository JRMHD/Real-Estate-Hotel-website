<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryReceived;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'preferred_date' => 'required|date',
            'preferred_time' => 'required',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'message' => 'nullable|string|max:1000',
        ]);

        // Process the data (e.g., save to DB or send email)
        Mail::to('bellodenis53@gmail.com')->send(new InquiryReceived($validatedData));

        return response()->json([
            'message' => 'Your inquiry has been successfully submitted!',
        ]);
    }
}
