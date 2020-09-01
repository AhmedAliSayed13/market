@extends('admin.layout.index')
@section('content')

    <!-- Page Wrapper -->

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Edit Setting</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Setting</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Setting</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.edit_setting')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-6 float-left">
                                <div class="change-avatar">
                                    <div class="profile-img text-center">
                                        <a id="aid1" href="{{asset('images_profile/'.$site->logo)}}" data-fancybox data-caption="logo">
                                            <img id="imgid1" style="width: 200px;height: 150px" alt="User Image" src="{{asset('images_profile/'.$site->logo)}}">
                                        </a>
                                    </div>
                                    <div class="upload-img">
                                        <div class="change-photo-btn">
                                            <span><i class="fa fa-upload"></i> Upload Logo</span>
                                            <input onchange="loadimg1(event)" class="upload @error('logo') is-invalid @enderror"  value="{{old('logo')}}" type="file"  name="logo">
                                            @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-6 float-left">
                                <div class="change-avatar">
                                    <div class="profile-img text-center">
                                        <a id="aid2" href="{{asset('images_profile/'.$site->icon)}}" data-fancybox data-caption="logo">
                                            <img id="imgid2" style="width: 200px;height: 150px" alt="User Image" src="{{asset('images_profile/'.$site->icon)}}">
                                        </a>
                                    </div>
                                    <div class="upload-img">
                                        <div class="change-photo-btn">
                                            <span><i class="fa fa-upload"></i> Upload icon</span>
                                            <input onchange="loadimg2(event)" class="upload @error('icon') is-invalid @enderror"  value="{{old('icon')}}" type="file"  name="icon">
                                            @error('icon')
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
                                    <input type="text" value="{{old('name',$site->name)}}" class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">phone</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{old('phone',$site->phone)}}" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">email</label>
                                <div class="col-md-10">
                                    <input type="email" value="{{old('email',$site->email)}}" class="form-control @error('email') is-invalid @enderror" name="email">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">facebook</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{old('facebook',$site->facebook)}}" class="form-control @error('facebook') is-invalid @enderror" name="facebook">
                                    @error('facebook')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">twitter</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{old('twitter',$site->twitter)}}" class="form-control @error('twitter') is-invalid @enderror" name="twitter">
                                    @error('twitter')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">instgram</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{old('instgram',$site->instgram)}}" class="form-control @error('instgram') is-invalid @enderror" name="instgram">
                                    @error('instgram')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">About</label>
                                <div class="col-md-10">
                                        <textarea rows="5" cols="5" name="about" class="form-control @error('about') is-invalid @enderror" placeholder="Enter text here">
                                            {{old('about',  $site->about )}}
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


