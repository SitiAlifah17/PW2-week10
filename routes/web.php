<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/profil', function () {
    return view('profile');
});

Route::get('/nilai', function () {
    return view('nilai');
   });
   
use App\Http\Controllers\TokoController;




Route::prefix('toko')->group(function(){

 Route::get('/',
    [TokoController::class, 'index']);
 
 Route::get('/detail',
    [TokoController::class, 'detail']);
 
 Route::get('/about',
    [TokoController::class, 'about']);

});


