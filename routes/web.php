<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\DeviceserviceController;
use App\Http\Controllers\QueueController;
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

Route::get('/homepage', [DeviceController::class, 'index'])->name('homepage.index');

Route::prefix('/queue')->group(function () {
    Route::get('/create/{id}', [QueueController::class, 'create'])->name('queue.create');
    Route::post('/store', [QueueController::class, 'store'])->name('queue.store');
});

Route::get('/home/smartphones/{id}', [SmartphoneController::class, 'index'])->name('smartphone.index');

Route::prefix('/smartphones')->group(function () {
Route::get('/create', [SmartphoneController::class, 'create'])->name('smartphones.create');
Route::post('/store', [SmartphoneController::class, 'store'])->name('smartphones.store');
Route::get('/{id}/edit', [SmartphoneController::class, 'edit'])->name('smartphones.edit');
Route::put('/{id}/update', [SmartphoneController::class, 'update'])->name('smartphones.update');
});

Route::prefix('/services')->group(function () {
    Route::get('/{id}', [DeviceserviceController::class, 'index'])->name('smartphones.index');
    Route::get('/create', [SmartphoneController::class, 'create'])->name('smartphones.create');
});




Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    return view('logout');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
