<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// create a CRUD app routing
Route::get("/",[CrudController::class,"index"]);
Route::get("/about-us",function(){
    return view('crudapp.about');
});

// contact page routing
Route::get("/contact-us",[ContactController::class,"index"]);
Route::post("/contact-us",[ContactController::class,"store"]);
Route::get("/register",[RegisterController::class,"index"]);
Route::post("/register",[RegisterController::class,"store"]);

// admin routing here
Route::get("/admin-login",[AdminLoginController::class,"index"]);
Route::get("/admin-login/admin-dashboard",[AdminDashboardController::class,"index"]);
Route::get("/admin-login/managecontact",[ContactController::class,"show"]);

Route::post("/admin-login/managecontact/{id}",[ContactController::class,"destroy"]);

// customer routing
Route::get("/admin-login/managecustomer",[RegisterController::class,"show"]);
Route::post("/admin-login/managecustomer/{id}",[RegisterController::class,"destroy"]);