@extends('user.layouts.index',['title' => 'Orders'])
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach($orders as $order)
                    <div class="col-md-4 col-lg-4">

                    <!-- Blog Post -->
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img class="img-fluid" src="{{secure_asset('')}}site//img/blog/blog-01.jpg" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="entry-meta meta-item">
                                <li>
                                    <div class="post-author">
                                        <a href="doctor-profile.html"><img src="{{secure_asset('')}}site/upload_img/{{$order->user->image}}" alt="Post Author"> <span>{{$order->user->name}}</span></a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="entry-meta meta-item float-left w-50">

                                <li><i class="far fa-clock"></i>{{$order->payed_date}}</li>
                            </ul>
                            <ul class="entry-meta meta-item float-left w-50">

                                <li><i class="far fa-clock"></i>{{$order->delivery_date}}</li>
                            </ul>
                            <h6 class="blog-title">{{$order->total_price}}$</h6>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
