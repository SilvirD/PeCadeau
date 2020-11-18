<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();

class CartController extends Controller
{
   public function save_cart (Request $request){
        $product_id = $request->prodid_hidden;
        $quantity = $request->prod_qty;
      
        $product_info = DB::table('product')->where('prod_id',$product_id)->first();
               
        $data['id'] = $product_info->prod_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->prod_name;
        $data['price'] = $product_info->prod_price;
        $data['weight'] = $product_info->prod_price;
        $data['options'] ['image'] = $product_info->thumbnail;
        $data['options'] ['maxx'] = $product_info->prod_quantity;

        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('/show-cart');
   }

   public function show_cart(){
        $product = DB::table('product')->where('prod_quantity','>','0')->orderBy('prod_id','desc')->get();
        $category = DB::table('category')->orderBy('cate_id','desc')->get();



        return view ('pages.cart.show_cart')->with('product',$product)->with('category',$category);
   }

   public function delete_item_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
   }

   public function update_cart_quantity(Request $request){
          $rowId = $request->rowId_cart;
          $qty = $request->cart_quantity;
          Cart::update($rowId,$qty);
          return Redirect::to('/show-cart');

   }
}
