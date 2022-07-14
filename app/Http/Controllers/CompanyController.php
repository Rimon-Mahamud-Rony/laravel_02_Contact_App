<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller
{
    //
     public function test()
    {
        $all_company = Company::all();

        return view('index')->with('all_company', $all_company);

    }

}
