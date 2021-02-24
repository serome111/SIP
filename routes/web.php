<?php

use App\Http\Controllers\ParentsController;
use App\Http\Controllers\UsersParentsController;
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
    return view('dashboard');
});

Route::resource('cuidador', ParentsController::class);
//asignar cuidador
Route::resource('assing', UsersParentsController::class);
