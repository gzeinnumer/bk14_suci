<?php

use App\Http\Controllers\SiswaController;
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
    //resources/view/welcome.blade.php
    return view('welcome');
});

Route::get('/suci', function () {
    //resources/view/suci/test/index.blade.php
    return view('suci.test.index');
});

//type 1 
Route::get('/siswa', function () {
    //resources/view/suci/test/index.blade.php
    return view('siswa.index');
});

//redi - 3
Route::get('/siswa', [SiswaController::class, 'index']);

//redi - 1
Route::get('/siswa/redi', [SiswaController::class, 'redi']);


Route::get('/siswa/params/{id}', [SiswaController::class, 'params']);

Route::get('/siswa/params2/{id}/{nama}', [SiswaController::class, 'params2']);

Route::get('/siswa/params3', [SiswaController::class, 'params3']);
