<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class categoryProduct extends Controller
{
    public function add_category(){
    	return view('admin.add_category');
    }

    public function category_product(){
    	$category_product = DB::table('tbl_category_product')->get();
    	$manager_category_product = view('admin.category_product')->with('category_product',$category_product);
    	return view('admin_layout')->with('admin.category_product',$manager_category_product);
    }
    public function save_category_product(Request $require){
    	$data = array();
    	$data['category_name'] = $require->category_product_name;
       	$data['category_desc'] = $require->category_product_desc;
	   	$data['category_status'] = $require->category_product_status;

	   	DB::table('tbl_category_product')->insert($data);
        Session::put('message','Add category product succesfully!');
        return Redirect::to('/add-category');
    }
}
