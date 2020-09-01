@extends('user.layouts.index',['title' => 'Change Password'])
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-lg-6">

                    <!-- Change Password Form -->
                    <form action="{{route('user.save-change-password')}}" method="post">
                        @CSRF
                        <div class="form-group">
                            <label>Old Password</label>
                            <input name="oldPassword" type="password" class="form-control @error('oldPassword') is-invalid @enderror">
                            @error('oldPassword')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="newPassword" class="form-control @error('newPassword') is-invalid @enderror">
                            @error('newPassword')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror">
                            @error('confirmPassword')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                        </div>
                    </form>
                    <!-- /Change Password Form -->

                </div>
            </div>
        </div>
    </div>
@endsection
