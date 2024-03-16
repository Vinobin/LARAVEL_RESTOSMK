<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CartController extends Controller{
    public function index (){
        $orders=order::join('pelanggans','orders.idpelanggan','=','pelanggans.idpelanggan')
        ->select('orders.*','pelanggans.*')
        ->orderby('status','ASC')
        ->paginate(2);
        return view('backend.order.select',['order'=>$orders]);
    }
public function show($idorder){
   $order=order::where('idorder',$idorder)->first();
   return view('backend.order.update',['order'=>$order]);
}
public function update(request $request, $idorder){
    $data=$request->validate([
        'bayar'=>'required'
      ]);
      $kembalis=order::where('idorder',$idorder)->first();
      $kembali=$data['bayar']-$kembali->total;
      order::where('idorder',$idorder)->update([
          'bayar'=>$data['bayar'],
          'kembali'=>$kembali,
          'status'=>1,
      ]);
      return redirect('admin/order');
}
public function edit($idorder){
    $orders=order::join('order_details','orders.idorder','=','order_details.idorder')
    ->join('menus','order_details.idorder','=','menus.idmenu')
    ->join('pelanggans','orders.idpelanggan','=','pelanggans.idpelanggan')
    ->where('orders.idorder',$idorder)
        ->get('orders.*','order_details.*','menus.*','pelanggans.*');
       
        return view('backend.order.detail',['order'=>$orders]);
}
}