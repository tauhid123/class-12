<?php

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
    return view('welcome');
});

Route::get('/hello',function(){
    $team = ['khalu','alu','faysal'];
    return view('hello',compact('team'));
});

Route::get('/role',[App\http\Controllers\RoleController::class,'addform']);
Route::post('/role/add',[App\http\Controllers\RoleController::class,'storerole']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');