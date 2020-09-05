<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Doccure - Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{secure_asset('img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/font-awesome.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">


</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{secure_asset('img/logo-white.png')}}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Reset Password</h1>
                        <p class="account-subtitle">Add New Password</p>
                        @include('admin.layout.message')
                        <!-- Form -->
                        <form action="{{ route('password.update') }}" method="POST" role="form">
                            @csrf
                            <div class="form-group">
                                <input class="form-control @error('email') is-invalid @enderror" type="email"  name="email" disabled  autofocus value="{{$email}}">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control @error('new_password') is-invalid @enderror" type="password" placeholder="New Password"  name="new_password"  autofocus >
                                @error('new_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control @error('confirm_password') is-invalid @enderror" type="password" placeholder="Confirm New Password"  name="confirm_password">
                                @error('confirm_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                            </div>
                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{secure_asset('js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{secure_asset('js/popper.min.js')}}"></script>
<script src="{{secure_asset('js/bootstrap.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{secure_asset('js/script.js')}}"></script>

</body>
</html>
