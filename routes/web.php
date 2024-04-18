<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembreController;


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
// Route::view("list" , "list");
Route::get("list", [MembreController::class,'List'])->name('list');
Route::get("edit", [MembreController::class,'showdata']);
Route::get("delete/{id}", [MembreController::class,'delete']);
Route::get("edit/{id}", [MembreController::class, 'showdata']);
Route::post("edit" , [MembreController::class, 'update']);

Route::get("show-form" , [MembreController::class, 'showForm'])->name("customer.show");
Route::post("store-data" , [MembreController::class, 'storeData'])->name("customer.store");
