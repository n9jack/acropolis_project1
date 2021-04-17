<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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
    return view('admin.login');
});



Route::get('/admin',[AdminController::class,"index"]);




Route::post('/admin/login',[AdminController::class,"auth"])->name('admin.authsss');





Route::group(['middleware'=>'admin_auth'],function()
{


		Route::get('/admin/dashboard',function () {
		    return view('admin.dashboard');
		});

		Route::post('/user/registration',[UserController::class,"registration"])->name('user.signup'); 

		Route::get('/admin/logout',[AdminController::class,"logout"]);

		Route::get('/admin/users',[UserController::class,"users"]);

		Route::get('/admin/users/delete/{id}',[UserController::class,"users_delete"]);

		Route::get('/admin/users/add',[UserController::class,"users_manage"]);
        
        Route::get('/admin/users/edit/{id}',[UserController::class,"users_manage"]);
        
 

     

});	


