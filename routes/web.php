<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\CalculateTotalCost;

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
    CalculateTotalCost::dispatch();
    return view('livewire.orderResume');
})->name("orderResume");

Route::get('/OrderDetail', function () {
    return view('livewire.orderDetail');
})->name("OrderDetail");

Route::get('/ProductList', function () {
    return view('livewire.productList');
})->name("ProductList");