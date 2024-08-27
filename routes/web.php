<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return redirect()->route('register');
});

/* Debut Back-office */
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('Back.main');
    })->name('dashboard');
});
/* Fin Back-office */

/* LienClient */
Route::resource('/backoffice/vente', VenteController::class)->middleware('auth');

 /* DEBUTDeconnexion */
Route::group(['middleware'=>['auth']], function (){
Route::get('/logout',[LogoutController::class, 'perform'])
->name('logout.perform');
});
/* FINDeconnexion */