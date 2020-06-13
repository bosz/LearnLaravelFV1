<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactUs;

class contactController extends Controller
{
    public function welcome(Request $request){
    	$inputs = $request->all();
    	
    	$fname = $inputs['fname'];
    	$lname = $inputs['lname'];
    	$phone = $inputs['phone'];
    	$email = $inputs['email'];
    	$message = $inputs['message'];

    	$contactUs = new ContactUs;
    	$contactUs->fname = $fname;
    	$contactUs->lname = $lname; 
    	$contactUs->phone = $phone; 
    	$contactUs->email = $email; 
    	$contactUs->message = $message;
    	$contactUs->save();

    	return redirect()->route('contact-list');

        // return view('thank');

        // 1. Model
        // 2. Migration
    }

    public function contactList()
    {
    	$contactList = ContactUs::all();
    	return view('contact-list')
    			->with('contactList', $contactList);
    }
}
