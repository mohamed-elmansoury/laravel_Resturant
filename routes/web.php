<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('/redirects',[HomeController::class,'redirects']);

Route::get('/showUsers',[UserController::class,'showUsers'])->name('showUsers');
Route::get('/foodMenu',[UserController::class,'foodMenu'])->name('foodMenu');
Route::post('/upLodeFood',[UserController::class,'upLodeFood'])->name('upLodeFood');
Route::get('/deleteUser/{id}',[UserController::class,'deleteUser'])->name('deleteUser');
Route::get('/deleteFood/{id}',[UserController::class,'deleteFood'])->name('deleteFood');
Route::post('/reservation',[UserController::class,'reservation'])->name('reservation');
Route::get('/viewReservation',[UserController::class,'viewReservation'])->name('viewReservation');
Route::get('/viewChefs',[UserController::class,'viewChefs'])->name('viewChefs');

Route::post('/upLodeChefs',[UserController::class,'upLodeChefs'])->name('upLodeChefs');

Route::get('/updateChafe/{id}',[UserController::class,'updateChafe'])->name('updateChafe');

Route::post('/updateChefsFood/{id}',[UserController::class,'updateChefsFood'])->name('updateChefsFood');

Route::get('/deleteChafe/{id}',[UserController::class,'deleteChafe'])->name('deleteChafe');


Route::post('/addCart/{id}',[HomeController::class,'addCart'])->name('addCart');

Route::get('/showCart/{id}',[HomeController::class,'showCart'])->name('showCart');

Route::get('/deleteCartItem/{id}',[HomeController::class,'deleteCartItem'])->name('deleteCartItem');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
