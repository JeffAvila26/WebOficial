<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getContact() { 

        return view('/contacto/contact_us'); 
      } 
 
       public function saveContact(Request $request) { 
 
         $this->validate($request, [
             'name' => 'required',
             'email' => 'required|email',
             'subject' => 'required',
             'phone_number' => 'required',
             'message' => 'required'
         ]);
 
         $contact = new Contact;
 
         $contact->name = $request->name;
         $contact->email = $request->email;
         $contact->subject = $request->subject;
         $contact->phone_number = $request->phone_number;
         $contact->message = $request->message;

         Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('info@tecnogoo.com');
               });
 
         $contact->save();
         
         return back()->with('success', 'Thank you for contact us!');
     }
}
