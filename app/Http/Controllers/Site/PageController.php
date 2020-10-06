<?php

namespace App\Http\Controllers\Site;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use Session;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home(){
        $categories=Category::all()->random(4);
        $mostSaleProducts=Product::orderBy('sale_count', 'desc')->get()->take(8);
        $comingProducts=Product::orderBy('created_at', 'asc')->get()->take(8);
        $brands=Brand::all()->random(5);
//        $dealorders=Order::where('user_id','!=',null)->take(9);
        $products=Product::all();
        $dealProducts=Product::get()->random(9);

        return view('site.home',compact('categories','dealProducts','mostSaleProducts','comingProducts','brands','dealProducts','products'));
    }
    public function single_product($id){
        $product=Product::find($id);
        $comments=$product->comments;

        return view('site.single-product',compact('product','comments'));
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
    public function popup_login(){
        $email=Request('email');
        $password=Request('password');
        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            return response()->json(true);
        }
        return response()->json(false);
    }
    public function search(){
        $categories=Category::take(7)->get();
        $brands=Brand::take(7)->get();
        $products=Product::paginate(9);
        $dealProducts=Product::get()->random(9);
        return view('site.search',compact('dealProducts','categories','brands','products'));
    }
    public function contact(){
        return view('site.contact');
    }
    public function confirmation($id)
    {
        $order = Order::find($id);
        if (Auth::check()){
            if($order->user_id==auth()->user()->id){
            $items = $order->order_products;

            $coupon = $order->voucher;
            Session::forget('orderInformation');
            Cart::clear();
            return view('site.confirmation', compact('order', 'items', 'coupon'));
            }
        }
        return back();
    }
    public function addReview(Request $request){
        $product=Product::find($request->product_id);
        $user=auth()->user();
        $user->comment($product,$request->message , $request->rate);
        return back();
    }
    public function card_page(){
       $cards = Cart::getContent();
        $condition = Cart::getCondition('shipping');
        $conditionCoupon = Cart::getCondition('coupon');
//       return $cards;
         return view('site.card-page',compact('cards','condition','conditionCoupon'));
    }

}
