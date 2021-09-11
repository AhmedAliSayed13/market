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
                            <li class="active"><span> 2 </span> الشحن</li>
                            <li><span> 3 </span> نجاح </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="body-steps">
                        <div class="row">

                            <div class="col-8 address-section">
                                <div class="header">
                                    <i class="fa fa-truck"></i>
                                    معلومات الشحن
                                </div>
                                {{-- <div class="no-address text-center">
                                    <a href="{{ route('checkout.add_address') }}"><i class="fa fa-plus"></i></a>
                                    <p>لا يوجد عناوين  مسجلة للمستخدم</p>
                                </div> --}}
                                

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

    </script>

@endsection
