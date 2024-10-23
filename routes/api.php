<?php

use App\Http\Controllers\CustomerController;
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

//http://0.0.0.0/api/customers
Route::get('customersList',[CustomerController::class,'getData']);

Route::get('customersCreation',[CustomerController::class,'showForm']);

Route::post('insert',[CustomerController::class,"insert_customer"]);
