<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[frontcontroller::class,'index']);
route::get('/show/{id}',[frontcontroller::class,'show']);
route::get('register',[frontcontroller::class,'register']);
