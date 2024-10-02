<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::resource('products',ProductController::class);

Route::get('/', function () {return view('welcome');});

Route::get('hello',function(){return 'xin chào welcome';});


ROute::get('hello/{name?}',function($name='Laravel'){
    return 'Hello '.$name;
})->where('name','[A-Za-z]+');
