<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $correo = new ContactanosMailable($request->all());
        Mail::to('hruiz13@hotmail.com')->send($correo);
        return redirect()->route('contact.index')->with('info', 'Message Sent');
    }
}
