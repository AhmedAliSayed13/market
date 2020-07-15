@extends('admin.layout.index')
@section('content')
    <!-- Page Header -->


    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Profile</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-auto profile-image">
                        <a href="#">
                            <img class="rounded-circle" alt="User Image" src="{{asset('img/profiles/avatar-01.jpg')}}">
                        </a>
                    </div>
                    <div class="col ml-md-n2 profile-user-info">
                        <h4 class="user-name mb-0">{{Auth::guard('admin')->user()->name}}</h4>
                        <h6 class="text-muted">{{Auth::guard('admin')->user()->email}}</h6>
                        <div class="user-Location"><i class="fa fa-map-marker"></i> {{Auth::guard('admin')->user()->address}}</div>
                        <div class="about-text">{{Auth::guard('admin')->user()->about}}</div>
                    </div>
                </div>
            </div>
            <div class="profile-menu">
                <ul class="nav nav-tabs nav-tabs-solid">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content profile-tab-cont">

                <!-- Personal Details Tab -->
                <div class="tab-pane fade show active" id="per_details_tab">

                    <!-- Personal Details -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">
                                        <span>Personal Details</span>
                                        <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
                                    </h5>
                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                        <p class="col-sm-10">{{Auth::guard('admin')->user()->name}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Age</p>
                                        <p class="col-sm-10">{{Auth::guard('admin')->user()->age}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                        <p class="col-sm-10">{{Auth::guard('admin')->user()->email}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                        <p class="col-sm-10">{{Auth::guard('admin')->user()->phone}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
                                        <p class="col-sm-10 mb-0">{{Auth::guard('admin')->user()->address}}
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Details Modal -->
                            <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document" >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Personal Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{route('admin.edit')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{Auth::guard('admin')->user()->id}}">
                                                <div class="row form-row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{Auth::guard('admin')->user()->name}}">
                                                            @error('name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>NID</label>
                                                            <input type="text" name="nid" class="form-control @error('nid') is-invalid @enderror" value="{{Auth::guard('admin')->user()->nid}}">
                                                            @error('nid')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::guard('admin')->user()->email}}">
                                                            @error('email')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Age</label>
                                                            <input name="age" type="number" class="form-control @error('age') is-invalid @enderror" value="{{Auth::guard('admin')->user()->age}}">
                                                            @error('age')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Mobile</label>
                                                            <input type="text" name="phone" value="{{Auth::guard('admin')->user()->phone}}" class="form-control @error('phone') is-invalid @enderror">
                                                            @error('phone')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{Auth::guard('admin')->user()->address}}">
                                                            @error('address')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>About</label>
                                                            <textarea type="text" name="about" class="form-control @error('about') is-invalid @enderror text-left" >
                                                                {{Auth::guard('admin')->user()->about}}

                                                            </textarea>
                                                            @error('about')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Edit Details Modal -->

                        </div>


                    </div>
                    <!-- /Personal Details -->

                </div>
                <!-- /Personal Details Tab -->

                <!-- Change Password Tab -->
                <div id="password_tab" class="tab-pane fade">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Change Password</h5>
                            <div class="row">
                                <div class="col-md-10 col-lg-6">
                                    <form action="{{route('admin.change-password')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror">
                                            @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror">
                                            @error('new_password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirm" class="form-control @error('password_confirm') is-invalid @enderror">
                                            @error('password_confirm')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Change Password Tab -->

            </div>
        </div>
    </div>

@endsection
