<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\ContactDatatable;

use Illuminate\Http\Request;
use \App\Contact;

class ContactController extends Controller
{

    public function index(ContactDatatable $std)
    {
        
        return $std->render('admin.contacts.index' , ['title' => 'Contacts']);
    }


    public function destroy($id)
    {
        Contact::find($id)->delete();
        session()->flash('success' , 'Contact Deleted Successfully');
        return back();
    }

    public function multi_delete(){
        if(is_array(request('item'))){
            Contact::destroy(request('item'));
            session()->flash('success' , 'Contact Deleted Successfully');
        }
        else{
            Contact::find(request('item'))->delete();
            session()->flash('success' , 'Contact Deleted Successfully');
        }
        return back();
    }
}
