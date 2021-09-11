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
                                <div class="new-address">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="title">
                                                    إضافة عنوان جديد
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for=""> الاسم الاول <span>*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder=" ادخل الاسم الاول" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for=""> الاسم الثانى <span>*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder=" ادخل الاسم الثانى" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for=""> المنطقة <span>*</span></label>
                                                    <input type="text" class="form-control" placeholder="ادخل المنطقة " required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for=""> المدينة <span>*</span></label>
                                                    <input type="text" class="form-control" placeholder="ادخل المدينة " required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for=""> الهاتف <span>*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="ادخل رقم الهاتف " required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for=""> العنوان بالتفصيل <span>*</span></label>
                                                    <textarea name="" id="" cols="30" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-12 text-right">
                                                <button type="submit">حفظ</button>
                                                <a href="{{ route('checkout.create_step_one') }}"> إلغاء</a>
                                            </div>
                                        </div>
                                    </form>
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
