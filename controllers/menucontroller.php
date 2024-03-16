<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CartController extends Controller{
       public function index(){
        $kategoris=kategori::all();

        $menus=menu::join('kategoris','menus.idkategori','=','kategoris.idkategori')->select(['menus.*','kategoris.*'])->paginate(2);
        return view('backend.menu.select',['menus'=>$menu,'kategoris'=>$kategoris]);
       }
       public function select(request $request){
       $id=$request->idkategori;
       $kategoris=kategori::all();

       $menus=menu::join('kategoris','menus.idkategori','=','kategoris.idkategori')
       ->select(['menus.*','kategoris.*'])
       ->where('menus.idkategori',$id)
       ->paginate(2);
       return view('backend.menu.select',['menus'=>$menu,'kategoris'=>$kategoris]);
       }
       public function create(){
        $kategoris=kategori::all();
        return view('backend.menu.insert',['kategoris'=>$kategoris]);
       }
       public function store(request $request){
        $data=$request->validate([
            'gambar'=>'required|max:2048',
            'menu'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required'
        ]);
        $id=$request->idkategori;
        $namagambar=$request->file('gambar')->getClientOriginalName();
        $request->gambar->move(public_path('gambar'),$namagambar);
        menu::create([
            'idkategori'=>$id,
            'menu'=>$data['menu'],
            'deskripsi'=>$data['deskripsi'],
            'harga'=>$data['harga'],
            'gambar'=>$namagambar,
        ]);
      return redirect('admin/menu');
       }
       public function show($idmenu){
        menu::where('idmenu','=',$idmenu)->delete();
        return redirect('admin/menu');
       }
       public function edit($idmenu){
        $kategoris=kategori::all();
        $menu=menu::where('idmenu',$idmenu)->first();
        return view('backend.menu.update',['menu'=>$menu,'kategoris'=>$kategoris]);
       }
     public function update(request $request ,$idmenu){
        $namagambar=$request->file('gambar')->getClientOriginalName();
       
   if (isset($request->gambar)) {
    $data=$request->validate([
        'gambar'=>'required|max:2048',
        'menu'=>'required',
        'deskripsi'=>'required',
        'harga'=>'required'
    ]);
    menu::where('idmenu',$idmenu)->update([
        'menu'=>$data['menu'],
        'deskripsi'=>$data['deskirpsi'],
        'harga'=>$data['harga'],
        'gambar'=>$namagambar,
    ]);
    $request->gambar->move(public_path('gambar'),$namagambar);
   } else {
    $data=$request->validate([
        'menu'=>'required',
        'deskripsi'=>'required',
        'harga'=>'required'
    ]);
    menu::where('idmenu',$idmenu)->update([
        'menu'=>$data['menu'],
        'deskripsi'=>$data['deskirpsi'],
        'harga'=>$data['harga']
    ]);
   }
       return redirect('admin/menu');
     }
}