<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/website_pemain', [PemainController::class,'index']);

//Create
Route::get('/website_pemain/create', [PemainController::class,'create'])->name('membuat_data');

//Store Create
Route::post('/website_pemain', [PemainController::class,'store'])->name('menyimpan_data');

//Update
Route::get('/website_pemain/edit/{idsss}', [PemainController::class, 'edit'])->name('mengedit_data');

//Store Update
Route::post('/website_pemain/update/{id}', [PemainController::class, 'update'])->name('mengupdate_data');

//Delete
Route::post('/website_pemain/delete/{id}', [PemainController::class,'destroy'])->name('menghapus_data');
