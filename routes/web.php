<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
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

Route::get( '/' , [WelcomeController::class, 'bmi']);


Route::get( 'hello/{name}' ,
    [WelcomeController::class,'greeting'])
    ->where('name', '[A-Za-z]+');

Route::get( 'bmi/{weight?}/{height?}' ,
    [WelcomeController::class,'bmi'])
    ->where(['weight'=>'[0-9]+', 'height'=>'[0-9]']);

