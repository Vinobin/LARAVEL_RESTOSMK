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
route::get('cart',[CartController::class,'cart']);
route::get('batal',[CartController::class,'batal']);
route::get('checkout',[CartController::class,'checkout']);
route::get('admin',[AuthController::class,'index']);
route::post('admin/postlogin',[AuthController::class,'postlogin']);
route::post('admin/logout',[AuthController::class,'logout']);
route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
route::group(['middleware'=>['ceklogin:admin']],function(){
    route::resource('user',usercontroller::class);
});
route::group(['middleware'=>['ceklogin:kasir']],function(){
    route::resource('order',ordercontroller::class);
});
route::group(['middleware'=>['ceklogin:manager']],function(){
    route::resource('kategori',kategoricontroller::class);
    route::resource('menu',menucontroller::class);
    route::resource('order',ordercontroller::class);
    route::resource('orderdetail',orderdetailcontroller::class);
    route::resource('pelanggan',pelanggancontroller::class);
    route::get('select',[menucontroller::class,'select']);
    route::post('postmenu/{id}',[menucontroller::class,'update']);
});
   
   
   
});
