<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $message = new Message();
        $message->name = $validatedData['name'];
        $message->email = $validatedData['email'];
        $message->message = $validatedData['message'];
        $message->save();

        return redirect()->route('contact.messages');
    }

    public function showMessages()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('contact.messages', ['messages' => $messages]);
    }
}

