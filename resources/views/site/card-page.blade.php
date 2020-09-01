@extends('site.layouts.index')
@section('content')



    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{route('home')}}">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            @include('site.layouts.message')
            <div class="cart_inner">
                <div class="table-responsive">
                    @if(count($cards)>0)
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
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
                                    <form method="post" id="form-update-card-{{$card->id}}" action="{{route('update.card')}}">
                                <td>
                                    <div class="product_count">

                                            @csrf
                                            <input type="hidden" name="id" value="{{$card->id}}" >
                                        <input type="number" name="quantity"  max="12" min="1" value="{{$card->quantity}}" title="Quantity:" class="input-text ">

                                    </div>
                                </td>
                                <td>
                                    <h5>${{$card->getPriceSum()}}</h5>
                                </td>
                                <td>
                                    <a href="{{url('remove-card/'.$card->id)}}" style="color: white" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <button type="submit"  style="color: white;cursor: pointer"  class="btn btn-success"><i class="fa fa-check-circle"></i></button>
                                </td>
                                    </form>
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
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <form action="{{route('cart.condation.update')}}" method="post">
                                            @csrf
                                            <h4>Shipping</h4>
                                            <select name="shipping" class="shipping_select">
                                                <option @isset($condition) {{($condition->getValue()=='+1')?'selected':''}} @endif value="free">Free Shipping $1.00 (in 6 days)</option>
                                                <option @isset($condition){{($condition->getValue()=='+5')?'selected':''}} @endif value="standard">Flat Rate: $5.00 (Standard) (in 3 days)</option>
                                                <option @isset($condition){{($condition->getValue()=='+10')?'selected':''}} @endif value="fast">Flat Rate: $10.00 (Fast) (in 1 day)</option>
                                            </select>
                                            <button style="cursor: pointer" type="submit" class="gray_btn" >Update Details</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bottom_button">
                                <td>
                                    <a class=" btn btn-danger" href="{{route('empty.card')}}">Empty Cart <i class="fa fa-trash"></i></a>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <form action="{{route('cart.coupon')}}" method="post">
                                            @csrf
                                            <input type="text" required  name="code" placeholder="Coupon Code">
                                            @error('code')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <button style="border: none!important;" type="submit" class="primary-btn" >Apply</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @isset($conditionCoupon)
                                        <p><span style="color: #ff6c00">DisCount Type : </span> {{$conditionCoupon->getType()}}</p>
                                        <p><span style="color: #ff6c00">DisCount Name : </span> {{$conditionCoupon->getAttributes()['name']}}</p>
                                        @endisset
                                </td>
                                <td>
                                    @isset($conditionCoupon)
                                        <p><span style="color: #ff6c00">DisCount Code : </span> {{$conditionCoupon->getAttributes()['code']}}</p>
                                        <p><span style="color: #ff6c00">DisCount Value: </span> {{$conditionCoupon->getValue()}}</td>
                                    @endisset
                                </td>
                                <td>
                                    <h2 style="color: #ff6c00">Total </h2>
                                </td>
                                <td>
                                    <h2>${{Cart::getTotal()}}</h2>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="{{route('search')}}">Continue Shopping</a>
                                        <a class="primary-btn" href="{{route('get.checkout.id')}}">Proceed to Order</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @else
                        <h2>no Product</h2>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->



@endsection
