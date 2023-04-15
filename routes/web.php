<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDetailController;
use App\Http\Controllers\FeeController;
use Illuminate\Support\Facades\DB;
//use Yajra\

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
Route::get('/sd',function(){
    return view('studentdetail');
});
Route::get('/fee',function(){
    return view('fee');
});
Route::post('/store',[StudentDetailController::Class,'store']);
Route::post('/payfee',[FeeController::Class,'store']);

Route::get('/showsd',[StudentDetailController::Class,'index'])->name('showstudentdetail');
Route::get('/showfee',[FeeController::Class,'index'])->name('showfee');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
