<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\BrandController;
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

Route::get('/homepage', [DeviceController::class, 'index']);
Route::get('/home/smartphones', [BrandController::class, 'index']);
Route::get('/home/smartphones/{id}', [SmartphoneController::class, 'index'])->name('smartphone.index');

Route::get('/smartphones/create', [SmartphoneController::class, 'create'])->name('smartphones.create');
Route::post('/smartphones/store', [SmartphoneController::class, 'store'])->name('smartphones.store');

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    return view('logout');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
