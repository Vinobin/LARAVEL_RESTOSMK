<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CartController extends Controller{
    public function index (){
        $users=user::all();
        return view('backend.user.select',['users'=>$users]);
    }
    public function create(){
        return view('backend.user.insert');
    }
    public function store(request $request){
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:3',
            
          ]);
          user::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($sata['name']),
            'level'=>$request->level,
          ]);
    }
    public function user($id){
        return $id;
    }
    public function edit($id){
        $user=user::where('id',$id)->first();
        return view('backend.user.update',['user'=>$user]);
    }
    public function update(request $request){
        $data=$request->validate([
            'password'=>'required|min:3'
          ]);
          user::where('id',$id)->update([
              'password'=>bcrypt($data['password'])
          ]);
          return redirect('admin/user');
    }
    public function show($id){
        $users=user::where('id',$id)->get();
        $level=user::where('level',$users[0]['level']);
        $jumlah=$levels->count();
       if ($jumlah==1) {
       session()->flash('pesan','data hanya satu tidk bisa dihapus!')
       } else {
        user::where('id',$id)->delete();
       }
       return redirect('admin/user')
    }
}
