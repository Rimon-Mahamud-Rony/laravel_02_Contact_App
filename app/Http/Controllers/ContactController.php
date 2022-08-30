<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Contact;

use Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function contact_list()
    {

        $contact_list = Contact::all()->sortByDesc("id");

        return view('contact_list')->with('contact_list', $contact_list);

    }




    public function store(Request $request)
    {
        $store_contact = new Contact;

        $store_contact->first_name = $request->f_name;

        $store_contact->last_name = $request->l_name;

        $store_contact->email = $request->email;

        $store_contact->phone = $request->phone;

        $store_contact->address = $request->address;

        $store_contact->company = $request->company;

        $store_contact->save();


        //return redirect()->route('contact_list')->with('message', 'registration completed'); //it works

        return redirect()->back()->with('message', 'registration completed');

        //return redirect()->route('creat_contacts');

    }

    public function edit(Request $request)
    {

    }

    public function delete($id)
    {   
        $del_con_id = Contact::find($id);

        $del_con_id->delete();

        return redirect()->route('contact_list')->with('message', 'Contact deleted succcesfully'); 
    }

    public function single_view($id)
    {
        $single_view_id = Contact::find($id);

        return view('single_view')->with('single_view_id', $single_view_id);

        
    }

}
