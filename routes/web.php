<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\mysqltableController;
use App\Http\Controllers\select2;
use App\Http\Controllers\scroll;
use App\Http\Controllers\datatableController;
use App\Http\Controllers\apiformController;
use App\Http\Controllers\chartsController;
use App\Http\Controllers\mailController;

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

Route::get('/',[signinController::class,'index'])->name('user.signin');
Route::post('checkuser',[signinController::class,'checkuser'])->name('user.check');
Route::get('/signup',[SignupController::class,'index'])->name('user.signup');
Route::post('/signup/create',[SignupController::class,'create'])->name('user.signup.create');

Route::get('/homepage',[HomepageController::class,'index'])->name('homepage');

Route::get('/mysqltable',[mysqltableController::class,'index'])->name('homepage.mysql');
Route::post('/mysqltablecreate',[mysqltableController::class,'create'])->name('homepage.mysql.create');
Route::get('/mysqltablecreate',[mysqltableController::class,'create'])->name('homepage.mysql.create');
Route::post('/mysqltableupdate',[mysqltableController::class,'update'])->name('homepage.mysql.update');
Route::get('/mysqltableupdate',[mysqltableController::class,'update'])->name('homepage.mysql.update');
Route::post('/mysqltabledelete',[mysqltableController::class,'delete'])->name('homepage.mysql.delete');
Route::get('/mysqltabledelete',[mysqltableController::class,'delete'])->name('homepage.mysql.delete');

Route::get('/select2',[select2::class,'index'])->name('homepage.select2');
Route::post('/selectshow',[select2::class,'show'])->name('homepage.select2.show');
Route::get('/selectshow',[select2::class,'show'])->name('homepage.select2.show');

Route::get('/scroll',[scroll::class,'index'])->name('homepage.scroll');
Route::get('/scroll/getData',[scroll::class,'getData'])->name('homepage.scroll.getData');

Route::get('/datatable',[datatableController::class,'index'])->name('homepage.datatable');
Route::get('/datatable/show',[datatableController::class,'show'])->name('homepage.datatable.show');
Route::get('/datatable/create',[datatableController::class,'create'])->name('homepage.datatable.create');

Route::get('/apiform',[apiformController::class,'index'])->name('homepage.apiform');
Route::get('/apiform/show',[apiformController::class,'show'])->name('homepage.apiform.show');
Route::post('/apiform/create',[apiformController::class,'create'])->name('homepage.apiform.craete');

Route::get('/charts',[chartsController::class,'index'])->name('homepage.charts');

Route::get('/testmail',[mailController::class,'index'])->name('homepage.testmail');
Route::get('/sendmail',[mailController::class],'index')->name('homepage.testmail.sendmail');
