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

/*Route::get('/allcontacts', function () {
    return view('allcontacts');
});
*/

Route::get('/creat_contacts', function () {
    return view('creat_contacts');
});

Route::get('/creat_contacts', 'CompanyController@list_company')->name('list_company');


Route::get('/index', 'CompanyController@show_all_company')->name('show_all_company');

Route::get('/all_contacts', 'CompanyController@all_contacts')->name('all_contacts');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
