<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;

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

Route::get('/', [BaseController::class, 'Home']);

Route::get('/customer/edit/{customer_id}', [BaseController::class, 'Edit']);
Route::post('/customer/edit/{customer_id}', [BaseController::class, 'update']);

Route::get('/customer/create', [BaseController::class, 'Add']);
Route::post('/customer/create', [BaseController::class, 'Create']);

 