@extends('site.layouts.index')
@section('content')


	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Search</h1>
					<nav class="d-flex align-items-center">
						<a href="{{route('home')}}">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Search</a>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<!-- End Banner Area -->
	<div class="container-fluid">
		<div class="row">

                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-categories">
                        <div class="head">Browse Categories</div>
                        <ul class="main-categories" id="categories">
                            @foreach($categories as $category)
                            <li class="main-nav-list">
                                <a ><input  class="pixel-radio" style="border-radius: 0px!important;" type="checkbox" name="categoryList" value="{{$category->id}}"> {{$category->name}}<span class="number">({{count($category->products)}})</span></a>
                            </li>
                            @endforeach

                        </ul>
                        <div class="p-2" style="width: 100%;height: 50px;text-align: center" >
                            <a onclick="more_category()" id="more-category" style="color:#ffba00!important;cursor: pointer;"><i class="fa fa-arrow-right"></i>More Category</a>
                        </div>

                    </div>
                    <div class="sidebar-filter mt-50">
                        <div class="top-filter-head">Product Filters</div>
                        <div class="common-filter">
                            <div class="head">Brands</div>
                            <form action="#">
                                <ul id="brands">
                                    @foreach($brands as $brand)
                                        <li class="filter-list"><input  class="pixel-radio" type="radio" id="brand" value="{{$brand->id}}" name="brandList"><label for="apple">{{$brand->name}}<span>({{count($brand->products)}})</span></label></li>
                                    @endforeach
                                </ul>
                            </form>
                            <div class="p-2" style="width: 100%;height: 50px;text-align: center" >
                                <a onclick="more_brand()" id="more-brand" style="color:#ffba00!important;cursor: pointer;"><i class="fa fa-arrow-right"></i>More Brand</a>
                            </div>
                        </div>
                        <div class="common-filter">
                            <div class="head">Color & Size</div>
                                <input type="text" id="colorList" name="colorList" class="form-control">
                        </div>
                        <div class="common-filter">
                            <div class="head">Tags</div>
                            <input type="text" id="tageList" name="sizeList" class="form-control">
                        </div>
                        <div class="common-filter">
                            <div class="head">Price</div>
                            <div class="price-range-area">
                                <div id="price-range"></div>
                                <div class="value-wrapper d-flex">
                                    <div class="price">Price:</div>
                                    <span>$</span>
                                    <div id="lower-value"></div>
                                    <div class="to">to</div>
                                    <span>$</span>
                                    <div id="upper-value"></div>
                                </div>
                            </div>
                        </div>
                        <div  class="common-filter text-center mt-3">
                            <button onclick="search()"   class="primary-btn m-auto align-middle  pr-5 pl-5" style="border:none!important;cursor: pointer;color: white;">Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting">
                            <select name="sortType" id="sortType" onchange="search()">
                                <option value="sale_count">Default sorting</option>
                                <option value="created_at">Date</option>
                                <option value="name">Name</option>
                            </select>
                        </div>
                        <div class="sorting mr-auto">
                            <select name="showNumber" onchange="search()" id="showNumber">
                                <option value="10">Show 10</option>
                                <option value="20">Show 20</option>
                                <option value="50">Show 50</option>
                                <option value="100">Show 100</option>
                                <option value="-1">Show All</option>
                            </select>
                        </div>

                        <div class="pagination">
                            {{$products->links()}}
                        </div>

                    </div>
                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row" id="product-continer">
                            <!-- single product -->
                            @foreach($products as $product)
                            <div class='col-lg-4 col-md-6'>

                                <div class='single-product float-left'>
                                    <img class='img-fluid' style="height: 191px!important;" src='{{asset("")}}images_upload/{{$product->defaultImage()}}' >
                                    <div class='product-details'>
                                        <h6>{{show_title($product->name)}}</h6>
                                        <div class="price">
                                            <h6>${{$product->discount}}</h6>
                                            <h6 class="l-through">${{$product->price}}</h6>
                                        </div>
                                        <div class="price">
                                            @foreach($product->attributes as $attribute)
                                            <h6>{{$attribute->value}}</h6>
                                            @endforeach
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
                            @endforeach
                        </div>
                    </section>
                    <!-- End Best Seller -->

                </div>

		</div>
	</div>

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
                        @foreach($dealProducts as $Product)
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img width="70px" height="70px" src="{{asset("")}}images_upload/{{$Product->defaultImage()}}" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">{{$Product->name}}</a>
                                        <div class="price">
                                            <h6>${{$Product->price}}</h6>
                                            <h6 class="l-through">${{$Product->discount}}</h6>
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

        function more_category() {
            $.ajax({
                type:'GET',
                url: 'ajax/more-category',
                success:function(data) {
                    // $('#categories').empty();
                    $('#categories').append(data);
                    $('#more-category').hide();

                }

            });
        }
        function more_brand() {
            $.ajax({
                type:'GET',
                url: 'ajax/more-brand',
                success:function(data) {
                    $('#brands').append(data);
                    $('#more-brand').hide();

                }

            });
        }
        function search() {
           $sortType=$('#sortType').val();
           $showNumber=$('#showNumber').val();
            $categoryList=[];
            $("input:checkbox[name=categoryList]:checked").each(function () {
                $categoryList.push($(this).val());
            });
            $brand = $("input[name='brandList']:checked").val();
            $color = $("#colorList").val();
            $tag = $("#tageList").val();
            $minPrice=$('#lower-value').text();
            $maxPrice=$('#upper-value').text();
            $.ajax({
                type:'POST',
                url: 'ajax/search',
                data:{
                  'sortType': $sortType,
                  'showNumber': $showNumber,
                  'categoryList': $categoryList,
                  'brand': $brand,
                  'color': $color,
                  'tag': $tag,
                  'minPrice': $minPrice,
                  'maxPrice': $maxPrice,
                    _token: '{!! csrf_token() !!}'
                },
                success:function(data) {
                    $('.pagination').hide();
                    $('#product-continer').empty();
                    $('#product-continer').append(data);


                }

            });
        }



    </script>


@endsection
