<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw("رسالة جديدة من: {$data['name']} ({$data['email']})\n\n{$data['message']}", function ($message) {
            $message->to('Te16ef@gmail.com')  
                    ->subject('رسالة جديدة من نموذج التواصل');
        });

        return back()->with('success', 'تم إرسال رسالتك بنجاح!');
    }
}