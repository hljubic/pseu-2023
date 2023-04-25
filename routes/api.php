<?php

use App\Http\Controllers\GradController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/gradovi/dodaj', [GradController::class, 'create']);
Route::post('/gradovi/uredi/{id}', [GradController::class, 'edit']);
Route::get('/gradovi/dohvati', [GradController::class, 'index']);
Route::get('/gradovi/izbrisi/{id}', [GradController::class, 'destroy']);


Route::get('/prva_ruta', function() {
    return 'Dobar dan.';
});

Route::get('/kvadriraj/{broj}', function($broj) {
    return $broj * $broj;
});

Route::get('/zbroji/{broj1}/{broj2}', function($broj1, $broj2) {
    return $broj1 + $broj2;
});

// localhost:8000/api/pretvori_datum/2020-06-15
Route::get('/pretvori_datum/{datum}', function($datum) {
    \Carbon\Carbon::setLocale('hr');
    return \Carbon\Carbon::parse($datum)->diffForHumans(\Carbon\Carbon::now());
});

