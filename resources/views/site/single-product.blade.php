@extends('site.layouts.index')
@section('content')


    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Product Details Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{route('home')}}">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">product details</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_Product_carousel">
                        @foreach($product->images as $imageItem)
{{--                            <h1>{{$imageItem->image}}</h1>--}}
                        <div class="single-prd-item">
                            <img class="img-fluid" src="{{asset('')}}images_upload/{{$imageItem->image}}" alt="">
                        </div>
                            <div class="single-prd-item">
                            <img class="img-fluid" src="{{asset('')}}images_upload/{{$imageItem->image}}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{$product->name}}</h3>
                        <h2>{{$product->price}} $</h2>
                        <ul class="list">
                            <li><a class="active" href="#"><span>Category</span> : {{$product->category->name}}</a></li>
                            <li><a href="#"><span>Availibility</span> : {{$product->available()}}</a></li>
                        </ul>
                        <p>{{$product->describe}}</p>




                        <div class="card_area d-flex align-items-center">
                            <form STYLE="display: inline" method="post" action="{{route('add.card')}}">
                                @csrf
                                <input name="id" type="hidden" value="{{$product->id}}">
                                <input name="name" type="hidden" value="{{$product->name}}">
                                <input name="price" type="hidden" value="{{$product->price}}">
                                <input name="quantity" type="hidden" value="1">
                                <button @if(auth()->check()) type="submit" @else onclick="showlogin()" @endif style="cursor: pointer;text-align: left;background-color: transparent!important;border-color: transparent!important;"  >
                                    <a class="primary-btn" href="#">Add to Cart</a>
                                </button>
                            </form>
                            <a class="icon_btn {{ ($product->checkLiked()  === true) ? 'liked' : '' }}" style="cursor: pointer;" @if(auth()->check()) onclick="wishlist({{$product->id}})" @else onclick="showlogin()" @endif  id="wishlist-{{$product->id}}" >
                                <i class="lnr lnr lnr-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                       aria-selected="false">Specification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
                       aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes
                        and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in
                        Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to
                        London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an
                        officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a
                        job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when
                        showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a
                        child’s painting set for her birthday and it was with this that she produced her first significant work, a
                        half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly
                        named ‘Hangover’ by Beryl’s husband and</p>
                    <p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing
                        more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and
                        the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for
                        more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a
                        streamlined plan of cooking that is more efficient for one person creating less</p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            @foreach($product->attributes as $attribute)
                                <tr>
                                <td>
                                    <h5>{{$attribute->attribute->name}}</h5>
                                </td>
                                <td>
                                    <h5>{{$attribute->value}}</h5>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row total_rate">
                                <div class="col-6">
                                    <div class="box_total">
                                        <h5>Overall</h5>
                                        <h4>{{$product->averageRate()}}</h4>
                                        <h6>({{$product->totalCommentsCount()}} Reviews)</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="rating_list">
                                        <h3>Based on {{$product->totalCommentsCount()}} Reviews</h3>
                                        <ul class="list">
                                            <li><a href="#">
                                                    5 Star
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    {{count($comments->where('rate','=','5'))}}
                                                </a></li>
                                            <li><a href="#">
                                                    4 Star
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star " ></span>
                                                    {{count($comments->where('rate','=','4'))}}
                                                </a></li>
                                            <li><a href="#">
                                                    3 Star
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star " ></span>
                                                    <span class="fa fa-star " ></span>
                                                    <span class="fa fa-star " ></span>
                                                    {{count($comments->where('rate','=','3'))}}
                                                </a></li>
                                            <li><a href="#">
                                                    2 Star
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star " ></span>
                                                    <span class="fa fa-star " ></span>
                                                    <span class="fa fa-star " ></span>
                                                    <span class="fa fa-star " ></span>
                                                    {{count($comments->where('rate','=','2'))}}
                                                </a></li>
                                            <li><a href="#">
                                                    1 Star
                                                    <span class="fa fa-star checked" ></span>
                                                    <span class="fa fa-star " ></span>
                                                    <span class="fa fa-star " ></span>
                                                    <span class="fa fa-star " ></span>
                                                    <span class="fa fa-star " ></span>
                                                    <span class="fa fa-star " ></span>
                                                    {{count($comments->where('rate','=','1'))}}
                                                </a></li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="review_list">
                                @foreach($comments as $comment)
                                    <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img style="height: 70px" src="{{asset('')}}site/upload_img/{{$comment->commented->image}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>{{$comment->commented->name}}</h4>
                                            @for($i=0;$i<5;$i++)

                                            <span class="fa fa-star {{($comment->rate>$i)? 'checked':''}}" id="star" onclick="addStar(this,1)"></span>
                                            @endfor
                                        </div>
                                    </div>
                                    <p>{{$comment->comment}}</p>
                                        <small style="font-weight: bold">{{$comment->created_at }}</small>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4>Add a Review</h4>
                                <p>Your Rating:</p>
                                <ul class="list">
                                    <span class="fa fa-star" id="star1" onclick="addStar(this,1)"></span>
                                    <span class="fa fa-star" id="star2" onclick="addStar(this,2)"></span>
                                    <span class="fa fa-star" id="star3" onclick="addStar(this,3)"></span>
                                    <span class="fa fa-star" id="star4" onclick="addStar(this,4)"></span>
                                    <span class="fa fa-star" id="star5" onclick="addStar(this,5)"></span>
                                </ul>

                                <p>Outstanding</p>
                                <br><span id="reviewErrorRate" style="color: red"></span>
                                <form class="row contact_form" action="{{route('add.review')}}" method="post" id="contactForm" novalidate="novalidate">
                                    @csrf
                                    <input name="rate" type="hidden" id="rateProduct">
                                    <input name="product_id" type="hidden" value="{{$product->id}}" id="rateProduct">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" {{(auth()->check()?'disabled' :'')}} value="{{(auth()->check()?auth()->user()->name:'')}}" placeholder="Your Full name" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" {{(auth()->check()?'disabled' :'')}} placeholder="Email Address" value="{{(auth()->check()?auth()->user()->email:'')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="messageReview" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea>
                                        </div>
                                        <span id="reviewErrorMessage" style="color: red"></span>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button @if(auth()->check()) type="submit" onclick="SubmitReview()" @else onclick="showlogin()" @endif  value="submit" class="primary-btn">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->

    <!-- Start related-product Area -->
    <section class="related-product-area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Deals of the Week</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="{{asset('')}}main/img/r1.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="{{asset('')}}main/img/r2.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="{{asset('')}}main/img/r3.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="{{asset('')}}main/img/r5.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="{{asset('')}}main/img/r6.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="{{asset('')}}main/img/r7.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="{{asset('')}}main/img/r9.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="{{asset('')}}main/img/r10.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="{{asset('')}}main/img/r11.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ctg-right">
                        <a href="#" target="_blank">
                            <img class="img-fluid d-block mx-auto" src="{{asset('')}}main/img/category/c5.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End related-product Area -->
    <script>
       function SubmitReview(){

           $rate=$('#rateProduct').val();
           $message=$('#messageReview').val();
           if($rate == '' || $message == '') {
               if ($rate == '') {
                   $('#reviewErrorRate').append('this field required');
               }
               if ($message == '') {
                   $('#reviewErrorMessage').append('this field required');
               }
               event.preventDefault();
           }

        }
    </script>
@endsection
