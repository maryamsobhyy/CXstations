<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'subject' => 'required|string',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'subject' =>$request->input('subject') ,
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('info@cxstations.com')
                    ->subject('New Contact Form Submission')
                    ->from($data['email'], $data['name']);
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
