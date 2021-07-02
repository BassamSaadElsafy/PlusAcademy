<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\EmailDatatable;

use Illuminate\Http\Request;
use \App\Email;

class EmailController extends Controller
{

    public function index(EmailDatatable $std)
    {
        return $std->render('admin.client_emails.index' , ['title' => 'Email']);
    }


    public function destroy($id)
    {
        Email::find($id)->delete();
        session()->flash('success' , 'Email Deleted Successfully');
        return back();
    }

    public function multi_delete(){
        if(is_array(request('item'))){
            Email::destroy(request('item'));
            session()->flash('success' , 'Email Deleted Successfully');
        }
        else{
            Email::find(request('item'))->delete();
            session()->flash('success' , 'Email Deleted Successfully');
        }
        return back();
    }
}
