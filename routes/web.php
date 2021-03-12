<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialiteController;
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
Route::middleware(['guest'])->get('/sign-in/github',[SocialiteController::class,'github']);
Route::middleware(['guest'])->get('/sign-in/github/redirect',[SocialiteController::class,'githubRedirect']);

Route::middleware(['guest'])->get('/sign-in/facebook',[SocialiteController::class,'facebook']);
Route::middleware(['guest'])->get('/sign-in/facebook/redirect',[SocialiteController::class,'facebookRedirect']);

Route::middleware(['auth'])->get('/dashboard',function(){
    return view('dashboard');
});
Route::middleware(['auth'])->get('/changepassword',function(){
    return view('auth.update-password');
});
Route::middleware(['auth'])->get('/createrole',[HomeController::class,'index']
);