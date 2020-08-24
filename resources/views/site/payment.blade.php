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
            @isset($error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> A <a href="#" class="alert-link">problem</a> {{ $error }}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endisset
            @isset($success)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong>  {{ $success}}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endisset


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>

                @foreach( $cards as $card)
                    <tr>
                        <td>
                            <div class="media">
                                <div class="d-flex">
                                    <img height="50px" src="{{asset('')}}images_upload/{{$card->associatedModel['image']}}" alt="">
                                </div>
                                <div class="media-body">
                                    <p>{{$card->name}}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>${{$card->price}}</h5>
                        </td>
                        <td>
                            <h5>X{{$card->quantity}}</h5>
                        </td>
                        <td>
                            <h5>${{$card->getPriceSum()}}</h5>
                        </td>

                    </tr>

                @endforeach




                <tr class="shipping_area">
                    <td>
                        <p><span style="color: #ff6c00">Total Product Price : </span> $ {{Cart::getSubTotal()}}</p>
                        @isset($condition)
                            <p><span style="color: #ff6c00">Shipping Value : </span> $ {{$condition->getValue()}}</p>
                        @endisset
                        @isset($conditionCoupon)
                            <p><span style="color: #ff6c00">Discount Value : </span> {{$conditionCoupon->getValue()}} (-{{$conditionCoupon->getCalculatedValue(Cart::getSubTotal())}})</p>
                        @endisset
                    </td>
                    <td>

                    </td>
                    <td>
                        <h2 style="color: #ff6c00">Total </h2>
                    </td>
                    <td>
                        <h2>${{Cart::getTotal()}}</h2>
                    </td>
                </tr>

                </tbody>
            </table>

                <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>

                        <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$id}}"></script>
                        <form action="{{route('payment.save')}}" class="paymentWidgets" data-brands="VISA MASTER MADA"></form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order Information</h2>
                            <ul class="list list_2">
                                <li><a href="#">name  <span class="last">{{Session::get('orderInformation')['name']}}</span></a></li>
                                <li><a href="#">phone  <span class="last">{{Session::get('orderInformation')['phone']}}</span></a></li>
                                <li><a href="#">email  <span class="last">{{Session::get('orderInformation')['email']}}</span></a></li>
                                <li><a href="#">address  <span class="last">{{Session::get('orderInformation')['address']}}</span></a></li>
                                <li><a href="#">country  <span class="last">{{Session::get('orderInformation')['country']}}</span></a></li>
                                <li><a href="#">National Id  <span class="last">{{Session::get('orderInformation')['nid']}}</span></a></li>
                                <li><a href="#">district  <span class="last">{{Session::get('orderInformation')['district']}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

@endsection
