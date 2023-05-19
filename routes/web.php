<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 *  definition d'un groupe de route pour tous ce qui à trait avec les voitures
 * */
Route::prefix('voitures')->group(function(){
    Route::get("/", [VoitureController::class, "index"])->name("voitures.index");
    Route::get("/location", [VoitureController::class, "location"])->name("voitures.location");
    // Router::get("/detail", [VoitureController::class, "detail"])->name("voitures.detail");
});

/**
 * definiton d'u groupe de route pour tous ce qui à trait avec le login
 */
Route::prefix("login")->group(function(){
    Route::get("/", [LoginController::class, "connexion"])->name('login.connexion');
    Route::get("/inscription", [LoginController::class, "inscription"])->name("login.inscription");    
});

