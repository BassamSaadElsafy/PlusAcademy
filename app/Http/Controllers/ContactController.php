<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \App\Contact;

class ContactController extends Controller
{

    public function store(Request $request)
    {

        $data = $this->validate(request() , [
            
            'name'   => 'required',
            'email'   => 'required|email',
            'phone'   => 'required|numeric',
            'subject'   => 'required',
            'message'   => 'required',
            
        ] , [] , [
            'name'             =>  'name',
            'email'             =>  'email',
            'phone'             =>  'phone',
            'subject'             =>  'subject',
            'message'             =>  'message',
       ]);

       Contact::create($data);
       session()->flash('uk_success' , 'Message Sent Successfully');
       return back();

    }

}//end of controller
