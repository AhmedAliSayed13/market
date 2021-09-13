<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{

    public function createStepOne(){
        return view('site.pages.cart.stepOne');
    }
    public function add_address(){
        return view('site.pages.cart.add_address');
    }
    public function successCheckout(){
        return view('site.pages.cart.success_checkout');
    }
}
