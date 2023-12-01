<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\Contact_img;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function store(Request $request){

        $request->validate([
            'name' =>'required',
            'email'=> 'required|email|',
            'phone' =>'required|numeric|',

        ]);
         $contact=Contact::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone,
          'message'=>$request->message,
           ]);
          return redirect()->back()->with('success','Message has been sent');
    }
    public function list(){
        $contact = Contact::all();
        return view('pages.contact.list',compact('contact'));
    }
    public function index()
    {
        $contact = Contact_img::first();
        return view('pages.contact.bg_image', compact('contact'));
    }
     public function update(Request $request)
    {

        $contact = Contact_img::first();


    if($request->file('bg_img')){
         $img_file = $request->file('bg_img');
         $img_file->storeAs('public/img/','bg_img.' . $img_file->getClientOriginalExtension());
         $contact->bg_img = 'storage/img/bg_img.' . $img_file->getClientOriginalExtension();
      }

        $contact->save();
        return redirect('admin/contact')->with('success', 'contact page data has been submitted successfully');
    }
}
