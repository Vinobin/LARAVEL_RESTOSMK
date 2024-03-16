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
public function store(Reqest $request){
  $data=$request->validate([
    'pelanggan' => 'required',
    'alamat' => 'required',
    'telepon' => 'required',
    'jeniskelamin' => 'required',
    'email' => 'required | email | unique:pelanggans',
    'password' => 'required | min:3',
  ]);
 pelanggan::create([
    'pelanggan' => $data['pelanggan'],
    'jeniskelamin' => $data['jeniskelamin'],
    'alamat' => $data['alamat'],
    'telepon' => $data['telepon'],
    'email' => $data['email'],
    'password' => hash::make($data['password']),
    'aktif' => 1
]);
return redirect('/');
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
   public function register(){
    $kategoris=kategori::all();
    return view('login',['kategoris'=>$kategoris]);
   }
   public function postlogin(Request $request){
        $data=$request ->validate([
            'email'=>'required',
            'password'=>'required |min:3',
        ]);
        $pelanggan=pelanggan::where('email',$data)->where('aktif',1)->first();
        if($pelanggan){
           if(hash::check($data['password'],$pelanggan['password'])){
              $data=[
                'idpelanggan' =>$pelanggan['idpelanggan'],
                'email' =>$pelanggan['email'],
              ];
              $request->session()->put('idpelanggan',$data);
              return redirect('/');
           }else{
            return back()->with('pesan','password salah!');
           }
        }else{
            return back()->with('pesan','email belum terdaftar');
        }
   }
   public function logout (){
    session()->flush();
    return redirect('/');
   }
}