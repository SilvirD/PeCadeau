<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){

        $product3 = DB::table('product')->where('prod_quantity','>','0')->where('status_id','=','3')->orderBy('prod_id','desc')->simplePaginate(4,['*'],'product3');
        $product2 = DB::table('product')->where('prod_quantity','>','0')->where('status_id','=','2')->orderBy('prod_id','desc')->simplePaginate(4,['*'],'product2');
        $product4 = DB::table('product')->where('prod_quantity','>','0')->where('status_id','=','4')->orderBy('prod_id','desc')->simplePaginate(4,['*'],'product4');
        $category = DB::table('category')->orderBy('cate_id','desc')->get();
        
    	return view('pages.home')->with('product2',$product2)->with('product3',$product3)->with('product4',$product4)->with('category',$category);
    }
    public function detail($prod_id)
    {
     	$product_detail = DB::table('product')->where('prod_id',$prod_id)->orderBy('prod_id','desc')->get();
        $image_product = DB::table('product_image')->orderBy('prod_id','desc')->get();
        $supplier = DB::table('nhacungcap')->orderBy('NCC_id','desc')->get();

        return view('pages.detail')->with('product',$product_detail)->with('product_image',$image_product)->with('supplier',$supplier);
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
        
        $search_product = DB::table('product')->where('prod_name','like','%'.$keywords.'%')->orwhere('prod_desc','like','%'.$keywords.'%')->get();

    	return view('pages.search.search_product')->with('product',$product)->with('category',$category)->with('search_product',$search_product);

    }

    public function all_product(){
        $allproduct = DB::table('product')->where('prod_quantity','>','0')->orderBy('prod_id','desc')->simplePaginate(12,['*'],'product3');;

        return view('pages.allproduct')->with('product',$allproduct);
    }
}
