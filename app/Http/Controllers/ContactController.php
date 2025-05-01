<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('helpzone.contact');
    }

public function send(Request $request)
    {   //receive inputs from form
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $adminEmail = 'olanrewajugiwa8@example.com'; 

        Mail::raw(
            "New Contact Enquiry:\n\n" .
            "Name: {$request->name}\n" .
            "Email: {$request->email}\n" .
            "Phone: {$request->phone}\n" .
            "Subject: {$request->subject}\n\n" .
            "Message:\n{$request->message}",
            function ($message) use ($adminEmail, $request) {
                $message->to($adminEmail)
                        ->subject('New Contact Form Enquiry: ' . $request->subject);
            }
        );

        return redirect()->back()->with('success', 'Thank you! Your enquiry has been sent successfully.');
    }

}
