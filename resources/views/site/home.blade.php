@extends('site.layout.master')
@section('title', 'Home')
@section('custom-style')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

@endsection
@section('content')

    <header class="home">
        <div class=" single-slider">
            <div class="item">
                <img src="{{ asset('img/uploads/slider/slide1.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('img/uploads/slider/slide2.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('img/uploads/slider/slide3.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('img/uploads/slider/slide4.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('img/uploads/slider/slide5.png') }}" alt="">
            </div>

        </div>
        <div class="prev">
            <span class="fa fa-arrow-right" aria-hidden="true"></span>
        </div>
        <div class="next">
            <span class="fa fa-arrow-left" aria-hidden="true"></span>
        </div>
    </header>
    <section class="best-sales">
        <div class="section-title">
            <h3>أفضل مبيعات</h3>
        </div>
        <div class="section-body">
            <div class="conatiner">
                <div class="best-sales-slider">
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide1.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide3.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide4.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide5.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide1.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="prev">
                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                </div>
                <div class="next">
                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
                </div>
            </div>

        </div>
    </section>
    <section class="search-about text-center">
        <div class="section-title">
            <h3>تسوق حسب ما تبحث عنه</h3>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="item">
                           <img src="{{ asset('img/global/icon.PNG') }}" alt="">
                           <p>المطبخ</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <img src="{{ asset('img/global/icon1.PNG') }}" alt="">
                            <p>الأجهزة المنزلية</p>
                         </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <img src="{{ asset('img/global/icon2.PNG') }}" alt="">
                            <p>الديكور</p>
                         </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <img src="{{ asset('img/global/icon3.PNG') }}" alt="">
                            <p>مساحة العمل</p>
                         </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <img src="{{ asset('img/global/icon4.PNG') }}" alt="">
                            <p>وحدات التخزين</p>
                         </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <img src="{{ asset('img/global/icon5.PNG') }}" alt="">
                            <p>كنب</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="most-watched">
        <div class="section-title">
            <h3>الأكثر مشاهده</h3>
        </div>
        <div class="section-body">
            <div class="conatiner">
                <div class="most-watched-slider">
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide1.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide3.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide4.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide5.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide1.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="prev">
                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                </div>
                <div class="next">
                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
                </div>
            </div>

        </div>
    </section>
    <section class="can-enjoy">
        <div class="section-title">
            <h3> يمكنك التمتع ب</h3>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <div class="item">
                            <img src="{{ asset('img/global/e3.PNG') }}" alt="">
                            <span>توصيل مجانى</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <img src="{{ asset('img/global/e2.PNG') }}" alt="">
                            <span> الدفع نقدا عند الاستلام</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <img src="{{ asset('img/global/e1.PNG') }}" alt="">
                            <span class="request"> اطلب من الموقع أو استلم من اى موزعينا</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new-products">
        <div class="section-title">
            <h3>المنتجات الجديدة</h3>
        </div>
        <div class="section-body">
            <div class="conatiner">
                <div class="new-products-slider">
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide1.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide3.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide4.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide5.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <a href=""><img src="{{ asset('img/uploads/slider/slide1.png') }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                <p class="card-text old-price">560 جنية</p>
                                <p class="card-text new-price">500 جنية</p>
                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="prev">
                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                </div>
                <div class="next">
                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('scripts')
    {{-- <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script> --}}

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(".single-slider").slick({
            dots: true,
            rtl: true,
            infinite: true,
            prevArrow: $('header.home .prev'),
            nextArrow: $('header.home .next'),
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 5000,
        });
        $(".best-sales-slider").slick({
            rtl: true,
            infinite: false,
            prevArrow: $('.best-sales .prev'),
            nextArrow: $('.best-sales .next'),
            speed: 1000,
            autoplay: false,
            autoplaySpeed: 1000,
            slidesToShow: 5,
            slidesToScroll: 5,
        });
        $(".most-watched-slider").slick({
            rtl: true,
            infinite: false,
            prevArrow: $('.most-watched .prev'),
            nextArrow: $('.most-watched .next'),
            speed: 1000,
            autoplay: false,
            autoplaySpeed: 1000,
            slidesToShow: 5,
            slidesToScroll: 5,
        });
        $(".new-products-slider").slick({
            rtl: true,
            infinite: false,
            prevArrow: $('.new-products .prev'),
            nextArrow: $('.new-products .next'),
            speed: 1000,
            autoplay: false,
            autoplaySpeed: 1000,
            slidesToShow: 5,
            slidesToScroll: 5,
        });

    </script>

@endsection
