<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Contact;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function contact_list()
    {
        /*$contact_list = Contact::all();

        return view('all_contacts')->with('contact_list', $contact_list);*/

        $contact_list = Contact::all();

        return view('contact_list')->with('contact_list', $contact_list);

    }


    





}
