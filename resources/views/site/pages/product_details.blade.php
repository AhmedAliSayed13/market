@extends('site.layout.master')
@section('title', 'Product details')
@section('custom-style')
    <link rel="stylesheet" href="{{ asset('site/plugins/lightgallery/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('site/plugins/swiper/css/swiper-bundle.min.css') }}">
@endsection
@section('content')
    <section class="product-details">
        <div class="container_fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="images-slider">
                                <div class="row">
                                    <div class="col-sm-2 all-img">
                                        <div class="swiper-container gallery-thumbs">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/uploads/product/slide1.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/uploads/product/slide2.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/uploads/product/slide3.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/uploads/product/slide4.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/uploads/product/slide5.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-12 full-img">

                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper" id="lightgallery">
                                                <div class="swiper-slide"
                                                    data-src="{{ asset('img/uploads/product/slide1.png') }}">
                                                    <img src="{{ asset('img/uploads/product/slide1.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"
                                                    data-src="{{ asset('img/uploads/product/slide2.png') }}">
                                                    <img src="{{ asset('img/uploads/product/slide2.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"
                                                    data-src="{{ asset('img/uploads/product/slide3.png') }}">
                                                    <img src="{{ asset('img/uploads/product/slide3.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide "
                                                    data-src="{{ asset('img/uploads/product/slide4.png') }}">
                                                    <img src="{{ asset('img/uploads/product/slide4.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"
                                                    data-src="{{ asset('img/uploads/product/slide5.png') }}">
                                                    <img src="{{ asset('img/uploads/product/slide5.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                            <div class="swiper-button-next swiper-button-black"></div>
                                            <div class="swiper-button-prev swiper-button-black"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row popular-products">
                                <div class="col-12">
                                    <h4 class="mt-4 mb-3">المنتجات الشائعة</h4>
                                </div>
                                <div class="col-5">
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
                                <div class="col-5">
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
                                <div class="col-5">
                                    <div class="item mb-3">
                                        <div class="card">
                                            <a href=""><img src="{{ asset('img/uploads/slider/slide2.png') }}"
                                                    class="card-img-top" alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-title"> <a href=""> كرسى </a></h5>
                                                <p class="card-text old-price">560 جنية </p>
                                                <p class="card-text new-price">500 جنية</p>
                                                <a href="#" class="btn btn-primary add-to-card">أضف الى السلة</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
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
                <div class="col-6">
                    <div class="product-data">
                        <h4>
                            ‏202 كنبة بثلاثة مقاعد-أزرق غامق.ARI
                        </h4>
                        <p class="new-price">‏6600 جنيه <span class="alert alert-warning">خصم 29% </span></p>
                        <p class="old-price">9635 جنية </p>
                        <button class="add-to-cart btn btn-primary"> اضف إلى السلة </button>
                        <hr>
                        <h3>معلومات عن المنتج </h3>
                        <ul>
                            <li> التوصيل خلال : 7-10 أيام عمل </li>
                            <li> On Demand : المنتج متاح </li>
                            <li> cm70x 90xالمقاسات : </li>
                            <li> 225 الخامات : خشب زان أحمر، إسفنج سوبر سوفت </li>
                            <li> EG : صنع فى </li>
                            <li> ‏202.SKU : ARI </li>
                        </ul>
                        <hr>
                        <h3>وصف المنتج</h3>
                        <p>مصنوعة من خشب زان أحمر وإسفنج سوبر سوفت كثافة 33. متاح منها قطيفة وكتان</p>

                        <h3>يوجد أيضًا عند</h3>
                        <hr>
                        <h3> القاهرة الكبرى</h3>
                        <h4>:معرض العربى للمعادن الحديثة</h4>
                        <p>.52 شارع جامعة الدول المهندسين في محافظة الجيزة .رقم تليفون معرض العربى للمعادن الحديثة 16336</p>
                        <hr>
                        <p>‏11 شارع عبد الحميد لطفي متفرع من شارع البطل احمد عبدالعزيز بجوار مطعم سبكترا في المهندسين .رقم
                            تليفون معارض ان اند اوت للاثاث 16663</p>
                        <hr>
                        <p>شارع محي الدين ابو العز المتفرع من جامعة الدول بالقرب من محل استقبال للاثاث في المهندسين رقم
                            تليفون معرض بنوكيو للاثاث 01023470503</p>
                        <hr>
                        <p>شارع محي الدين ابو العز المتفرع من جامعة الدول بالقرب من محل استقبال للاثاث في المهندسين رقم
                            تليفون معرض بنوكيو للاثاث 01023470503</p>
                        <hr>
                        <p>الإمام الشافعي أول العاشر من رمضان محافظة القاهرة. رقم تليفون معارض موبليات العاشر 01116679025.
                        </p>
                        <p>‏11 شارع عبد الحميد لطفي متفرع من شارع البطل احمد عبدالعزيز بجوار مطعم سبكترا في المهندسين .رقم
                            تليفون معارض ان اند اوت للاثاث 16663</p>
                        <hr>
                        <p>شارع محي الدين ابو العز المتفرع من جامعة الدول بالقرب من محل استقبال للاثاث في المهندسين رقم
                            تليفون معرض بنوكيو للاثاث 01023470503</p>
                        <hr>
                        <p>شارع محي الدين ابو العز المتفرع من جامعة الدول بالقرب من محل استقبال للاثاث في المهندسين رقم
                            تليفون معرض بنوكيو للاثاث 01023470503</p>
                        <hr>
                        <p>الإمام الشافعي أول العاشر من رمضان محافظة القاهرة. رقم تليفون معارض موبليات العاشر 01116679025.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')

    <script src="{{ asset('site/plugins/swiper/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('site/plugins/lightgallery/js/lightgallery.js') }}"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'));
        // product popup swiper
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            direction: 'vertical',
            spaceBetween: 10,
            slidesPerView: 5,
            loop: true,
            freeMode: true,
            loopedSlides: 5,
            watchSlidesVisibility: true,
            watchSlidesProgress: true
        });

        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            loop: true,
            loopedSlides: 5,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs,
            },
            speed: 1000,
            pagination: {
                el: '.swiper-pagination',
                type: 'progressbar',
            },
        });

        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            loop: true,
            loopedSlides: 5,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs,
            },
            speed: 1000,
            pagination: {
                el: '.swiper-pagination',
                type: 'progressbar',
            },
        });
    </script>

@endsection
