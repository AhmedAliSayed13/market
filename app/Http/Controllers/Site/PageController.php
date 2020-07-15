<?php

namespace App\Http\Controllers\Site;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(){
        $categories=Category::all()->random(4);
        $mostSaleProducts=Product::orderBy('sale_count', 'desc')->get()->take(8);
        $comingProducts=Product::orderBy('created_at', 'asc')->get()->take(8);
        $brands=Brand::all()->random(5);
        $dealProducts=Product::all()->random(9);
        $products=Product::all();
        $productFeatures=Product::where('feature','=',1)->get();
        return view('site.home',compact('categories','productFeatures','mostSaleProducts','comingProducts','brands','dealProducts','products'));
    }
    public function single_product($id){

        $product=Product::find($id);

        return view('site.single-product',compact('product'));
    }
    public function wishlist($id){

        $item=Wishlist::where('user_id','=',auth()->user()->id)->where('product_id','=',$id)->first();
        if(!empty($item)){
            $item->delete();
            return response()->json(false);
        }
        $newitem= new Wishlist();
        $newitem->user_id=auth()->user()->id;
        $newitem->product_id=$id;
        $newitem->save();
        return response()->json(true);



    }
    public function search(){


        return view('site.search');


    }
}
