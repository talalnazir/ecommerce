<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    function index(){
        $data=Product::all();
        return view('/product',['product'=>$data]);
    }
    function detail($id){
        $data=Product::find($id);
        return view('/detail',['product'=>$data]);
    }
    function search(Request $req){
     $data=Product::Where('name','like','%'.$req->input('query').'%')->get();
     return view('search',['product'=>$data]);
    }
    function addtocart(Request $req){
       if($req->session()->has('user')) {
        $data=new cart;
        $data->user_id=$req->session()->get('user')['id'];
        $data->product_id=$req->product_id;
        $data->save();
        return redirect('');
       }else{
        return redirect('login');
       }
      
    }
    function cartlist()
    {
        $user_id=Session::get('user')['id'];
     $data= DB::table('cart')
      ->join('products','cart.product_id','product_id')
     ->select('products.*','cart.id as cart_id')
     ->where('cart.user_id',$user_id)
     ->get();
     return view('cartlist',['cart'=>$data]);
    }
    function removeCart($id){
       cart::destroy($id);
         return redirect('cartlist');
    }
    function ordernow(){
        $user_id=Session::get('user')['id'];
    $total= DB::table('cart')
      ->join('products','cart.product_id','=','product_id')
     
     ->where('cart.user_id',$user_id)
     ->sum('products.price');
     return view('ordernow',['total'=>$total]);
    }
    function order(Request $req){
      $user_id=Session::get('user')['id'];
      $allcart=cart::where('user_id',$user_id)->get();
      foreach($allcart as $cart){

    $order=new order;
     $order->product_id=$cart['product_id'];
     $order->user_id=$cart['user_id'];
     $order->address=$req->address;
     $order->status='pending';
     $order->payment_method="on delivry";
     $order->payment_status='pending';
     $order->save();
     cart::where('user_id',$user_id)->delete();

      }
     
       return redirect('/');
    }
    function orderlist(){
     $user_id=Session::get('user')['id'];
   $order= DB::table('orders')
     ->join('products','orders.product_id','=','product_id')
    
    ->where('orders.user_id',$user_id)
    ->get();
     return view('orderlist',['order'=>$order]);

    }

}
