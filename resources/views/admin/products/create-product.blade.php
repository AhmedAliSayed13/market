@extends('admin.layout.index')
@section('content')

    <!-- Page Wrapper -->

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Create Product</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Product</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">name</label>
                                    <div class="col-md-10">
                                        <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name">
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Price</label>
                                    <div class="col-md-10">
                                        <input type="text" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror" name="price">
                                        @error('price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Amount</label>
                                    <div class="col-md-10">
                                        <input type="text" value="{{old('amount')}}" class="form-control @error('amount') is-invalid @enderror" name="amount">
                                        @error('amount')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Brand</label>
                                    <div class="col-md-10">
                                        <select  value="{{old('brand_id')}}" class="form-control @error('brand_id') is-invalid @enderror" name="brand_id">
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}"> {{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('amount')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Category</label>
                                    <div class="col-md-10">
                                        <select  value="{{old('category_id')}}" class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{ $category->name }}</option>
                                                @if(count( $category->subcategory) > 0 )

                                                    @foreach ($category->subcategory as $category2)
                                                        <option value="{{$category2->id}}" >{{ '--'.$category2->name }}</option>
                                                        @if(count( $category2->subcategory) > 0 )

                                                            @foreach ($category2->subcategory as $category3)
                                                                <option value="{{$category3->id}}" >{{'----'. $category3->name }}</option>
                                                            @endforeach

                                                        @endif
                                                    @endforeach

                                                @endif
                                            @endforeach
                                        </select>
                                        @error('amount')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Available</label>
                                    <div class="col-md-10">
                                        <select value="{{old('available')}}" class="form-control @error('available') is-invalid @enderror" name="available">
                                            <option value="1">Available</option>
                                            <option value="0">NO Available</option>
                                        </select>
                                        @error('available')
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
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Tags</label>
                                    <div class="col-md-10">
                                        <input type="text" style="" data-role="tagsinput" class="form-control @error('tags') is-invalid @enderror"  name="tags"  id="services">
                                        @error('tags')
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


