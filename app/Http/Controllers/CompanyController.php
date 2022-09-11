<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Contact;

use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    //

    public function stroe_company(Request $request)
    {
        $request->validate([

            'name'=>'required |unique:companies,name| string | max:50',
            'email'=>'required |unique:companies,email| string ',
            'website'=>'required |unique:companies,website| string ',
            'mobile'=>'required | unique:companies,mobile| max:13',


        ]);
        

        $stroe_company = new Company;
        
        $stroe_company->name = $request->name;  
        $stroe_company->email = $request->email;  
        $stroe_company->website = $request->website; 
        $stroe_company->address = $request->address; 
        $stroe_company->mobile = $request->mobile;

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
            'mobile'=>'required | unique:companies,mobile| max:13',

        ]);
        

        $update_company_id = Company::find($id);
        
        $update_company_id->name = $request->name;  
        $update_company_id->email = $request->email;  
        $update_company_id->website = $request->website; 
        $update_company_id->address = $request->address; 
        $update_company_id->mobile = $request->mobile;

        $update_company_id->save();

        return redirect('company_list')->with('message', 'Congratulations!! Comapny information updated successfully !!');
    }


    public function delete_company($id)
    {
        $del_company_id = Company::find($id);

        $del_company_id->delete();

        return redirect()->back()->with('message', 'Company has been deleted');
    }

   /* public function show_all_company()
    {
        $all_company = Company::all();

        return view('index')->with('all_company', $all_company);

    }*/

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

    public function dbtest(Request $request)
    {


        $sorting_as = request('sort');

        $search_text = $request->Search;

        if ($search_text) {
            //echo "searching for ".$search_text;

                $dbtest = DB::Select("SELECT contacts.id AS contact_id, contacts.first_name AS contact_name,contacts.last_name AS contactlast_name, contacts.address AS contact_adress, contacts.email AS contact_email, contacts.phone AS contact_phone, companies.name AS company_name, companies.website,companies.email AS company_email, companies.mobile AS company_phone 
                    FROM contacts, companies 
                    WHERE contacts.company=companies.name AND ( contacts.phone LIKE '%$search_text%' OR contacts.first_name LIKE '%$search_text%');");
        }
        

        elseif ($sorting_as=='az') {
            $dbtest = DB::Select("SELECT contacts.id AS contact_id, contacts.first_name AS contact_name,contacts.last_name AS contactlast_name, contacts.address AS contact_adress, contacts.email AS contact_email, contacts.phone AS contact_phone, companies.name AS company_name, companies.website,companies.email AS company_email, companies.mobile AS company_phone 
                    FROM contacts, companies 
                    WHERE contacts.company=companies.name
                    ORDER By contacts.first_name ASC;");
        }
        elseif ($sorting_as=='za') {

            $dbtest = DB::Select("SELECT contacts.id AS contact_id, contacts.first_name AS contact_name,contacts.last_name AS contactlast_name, contacts.address AS contact_adress, contacts.email AS contact_email, contacts.phone AS contact_phone, companies.name AS company_name, companies.website,companies.email AS company_email, companies.mobile AS company_phone FROM contacts, companies WHERE contacts.company=companies.name ORDER By contacts.first_name DESC;");
        }

        elseif ($sorting_as) {
            $dbtest = DB::Select(" SELECT contacts.id AS contact_id, contacts.first_name AS contact_name,contacts.last_name AS contactlast_name, contacts.address AS contact_adress, contacts.email AS contact_email, contacts.phone AS contact_phone, companies.name AS company_name, companies.website,companies.email AS company_email, companies.mobile AS company_phone, companies.id as com_id FROM contacts, companies WHERE contacts.company=companies.name AND companies.id='$sorting_as'; ");
        }

        else

        $dbtest = DB::Select("SELECT contacts.id AS contact_id, contacts.first_name AS contact_name, contacts.last_name AS contactlast_name, contacts.address AS contact_adress, contacts.email AS contact_email, contacts.phone AS contact_phone, companies.name AS company_name, companies.website,companies.email AS company_email, companies.mobile AS company_phone FROM contacts, companies WHERE contacts.company=companies.name");

        //$dbtest = Company::all();$users = DB::table('users')->count();

        //$qr = "SELECT name, address from companies"

        //$dbtest = DB::table('companies')->get();

        //$dbtest = DB::table('contacts')
                //->join('companies','contacts.company','=','companies.name')
                //->select('companies.name','contacts.phone')
                //->orderBy('companies.name', 'desc')
                //->get();

        
        //dd($dbtest); return View::make('pages.index')

        //return $dbtest;
        //$dbtest=Contact::paginate(2);

        $company_name=Company::all();



        return view('index')
                    ->with('dbtest',$dbtest)
                    ->with('company_name',$company_name); 

    }

    /*public function link()

    { 
        $test = request('sort');

        if(($test)=='az')
        {
            $dbtest = DB::Select("SELECT contacts.id AS contact_id, contacts.first_name AS contact_name, contacts.address AS contact_adress, contacts.email AS contact_email, contacts.phone AS contact_phone, companies.name AS company_name, companies.website,companies.email AS company_email, companies.mobile AS company_phone 
                    FROM contacts, companies 
                    WHERE contacts.company=companies.name
                    ORDER By contacts.first_name ASC;");
                $company_name=Company::all();
        

        return view('index')
                    ->with('dbtest',$dbtest)
                    ->with('company_name',$company_name);
    }
    }*/

   
}
