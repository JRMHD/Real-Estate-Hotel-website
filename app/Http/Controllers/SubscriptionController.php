<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;
use App\Mail\ThankYouForSubscribing;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:subscribers,email|max:255',
        ]);

        // Save the subscriber's email to the database
        $subscriber = Subscriber::create($validatedData);

        // Send a thank-you email to the subscriber
        Mail::to($subscriber->email)->send(new ThankYouForSubscribing($subscriber));

        // Respond with a JSON success message
        return response()->json(['message' => 'Subscription successful!'], 200);
    }
}
