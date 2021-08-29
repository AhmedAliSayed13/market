@extends('site.layouts.index')
@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>List Categories</h1>
                    <nav class="d-flex align-items-center">
                        <a href="#">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Category</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-4 mt-5">
                    <div class="categories_post">
                        <img src="{{asset('')}}img/category-background.png" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>{{$category->name}}</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>{{show_describe($category->about)}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->



@endsection
