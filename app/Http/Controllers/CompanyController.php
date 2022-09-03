<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller
{
    //

    public function stroe_company(Request $request)
    {
        $request->validate([

            'name'=>'required |unique:companies,name| string | max:50',
            'email'=>'required |unique:companies,email| string ',
            'website'=>'required |unique:companies,website| string ',


        ]);
        

        $stroe_company = new Company;
        
        $stroe_company->name = $request->name;  
        $stroe_company->email = $request->email;  
        $stroe_company->website = $request->website; 
        $stroe_company->address = $request->address; 

        $stroe_company->save();

        return redirect()->back()->with('message', 'Congratulations!! Comapny has been added');
    }

    public function edit_company($id)
    {
        $edit_company_id= Company::find($id);

        return view('edit_company')->with('edit_company_id',$edit_company_id);
    }

    public function update_company(Request $request, $id)
    {
        $request->validate([

            'name'=>'required | string | max:50',
            'email'=>'required | string ',
            'website'=>'required | string ',
        ]);
        

        $update_company_id = Company::find($id);
        
        $update_company_id->name = $request->name;  
        $update_company_id->email = $request->email;  
        $update_company_id->website = $request->website; 
        $update_company_id->address = $request->address; 

        $update_company_id->save();

        return redirect('company_list')->with('message', 'Congratulations!! Comapny information updated successfully !!');
    }


    public function delete_company($id)
    {
        $del_company_id = Company::find($id);

        $del_company_id->delete();

        return redirect()->back()->with('message', 'Company has been deleted');
    }

    public function show_all_company()
    {
        $all_company = Company::all();

        return view('index')->with('all_company', $all_company);

    }

     public function Company_list()
    {
        $all_company = Company::all();

        return view('company_list')->with('all_company', $all_company);

    }

     public function all_contacts()
    {
        $all_company = Company::all();

        return view('all_contacts')->with('all_company', $all_company);

    }

     public function list_company_for_add_contact()
    {
        $list_company = Company::all();
        return view('creat_contacts')->with('list_company', $list_company);
    }

    public function test()
    {
        //$date = date('d-m-Y H:i:s');

        $date = Carbon\Carbon::now();
        dd($date);
    }

}
