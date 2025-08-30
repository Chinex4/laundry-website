<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email to admin
        Mail::send('emails.contact', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? 'N/A',
            'subject' => $validated['subject'],
            'user_message' => $validated['message'],
        ], function ($mail) use ($validated) {
            $mail->to('astauchiha234@gmail.com')
                ->subject("New Contact Message: " . $validated['subject']);
        });


        // Show SweetAlert success message
        Alert::success('Message Sent', 'Thank you for contacting us! We will get back to you soon.');

        return redirect()->back();
    }
}
