<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\CreateContontRequest;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function saveContact(CreateContontRequest $request) {
              // dd($request->firstname);
        Contact::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'message'=>$request->message,
        ]);



        Mail::send('contact', array(
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'phone_number' => $request->get('phone_number'),
            'user_message' => $request->get('message'),
        ), function($message)use($request){
            $message->from($request->email);
            $message->to('codingdriver15@gmail.com');
        });

        return redirect()->back();

    }
}
