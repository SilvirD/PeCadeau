<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckOutController extends Controller
{
    public function login_checkout(){
        $product = DB::table('product')->where('prod_quantity','>','0')->orderBy('prod_id','desc')->get();
        $category = DB::table('category')->orderBy('cate_id','desc')->get();

        return view ('pages.checkout.login_checkout')->with('product',$product)->with('category',$category);  
    }

    public function add_customer(Request $request){
        $data = array();
        $data['username'] = $request->acc_username;
        $data['password'] = $request->acc_password;
        $data['acc_name'] = $request->acc_name;
        $data['acc_email'] = $request->acc_email;
        $data['acc_contact'] = $request->acc_phone;

        $customer_id = DB::table('account')->insertGetId($data);

        Session::put('acc_id',$customer_id);
        Session::put('acc_name',$request->acc_name);

        return Redirect ('/checkout');

    }

    public function checkout(){

    }
}