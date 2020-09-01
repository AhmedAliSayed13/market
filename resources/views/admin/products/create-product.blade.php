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

                            <div class="profile-menu">
                                <ul class="nav nav-tabs nav-tabs-solid">
                                    <li class="nav-item">
                                        <a class="nav-link {{($step==1)?'active':'disabled'}}  " data-toggle="tab" href="#product_information">Product Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{($step==2)?'active':'disabled'}} " data-toggle="tab" href="#product_attribute">Product Attribute</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{($step==3)?'active':'disabled'}} " data-toggle="tab" href="#product_image">Product Images</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content profile-tab-cont">

                                <!-- Personal Details Tab -->
                                <div class="tab-pane fade {{($step==1)?'show active':''}}" id="product_information">
                                    <!-- Personal Details -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    @isset($brands)
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
                                                            <label class="col-form-label col-md-2">Tags</label>
                                                            <div class="col-md-10">
                                                                <input type="text" style="" data-role="tagsinput" class="form-control @error('tags') is-invalid @enderror"  name="tags"  id="services">
                                                                @error('tags')
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
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Personal Details -->
                                </div>
                                <!-- /Personal Details Tab -->

                                <!-- Change Password Tab -->
                                <div id="product_attribute" class="tab-pane fade {{($step==2)?'show active':''}}">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <form action="{{route('product.store.attribute')}}" method="post">
                                                                @csrf
                                                                @isset($product_id)
                                                                <input type="hidden" name="product_id" value="{{$product_id}}">
                                                                @endisset
                                                                <input type="hidden" name="step" value="2">

                                                                <div class="form-group row">
                                                                    <label class="col-form-label col-md-2">Color</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" value="{{old('color')}}" class="form-control @error('color') is-invalid @enderror" name="color">
                                                                        @error('color')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-form-label col-md-2">size</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" value="{{old('size')}}" class="form-control @error('size') is-invalid @enderror" name="size">
                                                                        @error('size')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-form-label col-md-2">width</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" value="{{old('width')}}" class="form-control @error('width') is-invalid @enderror" name="width">
                                                                        @error('width')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-form-label col-md-2">height</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" value="{{old('height')}}" class="form-control @error('height') is-invalid @enderror" name="height">
                                                                        @error('height')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-form-label col-md-2">depth</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" value="{{old('depth')}}" class="form-control @error('depth') is-invalid @enderror" name="depth">
                                                                        @error('depth')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-form-label col-md-2">weight</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" value="{{old('weight')}}" class="form-control @error('weight') is-invalid @enderror" name="weight">
                                                                        @error('weight')
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
                                    </div>
                                </div>
                                <!-- /Change Password Tab -->
                                <!-- Change Password Tab -->
                                <div id="product_image" class="tab-pane fade {{($step==3)?'show active':''}}">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <form id="dropzoneForm" class="dropzone" action="{{ route('product.image.upload') }}">
                                                                @csrf
                                                                @isset($product_id)
                                                                    <input name="id" type="hidden" value="{{$product_id}}">
                                                                    <input name="step" type="hidden" value="3">
                                                                @endisset
                                                            </form>
                                                            <div align="center">
                                                                <button  type="button" class="btn btn-info mt-2" id="submit-all">Upload</button>
                                                                <a  href="{{route('product.index')}}"  class="btn btn-info mt-2" >End Add Product</a>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title">Uploaded Image</h3>
                                                                </div>
                                                                @isset($images)
                                                                <div class="panel-body" >
                                                                    @foreach($images as $image)
                                                                        <div class="col-md-2 float-left" style="margin-bottom:16px;" align="center">
                                                                            <img src="{{asset('images_upload/' . $image->image)}}" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                                                                            <button type="button" class="btn btn-danger mt-2 remove_image" id="{{$image->id}}"><i class="fas fa-trash-alt"></i></button>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                @endisset
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Change Password Tab -->
                            </div>


                        </div>

                    </div>
                </div>
            </div>



        </div>

    <!-- /Main Wrapper -->

@stop


