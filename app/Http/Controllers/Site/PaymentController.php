<?php

namespace App\Http\Controllers\Site;

use App\Models\Order;
use App\Models\Order_product;
use Carbon\Carbon;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
//    public function getCheckoutId1($total){
//        $cards = Cart::getContent();
//        $condition = Cart::getCondition('shipping');
//        $conditionCoupon = Cart::getCondition('coupon');
//        return view('site.checkout',compact('cards','condition','conditionCoupon'));
//    }
    public function getPaymentId(){
        $url = "https://test.oppwa.com/v1/checkouts";
        $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
            "&amount=".Cart::getTotal().
            "&currency=EUR" .
            "&paymentType=DB";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $res=json_decode($responseData,true);
        $id=$res['id'];
        return $id;
    }
    public function getCheckoutId(){
      $id=$this->getPaymentId();
        $cards = Cart::getContent();
        $condition = Cart::getCondition('shipping');
        $conditionCoupon = Cart::getCondition('coupon');
        return view('site.checkout',compact('cards','condition','conditionCoupon','id'));
    }
    public function paymentCheckout(Request $request){
        $validatedData = $request->validate([
            'id' => ['required'],
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
            'country' => ['required'],
            'district' => ['required'],
            'nid' => ['required'],
        ]);
        $id=$this->getPaymentId();
        $name=$request->name;
        $phone=$request->phone;
        $email=$request->email;
        $address=$request->address;
        $country=$request->country;
        $district=$request->district;
        $nid=$request->nid;
        $orderInformation=array('name'=>$name,'phone'=>$phone,'email'=>$email,'address'=>$address,'country'=>$country,'district'=>$district,'nid'=>$nid,'payment_id'=>$id);
        Session::put('orderInformation', $orderInformation);
        $cards = Cart::getContent();
        $condition = Cart::getCondition('shipping');
        $conditionCoupon = Cart::getCondition('coupon');
        return view('site.payment',compact('cards','condition','conditionCoupon','id'));
    }
    public function paymentSave(Request $request){

        $cards = Cart::getContent();
        $condition = Cart::getCondition('shipping');
        $conditionCoupon = Cart::getCondition('coupon');
        $id=$request->id;
            $payment_status=$this->getPaymentStatus($id);
        if(!empty($payment_status['id'])){
            $success="success process payment";
            $orderInformation=Session::get('orderInformation');
             $order=$this->SaveOrder($orderInformation);
             if(!empty($order)){
                 return redirect(url('confirmation/'.$order->id));
             }

        }
        else{
            $error="Fail process payment";
            $id=$this->getPaymentId();
            return view('site.payment',compact('error','cards','condition','conditionCoupon','id'));
        }


    }

    private function getPaymentStatus($id)
    {

        $url = "https://test.oppwa.com/v1/checkouts/".$id."/payment";
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $responseData = curl_exec($ch);
            if(curl_errno($ch)) {
                return curl_error($ch);
            }
            curl_close($ch);
        return (array) json_decode($responseData,true);


    }
    private function SaveOrder($orderInformation){
        $order=new Order();
        $order->total_quantity=Cart::getTotalQuantity();
        $order->total_price=Cart::getTotal();
        $order->name=$orderInformation['name'];
        $order->address=$orderInformation['address'];
        $order->governorate=$orderInformation['country'];
        $order->district=$orderInformation['district'];
        $order->phone=$orderInformation['phone'];
        $order->email=$orderInformation['email'];
        $order->nid=$orderInformation['nid'];
        $order->payment_id=$orderInformation['nid'];
        $order->payment_id=$orderInformation['payment_id'];
        $order->payed_date=Carbon::now()->format('Y-m-d');
        $shipping=Cart::getCondition('shipping');
        if($shipping->getAttributes()['type']=='fast'){
            $order->delivery_date=Carbon::now()->addDays(6)->format('Y-m-d');
            $order->shipping_id=3;
        }
        elseif($shipping->getAttributes()['type']=='standard'){
            $order->delivery_date=Carbon::now()->addDays(3)->format('Y-m-d');
            $order->shipping_id=2;
        }else{
            $order->delivery_date=Carbon::now()->addDays(1)->format('Y-m-d');
            $order->shipping_id=1;
        }
        $order->payed=1;
        $order->user_id=auth()->user()->id;
        $coupon=Cart::getCondition('coupon');
        if(!empty($coupon)){
            $order->voucher_id=$coupon->getAttributes()['id'];
        }
        $order->save();
        $cards = Cart::getContent();
        foreach ($cards as $card){
            $order_product=new Order_product();
            $order_product->product_id=$card->associatedModel['id'];
            $order_product->order_id=$order->id;
            $order_product->quantity=$card->quantity;
            $order_product->price=$card->price;
            $order_product->save();
        }
        return $order;
    }
}
