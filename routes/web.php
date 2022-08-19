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

/*Route::get('/creat_contacts', function () {
    return view('creat_contacts');
});


Route::get('/allcontacts', function () {
    return view('allcontacts');
});
*/


Route::get('/creat_contacts', 'CompanyController@list_company_for_add_contact')->name('list_company');


Route::get('/index', 'CompanyController@show_all_company')->name('show_all_company');

Route::get('/all_contacts', 'CompanyController@all_contacts')->name('all_contacts'); 

Route::get('/contact_list', 'ContactController@contact_list')->name('contact_list');

//Route::get('/contact_list', 'ContactController@contact_list')->name('contact_list');

Route::post('/store', 'ContactController@store')->name('store');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
