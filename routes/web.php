<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[frontcontroller::class,'index']);
route::get('/show/{id}',[frontcontroller::class,'show']);
route::get('register',[frontcontroller::class,'register']);
route::login('postregister',[frontcontroller::class,'login']);
route::logout('postregister',[frontcontroller::class,'logout']);
route::post('postregister',[frontcontroller::class,'store']);
route::post('postlogin',[frontcontroller::class,'postlogin']);
route::get('beli/{idmenu}',[CartController::class,'beli']);
route::get('hapus/{idmenu}',[CartController::class,'hapus']);
route::get('tambah/{idmenu}',[CartController::class,'tambah']);
route::get('kurang/{idmenu}',[CartController::class,'kurang']);
route::get('cart}',[CartController::class,'cart']);
route::get('batal}',[CartController::class,'batal']);
route::get('checkout}',[CartController::class,'checkout']);