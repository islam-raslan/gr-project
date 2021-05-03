<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customercontroler;
use App\Http\Controllers\admin;
use App\Http\Controllers\adminDBcontroller;
//use App\Http\Controllers\sliderController;
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
    
    
    //dashBord route
    Route::view('adminDashbord','adminDashBord');
    Route::get('adminDashbord',[adminDBcontroller::class,'show']);
    Route::post('adminDashbord',[adminDBcontroller::class,'addData']);
        //Route::put('adminDashbord/update',[adminDBcontroller::class,'update']);
        // Route::get('/test', function () {
    //     return view('test', ['name' => "hi"]);
    // });

    //Route::put('test',[adminController::class,'update']);
    //Route::get('admin',[sliderController::class,'showslider']);
    
    
    
    
    
    
    
    
    //login route
//     //Route::post("user",[UserAuth::class,'userLogin']);
//     Route::view("/loginPage",'loginPage');
//     Route::view("/islam",'islam');



//     //sginup route
//     Route::post('/loginPage',[customercontroler::class,'AddCustomer']);
// //    Route::post('/loginPage','customercontroler@AddCustomer');


