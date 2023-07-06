<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/services',[FrontController::class,'services'])->name('services');
Route::get('/portfolio',[FrontController::class,'portfolio'])->name('portfolio');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/blog/{id}',[FrontController::class,'blogid'])->name('blogid');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/portfolio/{id}',[FrontController::class,'showportfolio'])->name('portshow');
Route::get('/services/{id}',[FrontController::class,'servicesid'])->name('servicesid');
Route::get('/footer',[FrontController::class,'footer'])->name('footer');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/lang/{lang}',function($lang){

    session(['lang'=>$lang]);
    return back();
});