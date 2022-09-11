<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function last_employee()
    {
        $total_employee = Contact::all()->count();

        $last_employee = Contact::latest()->first();

        return view('home')
            ->with('last_employee', $last_employee)
            ->with('total_employee', $total_employee); 
    }


}

