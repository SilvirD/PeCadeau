<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
    	return view('admin_login');
    }
    public function show_dashboard(){
	    return view('admin.dashboard');	

    }
    public function dashboard(Request $require){
        $acc_email = $require->acc_email;
        $password = $require->password;

        $result = DB::table('account')->where('acc_email',$acc_email)->where('password',$password)->first();
        if($result){
            // Session::put('username',$result->acc_name);
            Session::put('acc_name',$result->username);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','User name or passwork is incorrect!');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::TO('/admin');
    }
    // public function add_category()
    // {
    // 	return view('page.layout.addcate');
    // }
}
