<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Mail\ContactForm;

class ContactController extends Controller
{
     public function email(Request $request)
  {
     $data = [
        'name'=>$request->name,
        'email'=>$request->email,
      'phone_number'=>$request->phone_number,
      'msg_subject'=>$request->msg_subject,
        'message'=>$request->message,
        'Hear'=>$request->Hear
      ];
      print_r($data);
      Mail::to('rathorev567@gmail.com')->send(new ContactForm($data));
      return view('contact');
  }
}
