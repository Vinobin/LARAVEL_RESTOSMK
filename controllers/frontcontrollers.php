<?php

namespace app\http\controllers;

use illuminate\support\facades\hash;
class frontcontroller extends controller{
    public function index(){
        $kategoris=kategori::all();
        $menus=menu::all();
        return view('menu',[
            'kategoris'=>$kategoris,
            'menus'=>$menus
        ]);
    }
}