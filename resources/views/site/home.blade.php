@extends('site.layouts.index')
@section('content')
	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Men's Shoes <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="{{route('search')}}"><span class="lnr lnr-unlink"></span></a>
										<span class="add-text text-uppercase">More</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="{{asset("")}}main/img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
                                    <h1>Women's boot <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="{{route('search')}}"><span class="lnr lnr-unlink"></span></a>
										<span class="add-text text-uppercase">More</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="{{asset("")}}main/img/banner/women-img.png" alt="">
								</div>
							</div>
						</div>
                        <!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
                                    <h1>Classic Men's Shoes  <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="{{route('search')}}"><span class="lnr lnr-unlink"></span></a>
										<span class="add-text text-uppercase">More</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="{{asset("")}}main/img/banner/men-img2.png" alt="">
								</div>
							</div>
						</div>
                        <!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
                                    <h1> Women's Shoes  <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="{{route('search')}}"><span class="lnr lnr-unlink"></span></a>
										<span class="add-text text-uppercase">More</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="{{asset("")}}main/img/banner/women_img2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{asset("")}}main/img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{asset("")}}main/img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{asset("")}}main/img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{asset("")}}main/img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" style="height: 191px!important;" src="{{asset("")}}main/img/category/c1.jpg" alt="">
								<a href="{{asset("")}}main/img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">{{$categories[0]->name }}</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" style="height: 191px!important;" src="{{asset("")}}main/img/category/c2.jpg" alt="">
								<a href="{{asset("")}}main/img/category/c2.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">{{$categories[1]->name }}</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" style="height: 191px!important;" src="{{asset("")}}main/img/category/c3.jpg" alt="">
								<a href="{{asset("")}}main/img/category/c3.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">{{$categories[2]->name }}</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" style="height: 191px!important;" src="{{asset("")}}main/img/category/c4.jpg" alt="">
								<a href="{{asset("")}}main/img/category/c5.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">{{$categories[3]->name }}</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="{{asset("")}}main/img/category/c5.jpg" alt="">
						<a href="{{asset("")}}main/img/category/c5.jpg" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Sneaker for Sports</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
                    @foreach($mostSaleProducts as $product)
                        <!-- single product -->
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="{{asset("")}}images_upload/{{$product->defaultImage()}}" alt="">
                                <div class="product-details">
                                    <h6>{{show_title($product->name) }}</h6>
                                    <div class="price">
                                        <h6>${{$product->price}}</h6>
                                        <h6 class="l-through">${{$product->discount}}</h6>
                                    </div>
                                    <div class="prd-bottom">



                                        <form STYLE="display: inline" method="post" action="{{route('add.card')}}">
                                            @csrf
                                            <input name="id" type="hidden" value="{{$product->id}}">
                                            <input name="name" type="hidden" value="{{$product->name}}">
                                            <input name="price" type="hidden" value="{{$product->price}}">
                                            <input name="quantity" type="hidden" value="1">
                                            <button @if(auth()->check()) type="submit" @else onclick="showlogin()" @endif style="cursor: pointer;text-align: left;background-color: transparent!important;border-color: transparent!important;"  >
                                                <a href="#"  class="social-info">
                                                    <p class="hover-text">add to bag</p>
                                                    <span class="ti-bag"></span>
                                                </a>
                                            </button>
                                        </form>


                                        <a style="cursor: pointer;" @if(auth()->check()) onclick="wishlist({{$product->id}})" @else onclick="showlogin()" @endif class="social-info ">
                                            <span id="wishlist-{{$product->id}}" class="lnr lnr-heart {{ ($product->checkLiked()  === true) ? 'liked' : '' }}"></span>
                                            <p class="hover-text">Wishlist</p>
                                        </a>
                                        <a style="cursor: pointer;" href="{{url('single-product/'.$product->id)}}" class="social-info">
                                            <span class="lnr lnr-eye"></span>
                                            <p class="hover-text">More Details</p>
                                        </a>
                                        <a style="cursor: pointer;" href="{{route('search')}}" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
					@endforeach
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Coming Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
                    @foreach($comingProducts as $comingProduct)
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset("")}}images_upload/{{$comingProduct->defaultImage()}}" alt="">
							<div class="product-details">
                                <h6>{{show_title($comingProduct->name) }}</h6>
								<div class="price">
									<h6>{{$comingProduct->price}}</h6>
									<h6 class="l-through">${{$product->discount}}</h6>
								</div>


                                <div class="prd-bottom">



                                    <form STYLE="display: inline" method="post" action="{{route('add.card')}}">
                                        @csrf
                                        <input name="id" type="hidden" value="{{$product->id}}">
                                        <input name="name" type="hidden" value="{{$product->name }}">
                                        <input name="price" type="hidden" value="{{$product->price}}">
                                        <input name="quantity" type="hidden" value="1">
                                        <button @if(auth()->check()) type="submit" @else onclick="showlogin()" @endif style="cursor: pointer;text-align: left;background-color: transparent!important;border-color: transparent!important;"  >
                                            <a href="#"  class="social-info">
                                                <p class="hover-text">add to bag</p>
                                                <span class="ti-bag"></span>
                                            </a>
                                        </button>
                                    </form>


                                    <a style="cursor: pointer;" @if(auth()->check()) onclick="wishlist({{$product->id}})" @else onclick="showlogin()" @endif class="social-info ">
                                        <span id="wishlist-{{$product->id}}" class="lnr lnr-heart {{ ($product->checkLiked()  === true) ? 'liked' : '' }}"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a style="cursor: pointer;" href="{{url('single-product/'.$product->id)}}" class="social-info">
                                        <span class="lnr lnr-eye"></span>
                                        <p class="hover-text">More Details</p>
                                    </a>
                                    <a style="cursor: pointer;" href="{{route('search')}}" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>

                            </div>
						</div>
					</div>
					<!-- single product -->
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

    <!-- Start exclusive deal Area -->
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1>Exclusive Hot Deal Ends Soon!</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row clock-wrap">
                                <div class="col clockinner1 clockinner">
                                    <h1 class="days">150</h1>
                                    <span class="smalltext">Days</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="hours">23</h1>
                                    <span class="smalltext">Hours</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="minutes">47</h1>
                                    <span class="smalltext">Mins</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="seconds">59</h1>
                                    <span class="smalltext">Secs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('search')}}" class="primary-btn">Shop Now</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="active-exclusive-product-slider">
                    @foreach($productFeatures as $productFeature)
                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="{{asset("")}}images_upload/{{$productFeature->defaultImage()}}" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h6>${{$productFeature->price}}</h6>
                                    <h6 class="l-through">${{$productFeature->discount}}</h6>
                                </div>
                                <h4>{{show_title($productFeature->name) }}</h4>
                                <form STYLE="display: inline" method="post" action="{{route('add.card')}}">
                                    @csrf
                                    <input name="id" type="hidden" value="{{$product->id}}">
                                    <input name="name" type="hidden" value="{{ $product->name}}">
                                    <input name="price" type="hidden" value="{{$product->price}}">
                                    <input name="quantity" type="hidden" value="1">


                                <button style="margin-left: auto;margin-right:auto;cursor: pointer;text-align: left;background-color: transparent!important;border-color: transparent!important;" type="submit" class="add-bag d-flex align-items-center justify-content-center">
                                    <b type="submit" class="add-btn" href=""><span class="ti-bag"></span></b>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- single exclusive carousel -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
                @foreach($brands as $brand)
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="{{asset("")}}images_profile/{{$brand->image}}" alt="">
                    <h5 class="m-auto text-center" style="color: #ffba00">{{$brand->name}}</h5>
				</a>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End brand Area -->

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
                        @foreach($dealProducts as $dealProduct)
						    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img width="70px" height="70px" src="{{asset("")}}images_upload/{{$dealProduct->defaultImage()}}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">{{show_title($dealProduct->name) }}</a>
									<div class="price">
										<h6>${{$dealProduct->price}}</h6>
										<h6 class="l-through">${{$dealProduct->discount}}</h6>
									</div>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="{{asset("")}}main/img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->
    <script type="text/javascript">
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });





    </script>
    @endsection
