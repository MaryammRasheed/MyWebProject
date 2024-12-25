<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }


    public function showForm(Request $request)
    {
       
        $request->validate(
            [
                'first_name' => 'required|min:3',
                'last_name' => 'required|min:3',
                'email' => 'required|email',
                'subject' => 'required|min:10',
                'message' => 'required|min:20'
            ]
        );

        $FirstName = $request->first_name;
        $LastName = $request->last_name;
        $Email = $request->email;
        $Subject = $request->subject;
        $Message = $request->message;
        $IP = $request->ip();
        $Status = 0;

        $contact = new Contact();
        $contact->first_name = $FirstName;
        $contact->last_name = $LastName;
        $contact->email = $Email;
        $contact->subject = $subject;
        $contact->message = $Message;
        $contact->ip = $IP;
        $contact->status = $Status;
        $contact->save();
        return back()->withSuccess("Thanks for Contacting Us. We'll respond you ASAP!");
    }


}