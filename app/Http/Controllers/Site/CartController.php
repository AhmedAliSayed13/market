<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use App\Models\Voucher;
use Carbon\Carbon;
use Cart;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function getCart()
    {
        return view('site.pages.cart.cart');
    }
    public function addCart(Request $request)
    {

        $product =Product::find($request->input('id'));
        if(empty($product)) {
            return redirect()->back()->with('error', 'Item Not Found');
        }
        Cart::add(array(
            'id' => uniqid(),
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(

            ),
            'associatedModel' => array(
                'id'=>$product->id,
                'image'=>$product->defaultImage()

            )
        ));
        $condition = Cart::getCondition('shipping');
        if(empty($condition))
        {
            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'shipping',
                'type' => 'shipping',
                'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
                'value' => '+1',
                'attributes' => array( // attributes field is optional
                    'description' => 'free Shipping $1',
                    'type' => 'free'
                )
            ));

            Cart::condition($condition);
        }


        return redirect()->back()->with('success', 'Item added to cart successfully.');
    }
    public function updateCart(Request $request)
    {

        Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
        ));

        return redirect()->back()->with('success', 'Item added to cart successfully.');
    }
    public function emptyCart()
    {
        Cart::clear();

        return redirect()->back()->with('success', 'Item added to cart successfully.');
    }
    public function removeCart($id)
    {
        Cart::remove($id);
        return redirect()->back()->with('success', 'Item added to cart successfully.');
    }
    public function cartCondationUpdate(Request $request)
    {

        Cart::removeCartCondition('shipping');
        if($request->shipping=='fast'){

            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'shipping',
                'type' => 'shipping',
                'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
                'value' => '+10',
                'attributes' => array( // attributes field is optional
                    'description' => 'fast Shipping $10',
                    'type' => 'fast'
                )
            ));
        }
        elseif ($request->shipping=='standard'){
            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'shipping',
                'type' => 'shipping',
                'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
                'value' => '+5',
                'attributes' => array( // attributes field is optional
                    'description' => ' standard Shipping $5',
                    'type' => 'standard'
                )
            ));
        }
        else{

            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'shipping',
                'type' => 'shipping',
                'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
                'value' => '+1',
                'attributes' => array( // attributes field is optional
                    'description' => 'free Shipping $1',
                    'type' => 'free'
                )
            ));
        }
        Cart::condition($condition);
        $condition = Cart::getCondition('shipping');
        return redirect()->back()->with('condition', $condition);
    }
    public function cart_coupon(Request $request){
        $coupon=Voucher::where('code','=',$request->code)->first();
        if(empty($coupon)){
            return redirect()->back()->with('error', 'coupon not found.');
        }
        if($coupon->active==false){
            return redirect()->back()->with('error', 'coupon not active now');
        }
        $now = Carbon::now()->format('Y-m-d');
        $strat=Carbon::parse($coupon->starts_at)->format('Y-m-d');
        $end=Carbon::parse($coupon->expires_at)->format('Y-m-d');
        if (!($now>$strat&&$now<$end)){
            $coupon->active=0;
            $coupon->save();
            return redirect()->back()->with('error', 'coupon  is end date');
        }
        if ($coupon->max_used<=$coupon->count_used){
            $coupon->active=0;
            $coupon->save();
            return redirect()->back()->with('error', 'coupon reach to Maximum used');
        }

        Cart::removeCartCondition('coupon');
        $conditionCoupon = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'coupon',
            'type' => 'coupon',
            'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
            'value' => '-'.$coupon->discount.'%',
            'attributes' => array(
                'name' => $coupon->name,
                'code' => $coupon->code,
                'id' => $coupon->id,
            )
        ));
        Cart::condition($conditionCoupon);
        $conditionCoupon = Cart::getCondition('coupon');
        return redirect()->back()->with('conditionCoupon');
    }
}
