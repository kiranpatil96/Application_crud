<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

//create route for show
Route::get('/disp',[EmployeeController::class,'index']);
Route::get('/post-data',[EmployeeController::class,'create']);
Route::post('/post-data',[EmployeeController::class,'store']);
