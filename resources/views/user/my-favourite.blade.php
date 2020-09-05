@extends('user.layouts.index',['title' => 'Orders'])
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 col-lg-4">

                    <!-- Blog Post -->
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img class="img-fluid" src="{{secure_asset('')}}images_upload/{{$product->defaultImage()}}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="entry-meta meta-item">
                                <li>
                                    <div class="post-author">
                                        <a href="doctor-profile.html"><img src="{{secure_asset('')}}site/upload_img/{{auth()->user()->image}}" alt="Post Author"> <span>{{auth()->user()->name}}</span></a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="entry-meta meta-item float-left w-50">

                                <li><i class="fas fa-money-bill-wave"></i> {{$product->price}} $</li><br>

                            </ul>
                            <ul class="entry-meta meta-item float-left w-50">

                                <li><i class="fas fa-align-justify"></i> {{$product->category->name}}</li><br>
                            </ul>
                            <h6 class="blog-title">{{$product->name}}$</h6>
                            <p class="mb-0">{{$product->decribe}}</p>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
