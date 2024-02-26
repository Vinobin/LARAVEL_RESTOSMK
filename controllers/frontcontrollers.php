<?php

namespace app\http\controllers;

use illuminate\support\facades\hash;
class frontcontroller extends controller{
    public function index(){
        $kategoris=kategori::paginate(3);
        $menus=menu::all();
        return view('menu',[
            'kategoris'=>$kategoris,
            'menus'=>$menus
        ]);
    }

public function show($id){
    $kategoris=kategori::all();
    $menus=menu::where('idkategori',$id)->paginate(1);
    return view('kategori',[
        'kategoris'=>$kategoris,
        'menus'=>$menus
    ]);
}
public function destroy($id){

}

   public function register(){
    $kategoris=kategori::all();
    return view('register',['kategoris'=>$kategoris]);
   }
}