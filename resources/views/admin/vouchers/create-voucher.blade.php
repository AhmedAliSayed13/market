@extends('admin.layout.index')
@section('content')

    <!-- Page Wrapper -->

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Create Voucher</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Voucher</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Voucher</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('voucher.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Code</label>
                                    <div class="col-md-10">
                                        <input id="code" type="text" value="{{old('code')}}" class="form-control @error('code') is-invalid @enderror" name="code">
                                        @error('code')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Name</label>
                                    <div class="col-md-10">
                                        <input  type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name">
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Product</label>
                                    <div class="col-md-10">
                                        <select  class="form-control @error('product_id') is-invalid @enderror" name="product_id">
                                        @foreach($products as $product)
                                        <option  value="{{old('product_id',$product->id)}}">{{$product->name}}</option>
                                        @endforeach
                                        </select>
                                            @error('product_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Active</label>
                                    <div class="col-md-10">
                                        <select  class="form-control @error('active') is-invalid @enderror" name="active">

                                        <option  value="{{old('active',1)}}">Active</option>
                                            <option  value="{{old('active',0)}}">Not Active</option>

                                        </select>
                                            @error('active')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Discount</label>
                                    <div class="col-md-10">
                                        <div class="input-group">

                                        <input type="number" max="99" min="1" aria-describedby="inputGroupPrepend" value="{{old('discount')}}" class="form-control @error('discount') is-invalid @enderror" name="discount">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">%</span>
                                            </div>
                                        </div>
                                            @error('discount')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Max Used</label>
                                    <div class="col-md-10">
                                        <input type="number" value="{{old('max_used')}}" class="form-control @error('max_used') is-invalid @enderror" name="max_used">
                                        @error('max_used')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Starts At</label>
                                    <div class="col-md-10">
                                        <input type="date" step="1" value="{{old('starts_at')}}" class="form-control @error('starts_at') is-invalid @enderror" name="starts_at">
                                        @error('starts_at')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Expires At</label>
                                    <div class="col-md-10">
                                        <input type="date" step="1" value="{{old('expires_at')}}" class="form-control @error('expires_at') is-invalid @enderror" name="expires_at">
                                        @error('expires_at')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Describe</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" name="describe" class="form-control @error('describe') is-invalid @enderror" placeholder="Enter text here">
                                            {{old('describe')}}
                                        </textarea>
                                        @error('describe')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <!-- /Main Wrapper -->

@stop


