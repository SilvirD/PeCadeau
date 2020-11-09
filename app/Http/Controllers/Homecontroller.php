<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        $product = DB::table('product')->where('prod_quantity','>','0')->orderBy('prod_id','desc')->get();
        $category = DB::table('category')->orderBy('cate_id','desc')->get();
        
    	return view('pages.home')->with('product',$product)->with('category',$category);
    }
    public function detail($prod_id)
    {
     	$product_detail = DB::table('product')->where('prod_id',$prod_id)->orderBy('prod_id','desc')->get();
        $image_product = DB::table('product_image')->orderBy('prod_id','desc')->get();

        return view('pages.detail')->with('product',$product_detail)->with('product_image',$image_product);
    }
    public function category_product($cate_id){
        $product_category = DB::table('product')->where('cate_id',$cate_id)->orderBy('prod_id','desc')->get();
        $category = DB::table('category')->orderBy('cate_id','desc')->get();

        
        return view('pages.category')->with('product',$product_category)->with('category',$category);
    }

    public function search(Request $request){

        $keywords = $request->keywords_submit;

        $product = DB::table('product')->where('prod_quantity','>','0')->orderBy('prod_id','desc')->get();
        $category = DB::table('category')->orderBy('cate_id','desc')->get();
        
        

    	return view('pages.search')->with('product',$product)->with('category',$category);

    }
}
