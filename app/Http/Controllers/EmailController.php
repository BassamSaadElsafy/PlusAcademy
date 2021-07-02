<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\DataTables\EmailDatatable;

use Illuminate\Http\Request;
use \App\Email;

class EmailController extends Controller
{

    public function store(Request $request)
    {

        $data = $this->validate(request() , [
            
            'email'   => 'required|email',
            
        ] , [] , [
            'email'             =>  'email'
       ]);

       Email::create([
           'email'  => $request->email
       ]);

       session()->flash('uk_success' , 'Email Sent Successfully');
       return back();

    }

}//end of controller
