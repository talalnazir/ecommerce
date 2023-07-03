<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productcontroller;

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


 Route::get('/logout', function () {
  Session::forget('user');
     return redirect('login');
 });
Route::view('/login','login');
Route::view('/register','register');
Route::post('/register',[UserController::class,'registraion']);
Route::post('login',[UserController::class,'login']);
Route::get('',[productcontroller::class,'index']);
Route::get('detail/{id}',[productcontroller::class,'detail']);
Route::get('search',[productcontroller::class,'search']);
Route::post('/cart',[productcontroller::class,'addtocart']);
Route::get('/cartlist',[productcontroller::class,'cartlist']);
Route::get('removecart/{id}',[productcontroller::class,'removeCart']);
Route::get('ordernow',[productcontroller::class,'ordernow']);
Route::post('order',[productcontroller::class,'order']);
Route::get('orderlist',[productcontroller::class,'orderlist']);















 


 


 
 
 
 


 





 


 












