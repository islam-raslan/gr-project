<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customercontroler;
use App\Http\Controllers\admin;
//use app\Http\Controllers\userAuth;


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
         return view('home');
        }); 

    Route::view('signup','logInPage');
    Route::post('signup', [Customercontroler::class, 'AddCustomer']);
    //Route::view('islam', 'islam');

    Route::view('home','home');
    Route::view('customer_login','CustomerLogIn');

    //admin route
    Route::post('admin/login',[admin::class,'login']);
    Route::view('admin/login','adminLogeIn');
     
    
    //sgin route
    Route::post('customer_login',[Customercontroler::class,'coustomerLogin']);
    
    
   
    
    
    
    
    
    
    
    //login route
//     //Route::post("user",[UserAuth::class,'userLogin']);
//     Route::view("/loginPage",'loginPage');
//     Route::view("/islam",'islam');



//     //sginup route
//     Route::post('/loginPage',[customercontroler::class,'AddCustomer']);
// //    Route::post('/loginPage','customercontroler@AddCustomer');


