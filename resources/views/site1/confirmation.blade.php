@extends('site.layouts.index')
@section('content')

    <!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="{{route('home')}}">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Confirmation</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<!--================Order Details Area =================-->
	<section id="printableArea" class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span>Order number</span> : {{$order->id}}</a></li>
							<li><a href="#"><span>Payed Date</span> :{{$order->payed_date}}</a></li>
                            <li><a href="#"><span>Delivery Date</span> :{{$order->delivery_date}}</a></li>
							<li><a href="#"><span>Payed</span> : {{($order->payed)?'Yes':'NO'}}</a></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Billing Address</h4>
						<ul class="list">
							<li><a href="#"><span>Street</span> : {{$order->address}}</a></li>
							<li><a href="#"><span>Phone</span> : {{$order->phone}}</a></li>
							<li><a href="#"><span>Governorate</span> : {{$order->governorate}}</a></li>
                            <li><a href="#"><span>District</span> : {{$order->district}}</a></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>User Information</h4>
						<ul class="list">
							<li><a href="#"><span>Name</span> : {{$order->name}}</a></li>
							<li><a href="#"><span>Phone</span> : {{$order->phone}}</a></li>
							<li><a href="#"><span>Email</span> : {{$order->email}}</a></li>
							<li><a href="#"><span>National id </span> : {{$order->nid}}</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
                        @foreach( $items as $item)
							<tr>
								<td>
									<p>{{$item->product->name}}</p>
								</td>
								<td>
									<h5>X{{$item->quantity}}</h5>
								</td>
								<td>
									<p>${{$item->price}}</p>
								</td>
							</tr>
                        @endforeach
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p> {{$order->shipping->name}} Shipping : ${{$order->shipping->cost}} ( in {{$order->shipping->time}} days)</p>
								</td>
							</tr>
                        @if(!empty($coupon))
                        <tr>
								<td>
									<h4>Coupon</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p> {{$coupon->name}}  : -%{{$coupon->discount}}</p>
								</td>
							</tr>
                        @endif
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>${{$order->total_price}}</p>
								</td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>

		</div>
        <div class="container">
            <div class="row text-center mt-2">
                <a style="margin: auto;text-align: center;border: none;color: white;font-size: 17px"  class="primary-btn" type="button" onclick="printDiv('printableArea')"  >Print <i class="fa fa-print"></i></a>
            </div>
        </div>
    </section>
	<!--================End Order Details Area =================-->
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
