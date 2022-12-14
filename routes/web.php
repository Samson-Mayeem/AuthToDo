<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAuth;

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
    return "welcome";
}); 

Route::get('/login', [ControllerAuth::class, "auth.login"]);
Route::get('/register', [ControllerAuth::class, "auth.register"]);
