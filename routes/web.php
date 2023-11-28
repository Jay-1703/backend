<?php

use App\Http\Controllers\Getbilldatacontroller;
use App\Http\Controllers\Getordersrecordscontroller;
use App\Http\Controllers\Invoicecontroller;
use App\Http\Controllers\Signincontroller;
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

Route::post('/signin', [Signincontroller::class,'Signin']);
Route::post('/bill', [Invoicecontroller::class,'generateBill']);
Route::get('/customersdata', [Getordersrecordscontroller::class,'getCustomersData']);
Route::get('/customersdata/billreview/{id}', [Getbilldatacontroller::class,'getBillData']);
