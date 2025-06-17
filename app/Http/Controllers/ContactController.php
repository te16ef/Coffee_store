<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);

            Mail::raw("رسالة جديدة من: {$data['name']} ({$data['email']})\n\n{$data['message']}", function ($message) {
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                // تأكد من تعيين البريد الإلكتروني الصحيح في ملف .env
                $message->to('Te16ef@gmail.com')  
                        ->subject('رسالة جديدة من نموذج التواصل');
            });

            return back()->with('success', 'تم إرسال رسالتك بنجاح!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'حدث خطأ أثناء إرسال الرسالة.']);
        }
    }
}