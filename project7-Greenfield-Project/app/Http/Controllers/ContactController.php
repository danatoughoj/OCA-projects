<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $contact = new Contact();
       $contacts = $contact->all();
       return view('Public.contact', compact('contacts'));
   }

   public function create(){
       return view('Public.contact');
   }

   public function store(Request $request){
       $request->validate([
            'name' => 'required',
           'email'  => 'required | email',
           'message' => 'required | min:8 | max:50'
       ]);

       $contact = new Contact();
       $contact->contact_name  = $request['name'];
       $contact->contact_email = $request['email'];
       $contact->contact_message = $request['message'];

       $contact->save();

       return redirect('contact')->with("message","Message sent successfully!");
   }

}
