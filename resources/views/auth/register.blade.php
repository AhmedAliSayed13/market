<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>Doccure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link href="{{asset('site/img/favicon.png')}}" rel="icon">

    <!-- Bootstrap CSS -->
    {{--  <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">  --}}
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('site/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/plugins/fontawesome/css/all.min.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
</head>
<body class="account-page">


        <div class="container-fluid h-100">

            <div class="row align-items-center h-100">
                <div class="col-md-8 mx-auto offset-md-2">

                    <!-- Login Tab Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="{{asset('site/img/login-banner.png')}}" class="img-fluid" alt="Doccure Login">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Register <span>Doccure</span></h3>
                                </div>
                                <form action="{{  route('register')  }}" method="post">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <input id="name" type="text" value="{{ old('name') }}" name="name" class="form-control floating @error('name') is-invalid @enderror">
                                        <label class="focus-label">Name</label>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group form-focus">
                                        <input id="email" type="email" value="{{ old('email') }}" name="email" class="form-control floating @error('email') is-invalid @enderror">
                                        <label class="focus-label">Email</label>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group form-focus">
                                        <input id="nid" type="text" value="{{ old('nid') }}" name="nid" class="form-control floating @error('nid') is-invalid @enderror">
                                        <label class="focus-label">NID</label>
                                        @error('nid')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" name="password" id="password" class="form-control floating @error('password') is-invalid @enderror">
                                        <label class="focus-label">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group form-focus">
                                        <input id="password-confirm" type="password"  name="password_confirmation" class="form-control floating @error('password_confirmation') is-invalid @enderror">
                                        <label class="focus-label">Password Confirmation</label>
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="text-left float-left col-6">
                                        <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                    </div>
                                    <div class="text-right float-left col-6">
                                        <a class="forgot-link" href="{{ route('login') }}">Already have an account?</a>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">or</span>
                                    </div>
                                    <div class="row form-row social-login">
                                        <div class="col-6">
                                            <a href="{{url('/login/google')}}" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{url('/login/github')}}" class="btn btn-google  btn-block" style="background-color: #444d56;color: white"><i class="fab fa-github mr-1"></i> Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Tab Content -->

                </div>
            </div>

        </div>



<!-- jQuery -->
<script src="{{asset('site/js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('site/js/popper.min.js')}}"></script>
{{--  <script src="{{asset('site/js/bootstrap.min.js')}}"></script>  --}}
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="{{asset('site/js/script.js')}}"></script>

</body>
</html>
