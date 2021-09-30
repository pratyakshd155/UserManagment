<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/login',[CustomAuthController::class,"Login"])->middleware('islogged');
// Route::get('/registration',[CustomAuthController::class,"Registration"])->middleware('islogged');
Route::get('/registration',[CustomAuthController::class,"Registration"]);
Route::post('/register-user',[CustomAuthController::class,"RegisterUser"])->name('register-user');
Route::post('/role-user',[CustomAuthController::class,"roleuser"])->name('role-user');
Route::post('/login-user',[CustomAuthController::class,"loginUser"])->name('login-user');
Route::get('/deshboard',[CustomAuthController::class,"deshboard"])->middleware('islogin');
Route::get('/logout',[CustomAuthController::class,"logout"]);
Route::get('delete/{id}',[CustomAuthController::class,"delete"]);  
Route::get('edit/{id}',[CustomAuthController::class,"showdata"]);  
Route::post('edit',[CustomAuthController::class,"update"]);  
Route::get('Show/{id}',[CustomAuthController::class,"visual"]); 
Route::get('/CreateRole',[CustomAuthController::class,"crtrole"]);
Route::get('newrole',[CustomAuthController::class,"enterrole"]); 
Route::get('rolesmanagment',[CustomAuthController::class,"rolemanage"]); 
Route::get('deleterole/{id}',[CustomAuthController::class,"deleterole"]); 
