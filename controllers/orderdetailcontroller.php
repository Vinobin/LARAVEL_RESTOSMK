<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CartController extends Controller{
    public function index (){
        $details=orderdetail::join('order','order_details.idorder','=','orders.idorder')
        ->join('menus','order_details.idmenu','=','menus.idmenu')
        ->join('pelanggans','orders.idpelanggan','=','peanggans.idpelanggan')
        ->select(['order_details.*','orders.*','menus.*','pelanggans.*'])
        ->paginate(3);
        return view('backend.detail.select',["details"=>$details]);
    }
    public function create (request $request){
        $tglmulai=$request->tglmulai;
        $tglakhir=$request->tglakhir;
        $details=orderdetail::join('order','order_details.idorder','=','orders.idorder')
        ->join('menus','order_details.idmenu','=','menus.idmenu')
        ->wherebetween('orders.tglorder',[$tglmulai,$tglakhir])
        ->join('pelanggans','orders.idpelanggan','=','peanggans.idpelanggan')
        ->select(['order_details.*','orders.*','menus.*','pelanggans.*'])
        ->paginate(3);
        return view('backend.detail.select',["details"=>$details]);
    }
}