<?php

namespace Bitfumes\contact\Http\Controllers;

use Illuminate\Http\Request;
use Bitfumes\contact\Mail\ContactMailable;
use App\Http\Controllers\Controller;
use Bitfumes\contact\Models\contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function Show()
    {
        return view('contact::Contact');
    }

    public function send(Request $request)
    {
        // create a mail sender
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->Message, $request->Name));


        $data = $request->all();
        contact::create($data);
        return redirect(route('contact'));
    }
}
