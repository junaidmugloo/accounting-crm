<?php

use App\Http\Controllers\Accounts;
use App\Http\Controllers\BankController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/addbank', function () {
    return view('addbank');
});

Route::get('/addtransfer', function () {
    return view('createtransfer');
});
Route::get('/transferlist', function () {
    return view('transferlist');
});
Route::get('/all', [Accounts::class, 'index']);
Route::post('/store', [Accounts::class, 'store']);

//bank routing
Route::post('/store', [BankController::class, 'store']);
Route::get('/banklist', [BankController::class, 'index']);
//end bank routing