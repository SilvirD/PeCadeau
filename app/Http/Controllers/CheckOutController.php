<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Exception;

session_start();

class CheckOutController extends Controller
{
    public function login_checkout(){
        $product = DB::table('product')->where('prod_quantity','>','0')->orderBy('prod_id','desc')->get();
        $category = DB::table('category')->orderBy('cate_id','desc')->get();

        return view ('pages.checkout.login_checkout')->with('product',$product)->with('category',$category);  
    }

    public function logout_checkout(){
        Session::flush();
        return Redirect::to('/login-checkout');
    }

    public function add_customer(Request $request){
        $data = array();
        $data['username'] = $request->acc_username;
        $data['password'] = ($request->acc_password);
        $data['acc_name'] = $request->acc_name;
        $data['acc_email'] = $request->acc_email;
        $data['acc_contact'] = $request->acc_phone;
        $data['perm_id'] = "2";

        try{
            $customer_id = DB::table('account')->insertGetId($data);

            Session::put('acc_id',$customer_id);
            Session::put('acc_name',$request->acc_name);
        }
        catch(Exception $exception){
            return back()->withError('Username "' . $request->acc_username . '" already exist. Please try again!')->withInput();
        }

        return Redirect::to('/checkout');

    }

    public function login_customer(Request $request){
        $email = $request->email_account;
        $password = $request->password_account;
        $result = DB::table('account')->where('acc_email',$email)->where('password',$password)->first();

        if($result){
            Session::put('acc',$result);
            Session::put('acc_id',$result->acc_id);
            return Redirect::to('/checkout');
        }
        else{
            // return Redirect::to('/login-checkout');
            return back()->withError('Username or password is incorrect. Please try again!')->withInput();
        }
    }


    public function checkout(){
        $product = DB::table('product')->where('prod_quantity','>','0')->orderBy('prod_id','desc')->get();
        $category = DB::table('category')->orderBy('cate_id','desc')->get();

        return view ('pages.checkout.show_checkout')->with('product',$product)->with('category',$category);
    }

    public function save_checkout_customer(Request $request){

        $data = array();
        $data['deli_date'] = Carbon::now();
        $data['deli_name'] = $request->deli_name;
        $data['deli_address'] = $request->deli_address;
        $data['deli_email'] = $request->deli_email;
        $data['deli_phone'] = $request->deli_phone;
        $data['deli_note'] = $request->deli_note;

        $delivery_id = DB::table('delivery')->insertGetId($data);

        Session::put('deli_id',$delivery_id);

        return Redirect::to('/payment');
    }

    public function payment(){

    }
    public function infor(){
        return view('pages.infor');
    }
}