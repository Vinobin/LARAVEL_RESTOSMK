<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AuthController extends controller{
public function index(){
    $pelanggan=pelanggan::paginate(1);
    return view('backend.pelanggan.select',['pelanggans'=>$pelanggans]);
}
public function show($idpelanggan){
    $pelanggan=pelanggan::where('idpelanggan',$idpelanggan)->first();
    if ( $pelanggan->aktif==0) {
       $status=1;
    }else{
        $status=0;
    pelanggan::where('idpelanggan'.$idpelanggan)->update(['aktif'=>$status]);
    return redirect('admin/pelanggan');
}
}}