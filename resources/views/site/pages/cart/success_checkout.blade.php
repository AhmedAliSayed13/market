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
                            <li class="active"><span> 3 </span> نجاح </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="success-summery text-center">
                        <img src="{{ asset('img/global/success.png') }}" alt="">
                        <p>رقم طلب الشراء</p>
                        <span>531253265</span>
                        <div class="table-layout">
                            <p >تفاصيل العميل</p>
                            <table class="table table-bordered" >
                                <tbody>
                                        <tr>
                                            <th>الاسم</th>
                                            <td>محمد مدحت محمد حسن</td>
                                        </tr>
                                        <tr>
                                            <th>المنطقة او المدينة</th>
                                            <td>مصر الجديده - القاهره</td>
                                        </tr>
                                        <tr>
                                            <th>رقم الهاتف</th>
                                            <td>0114541515</td>
                                        </tr>
                                        <tr>
                                            <th>العنوان بالتفصيل</th>
                                            <td>‏119 شارع عبد العزيز فهمي، مصر الجديدة، القاهرة بجوار الكلية الحربية وأمام مسجد عثمان بن عفان</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>شكرا للشراء من ڤينشي, سوف يتم التواصل معك لتأكيد طلبك</p>
                        <a href="{{ route('home') }}">الذهاب للصفحة الرئيسية</a>
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
