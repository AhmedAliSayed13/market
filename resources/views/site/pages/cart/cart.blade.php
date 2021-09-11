@extends('site.layout.master')
@section('title', 'cart ')
@section('custom-style')

@endsection
@section('content')
    <div class="cart-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-steps">
                        <ul>
                            <li class="active"><span> 1 </span> أضافة العناصر</li>
                            <li><span> 2 </span> الشحن</li>
                            <li><span> 3 </span> نجاح </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="body-steps">
                        <div class="row">
                            <div class="col-12">
                                <div class="body-title">
                                    <span> عربة التسوق ( 3 ) </span>
                                </div>
                            </div>
                            <div class="col-8 products">
                                <div class="item">
                                    <img src="{{ asset('img/uploads/product/slide1.png') }}" alt="">
                                    <div class="details">
                                        <button class="remove"><i class="fa fa-trash"></i></button>
                                        <p>كنبة بثلاث مقاعد ازرق غامق</p>
                                        <p class="price">6660 <span>جنية </span></p>
                                        <div class="counter">
                                            <button class="btn plus"> <i class="fa fa-minus"></i> </button>
                                            <span class="num">1</span>
                                            <input class="product_num" name="product_num" value="1" type="hidden">
                                            <button class="btn minus">  <i class="fa fa-plus"></i> </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('img/uploads/product/slide1.png') }}" alt="">
                                    <div class="details">
                                        <button class="remove"><i class="fa fa-trash"></i></button>
                                        <p>كنبة بثلاث مقاعد ازرق غامق</p>
                                        <p class="price">6660 <span>جنية </span></p>
                                        <div class="counter">
                                            <button class="btn plus"> - </button>
                                            <span class="num">0</span>
                                            <input class="product_num" name="product_num" value="0" type="hidden">
                                            <button class="btn minus"> + </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 summery">
                                <h6>أجمالى الطلب</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                        <p class="price">6660 <span> * 1</span></p>
                                    </div>
                                    <div class="col-8">
                                        <p>كنبة بثلاث مقاعد ازرق غامق</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="price">5000 <span> * 1</span></p>
                                    </div>
                                    <div class="col-8">
                                        <p>كنبة بثلاث مقاعد ازرق غامق</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="price">2000 <span> * 1</span></p>
                                    </div>
                                    <div class="col-8">
                                        <p>كنبة بثلاث مقاعد ازرق غامق</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="offer">الشحن مجانا لاى مكان</p>
                                </div>
                                <hr>
                                <p class="total">الاجمالى : 6660 <span>جنية </span></p>
                                <a href="{{ route('checkout.create_step_one') }}" class="btn btn-primary">متابعة الى الشراء</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>

// COUNTER PLUS AND MINUS
$(document).on('click','.counter .btn',function (e) {
    e.preventDefault();
    var count = $(this).parent(),
    num = $(this).siblings(".num"),
    i = parseInt(num.text(), 10);

    if ($(this).hasClass("plus")) {
        if (i === 0) {
            i = i + 1;
            count.removeClass("shrink");
            num.fadeIn();
            num.text(i);
            $('.product_num').val(1);
        } else {
            i = i + 1;
            num.text(i);
            $('.product_num').val(i);
        }
    } else {
        if (i === 1) {
            i = i - 1;
            count.addClass("shrink");
            // num.fadeOut();
            num.text(i);
            $('.product_num').val(0);
        } else if (i > 1) {
            i = i - 1;
            num.text(i);
            $('.product_num').val(i);
        }
    }
});

</script>

@endsection
