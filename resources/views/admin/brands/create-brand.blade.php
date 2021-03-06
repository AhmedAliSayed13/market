@extends('admin.layout.index')
@section('content')

    <!-- Page Wrapper -->

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Create Brand</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Brand</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Brand</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                        <div class="change-avatar">
                                            <div class="profile-img">
                                                <a id="aid" href="<?php echo asset('images_profile/brand.png')?>" data-fancybox data-caption="logo">
                                                    <img id="imgid" style="width: 200px;height: 150px" alt="User Image" src="<?php echo asset('images_profile/brand.png')?>">
                                                </a>
                                            </div>
                                            <div class="upload-img">
                                                <div class="change-photo-btn">
                                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                    <input onchange="loadimg(event)" class="upload @error('image') is-invalid @enderror"  value="{{old('image')}}" type="file"  name="image">
                                                    @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                </div>
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
                                    <label class="col-form-label col-md-2">About</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" name="about" class="form-control @error('about') is-invalid @enderror" placeholder="Enter text here">
                                            {{old('about')}}
                                        </textarea>
                                        @error('about')
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


