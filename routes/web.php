<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\XmlUploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontragentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentsController;
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

Route::get('/index', [IndexController::class, "index"])->name("index");
Route::get('/xml', [XmlUploadController::class, "index"])->name("xml");
Route::post("/xmlupload", [XmlUploadController::class, "uploadfile"])->name("xmlupload");
Route::post("/login", [LoginController::class, "login"])->name("login");
Route::post("/changeRoles/{id}", [RolesController::class, "changeRoles"])->name("changerole");
Route::get("/kontragents", [KontragentController::class, "index"])->name("kontragents");
Route::get("/mykontragents", [KontragentController::class, "mykontragents"])->name("mykontragents");
Route::get("/kontragent/{kontragent}", [KontragentController::class, "show"])->name("kontragentview");
Route::post("edit/kontragent/{kontragent}", [KontragentController::class, "editkontragent"])->name("kontragentedit");
Route::get("/users", [UserController::class, "index"])->name("users");
Route::get("/user/{user}", [UserController::class, "show"])->name("userview");
Route::post("/edit/user/{user}", [UserController::class, "edituser"])->name("useredit");
Route::get("/payments", [PaymentsController::class, "index"])->name("payments");
