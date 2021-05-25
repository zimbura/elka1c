<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\XmlUploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontragentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProjectStatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::post("/login", [LoginController::class, "login"])->name("login");
Route::get("/logout", [LoginController::class, "logout"])->name("logout");
Route::get("/loginpage", [LoginController::class, "page"])->name("loginpage");

Route::middleware(["auth"])->group( function () {
    // Route::get('/', [IndexController::class, "index"])->name("index");
    // Route::get('/config', [XmlUploadController::class, "index"])->name("config");
    Route::post("/xmlupload", [XmlUploadController::class, "uploadfile"])->name("xmlupload");
    Route::post("/changeRoles/{id}", [RolesController::class, "changeRoles"])->name("changerole");
    // Route::get("/kontragents", [KontragentController::class, "index"])->name("kontragents");
    // Route::get("/mykontragents", [KontragentController::class, "mykontragents"])->name("mykontragents");
    // Route::get("/kontragent/{kontragent}", [KontragentController::class, "show"])->name("kontragentview");
    Route::post("edit/kontragent/{kontragent}", [KontragentController::class, "editkontragent"])->name("kontragentedit");
    // Route::get("/users", [UserController::class, "index"])->name("users");
    // Route::get("/user/{user}", [UserController::class, "show"])->name("userview");
    Route::post("/edit/user/{user}", [UserController::class, "edituser"])->name("useredit");
    // Route::get("/payments", [PaymentsController::class, "index"])->name("payments");

    Route::post("/addstatus", [ProjectStatusController::class, "addstatus"])->name("addstatus");
    Route::post("/editstatus/{status}", [ProjectStatusController::class, "editstatus"])->name("editstatus");

    Route::get('/', [PagesController::class, "index"]);


    // Demo routes
    Route::get('/datatables', [PagesController::class, "datatables"]);
    Route::get('/ktdatatables', [PagesController::class, "ktDatatables"]);
    Route::get('/select2', [PagesController::class, "select2"]);
    Route::get('/jquerymask', [PagesController::class, "jQueryMask"]);
    Route::get('/icons/custom-icons', [PagesController::class, "customIcons"]);
    Route::get('/icons/flaticon', [PagesController::class, "flaticon"]);
    Route::get('/icons/fontawesome', [PagesController::class, "fontawesome"]);
    Route::get('/icons/lineawesome', [PagesController::class, "lineawesome"]);
    Route::get('/icons/socicons', [PagesController::class, "socicons"]);
    Route::get('/icons/svg', [PagesController::class, "svg"]);

    Route::get('/quick-search', [PagesController::class, "quickSearch"])->name('quick-search');

    Route::get("/config", [XmlUploadController::class, "index"])->name("config");
});
