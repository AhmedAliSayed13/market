@extends('site.layout.master')
@section('title', 'Product details')
@section('custom-style')

@endsection
@section('content')
    <div class="filter-product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-nav">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <select  class="form-control">
                                        <option selected value="-1">أختر نوع الاثاث</option>
                                        <option value="">اثاث 1</option>
                                        <option value="">اثاث 2</option>
                                        <option value="">اثاث 3</option>
                                        <option value="">اثاث 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select  class="form-control">
                                        <option selected disabled hidden value="-1">أختر السعر</option>
                                        <option value=""> عشوائى</option>
                                        <option value=""> من الأصغر الى الأكبر</option>
                                        <option value="">من الاكبر الى الاصغر </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select  class="form-control">
                                        <option selected value="-1">أختر اللون</option>
                                        <option value="">اخضر </option>
                                        <option value="">احمر </option>
                                        <option value="">اصفر </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-2">
                                <div class="form-group">
                                    <select  class="form-control">
                                        <option selected value="-1">ترتيب حسب </option>
                                        <option value="">السعر </option>
                                        <option value="">الحرف </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item mb-3">
                                <div class="card">
                                    <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                        <p class="card-text old-price">560 جنية</p>
                                        <p class="card-text new-price">500 جنية</p>
                                        <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')


@endsection
