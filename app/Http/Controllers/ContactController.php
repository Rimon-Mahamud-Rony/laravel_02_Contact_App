<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Contact;

use Illuminate\Support\Facades\DB;

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

        //$contact_list = Contact:: paginate(5);

        //$contact_list=DB::table('contacts')->paginate(3);

        $contact_list=Contact::orderBy('id', 'desc')->paginate(3);

        //$dbtest=Contact::paginate(2);

        return view('contact_list')->with('contact_list', $contact_list);

    }


    public function store(Request $request)
    {
        
        /*
        $date= $request->date;

        dd($date);
        
            guessExtension()
            getMimeType()
            store()
            asStore()
            storePublicly()
            Move()
            getClinetOriginalName()
            getclientMimetype()
            guessClientExtension()
            getSize()
            getError()
            isValid()
        

        $test= $request->file('dp')->isValid();

        dd($test);

        */

        
        $set_image_name = time().'-'.$request->f_name.'-'.$request->l_name.'.'.$request->dp->extension();

        //dd($set_image_name);

        //$patha= $set_image_name;

        $request->dp->move(public_path('img'),$set_image_name);

        //dd($test);

        /*$request->validate([

            'dp'=>'required | mimes: jpg, png, jpeg | max: 5048'
        ]);*/

        //dd($request->all());

        $store_contact = new Contact;

        $store_contact->first_name = $request->f_name;

        $store_contact->last_name = $request->l_name;

        $store_contact->email = $request->email;

        $store_contact->phone = $request->phone;

        $store_contact->address = $request->address;

        $store_contact->company = $request->company;

        $store_contact->image_path = $set_image_name;

        //----------------------------------------

        $store_contact->skill = $request->skill;

        $store_contact->designation = $request->designation;

        $store_contact->bg = $request->bg;

        $store_contact->dob = $request->date;

        $store_contact->prehis = $request->prehis;

        $store_contact->save();


        //return redirect()->route('contact_list')->with('message', 'registration completed'); //it works

        return redirect()->back()->with('message', 'registration completed');

        //return redirect()->route('creat_contacts');

    }


    public function edit(Request $request, $id)
    {
        return view('edit_contact');
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

    
    /*public function last_action()
    {
        $last_action =Contact::latest()->first();

        //dd($last_action);

        return view('home')->with('last_action', $last_action);
    }*/


    /*public function search(Request $request)
    {
        //dd("searching.... ");

        $search_text = $request->Search;

        $info = Contact::OrderBy('id','desc')
                ->Where('first_name','Like', '%'.$search_text.'%')
                ->orWhere('phone','Like', '%'.$search_text.'%')
                ->orWhere('address','Like', '%'.$search_text.'%')
                ->get();

        dd($info);

    }*/

}
