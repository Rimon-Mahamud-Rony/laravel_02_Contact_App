<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact_list', function () {
    return view('contact_list');
});

Route::get('/single_view', function () {
    return view('single_view');
});

/*Route::get('/creat_contacts', function () {
    return view('creat_contacts');
});


Route::get('/allcontacts', function () {
    return view('allcontacts');
});

*/
Route::get('/creat_company', function () {
    return view('creat_company');
});

//____________________________________________________________________________________

Route::get('/test', 'CompanyController@test')->name('test');

//______________________________________________________________________________________


//contacts route--------------------------------------------------------------------------------------------------->

Route::get('/creat_contacts', 'CompanyController@list_company_for_add_contact')->name('list_company');

//Route::get('/index.com', 'CompanyController@show_all_company')->name('show_all_company');


Route::get('/index', 'CompanyController@dbtest')->name('dbtest');

//====

//Route::get('/index.link', 'CompanyController@link')->name('link');

//Route::get('link/{key}', $CompanyController . 'link');


/*Route::get('/index',function()
{
    $test = request('sort');

    /*return view('index',[
            'test'=>$test
    ])

    dd($test);
});*/


//==
//Route::get('/search', 'ContactController@search')->name('search');
//==


Route::get('/all_contacts', 'CompanyController@all_contacts')->name('all_contacts'); 

Route::get('/contact_list', 'ContactController@contact_list')->name('contact_list');

//Route::get('/contact_list', 'ContactController@contact_list')->name('contact_list');

Route::post('/store', 'ContactController@store')->name('store'); 

Route::get('/edit/{id}', 'ContactController@edit')->name('edit');

Route::get('/delete/{id}', 'ContactController@delete')->name('delete');

Route::get('/single_view/{id}', 'ContactController@single_view')->name('single_view');



//company route--------------------------------------------------------------------------------------------------->

Route::get('/company_list', 'CompanyController@Company_list')->name('Company_list');

Route::post('/stroe_company', 'CompanyController@stroe_company')->name('stroe_company');

Route::get('/delete_company/{id}', 'CompanyController@delete_company')->name('delete_company');

Route::get('/edit_company/{id}', 'CompanyController@edit_company')->name('edit_company');

Route::post('/update_company/{id}', 'CompanyController@update_company')->name('update_company');


//functional action--------------------------------------------------------------------------------------------------->

Route::get('home', 'ContactController@last_action')->name('last_action');


//Authentication route-------------------------------------------------------------------------------------------->

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'last_employee'])->name('home');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'last_action'])->name('last_action');
