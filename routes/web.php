<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ImageUploadController;
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
//Route Landing Page
Route::get('/', [PagesController::class, 'home']);
Route::get('/service', [PagesController::class, 'service']);
Route::get('/package', [PagesController::class, 'package']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/login', [PagesController::class, 'login']);

//Route Admin Package
Route::get('/adminpackage', [PackageController::class, 'index']);
Route::post('/adminpackage', [PackageController::class, 'store']);
Route::put('/adminpackage/{id}', [PackageController::class, 'edit']);
Route::delete('/adminpackage/{id}', [PackageController::class, 'destroy']);

//Route Admin Service
Route::get('/adminservice', [ServiceController::class, 'index']);
Route::post('/adminservice', [ServiceController::class, 'store']);
Route::put('/adminservice/{id}', [ServiceController::class, 'edit']);
Route::delete('/adminservice/{id}', [ServiceController::class, 'destroy']);
