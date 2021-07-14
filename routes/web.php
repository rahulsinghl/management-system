<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
	// $user= new User;
	// $user->name='admin';
	// $user->Email='admin@gamil.com';
	// $user->password=bcrypt(123456);
	// $user->save();
 //    // return view('welcome');
 //    echo bcrypt(123456);

});
route::get('login','AuthController@login')->name('login');
route::post('signin','AuthController@signin')->name('signin');
route::get('logout','AuthController@signin')->name('logout');
route::get('dashboard','Authcontroller@dashboard')->name('dashboard');

// customer routes
// add customer routes

route::get('customer','Admin\CustomerController@index')->name('customer.index');
route::get('customer/edit/{id}','Admin\Customercontroller@edit')->name('customer.edit');
route::get('customer/add','Admin\Customercontroller@add')->name('customer.add');



// post cutomer route add customer 
route::post('customer/update/{id}','Admin\CustomerController@update')->name('customer.update');
route::post('customer/store','Admin\CustomerController@store')->name('customer.store');


// delete customer

route::delete('customer/delete/{id}','Admin\CustomerController@delete')->name('customer.delete');

