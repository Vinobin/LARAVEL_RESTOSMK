<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CartController extends Controller{
    public function index (){
        $kategoris=kategori::all();
        return view('backend.kategori.select',['kategoris'=>$kategori]);
    }
    public function store(request $request){
      $data=$request->validate([
        'kategori'=>'required'
      ]);
      kategori::create([
        'kategori'=>$data['kategori']
      ]);
        
    
      return redirect('admin/kategori');
    }
    public function show($idkategori){
      kategori::where('idkategori','=',$idkategori)->delete();
      return redirect('admin/kategori');
    }
    public function edit($idkategori){
        $kategori=kategori::where('idkategori',$idkategori)->first();
        return view('backend.kategori.update',['kategori'=>$kategori]);
    }
    public function update(request $request,$idkategori){
        $data=$request->validate([
          'kategori'=>'required'
        ]);
        kategori::where('idkategori',$idkategori)->update([
            'kategori'=>$data['kategori']
        ]);
        return redirect('admin/kategori');
    }
}