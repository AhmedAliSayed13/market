@extends('site.layouts.index')
@section('content')


    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{route('home')}}">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            @include('site.layouts.message')
            <div class="cupon_area">
                <div class="check_title">
                    <h2>Have a coupon?</h2>
                </div>
                <form action="{{route('cart.coupon')}}" method="post">
                    @csrf

                    <input type="text"   {{(!empty($conditionCoupon))?"value=".$conditionCoupon->getAttributes()['code']."":''}} name="code" required placeholder="Enter coupon code">
                    @error('code')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                <button type="submit" class="tp_btn" href="#">Apply Coupon</button>
                </form>
            </div>
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="{{route('payment.Checkout')}}" method="post" novalidate="novalidate">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" placeholder="First name" class="form-control  @error('name') is-invalid @enderror" id="first" value="{{old('name',auth()->user()->name)}}" name="name">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="number" placeholder="Phone Number" value="{{old('phone','01112912233')}}" name="phone">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" value="{{old('phone',auth()->user()->email)}}" id="email" name="email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text"  placeholder="Address"  class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{old('address','13 alphandy street assuit')}}">
                                @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text"  placeholder="National id"  class="form-control @error('nid') is-invalid @enderror" id="nid" name="nid" value="{{old('nid','123456789')}}">
                                @error('nid')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select @error('country') is-invalid @enderror" name="country">
                                    <option value="Country1">Country1</option>
                                    <option value="Country2">Country2</option>
                                    <option value="Country3">Country3</option>
                                </select>
                                @error('country')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" placeholder="District" class="form-control @error('district') is-invalid @enderror" id="first" value="{{old('district','ABOTIG')}}" name="district">
                                @error('district')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="primary-btn" type="submit">Proceed To Payment <i class="fa fa-credit-card" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                @foreach($cards as $card)
                                    <li><a href="#">{{show_title($card->name)}} <span class="middle">x {{$card->quantity}}</span> <span class="last">${{$card->getPriceSum()}}</span></a></li>
                                @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>$ +{{Cart::getSubTotal()}}</span></a></li>
                                <li><a href="#">Shipping <span>Flat {{$condition->getAttributes()['type']}} : $ {{$condition->getValue()}}</span></a></li>
                                @if(!empty($conditionCoupon))
                                    <li><a href="#">Coupon <span>$ -{{$conditionCoupon->getCalculatedValue(Cart::getSubTotal())}} ({{$conditionCoupon->getValue()}})</span></a></li>
                                @endif
                                <li><a href="#">Total <span>${{Cart::getTotal()}}</span></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

@endsection
