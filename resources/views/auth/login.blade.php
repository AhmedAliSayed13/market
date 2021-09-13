<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Doccure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link href="{{asset('site/img/favicon.png')}}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('site/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/plugins/fontawesome/css/all.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

</head>
<body class="account-page">


        <div class="container-fluid h-100">

            <div class="row align-items-center h-100">
                <div class="col-md-8 mx-auto offset-md-2">

                    <!-- Login Tab Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            {{--  <div class="col-md-7 col-lg-6 login-left">
                                <img src="{{asset('site/img/login-banner.png')}}" class="img-fluid" alt="Doccure Login">
                            </div>  --}}
                            <div class="col-md-12 col-lg-6 login-right">
                                @include('admin.layout.message')
                                <div class="login-header text-center bold">
                                    <h3>انشاء حساب دافنشي</h3>
                                </div>

                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group form-focus">
                                    <div class="input-wrapper">
                                        <input id="email" type="email" value="{{ old('email') }}" name="email" class="form-control floating @error('email') is-invalid @enderror login-form2" placeholder="البريد الالكتروني">
                                        <label for="stuff" class="fa fa-user input-icon"></label>
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="form-group form-focus">
                                    <div class="input-wrapper">
                                        <input type="password" name="password" id="password" class="form-control floating @error('password') is-invalid @enderror login-form2" placeholder="كلمة المرور">
                                        <label for="stuff" class="fa fa-lock input-icon"></label>
                                        @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    </div>


                                    <div class="text-right float-left col-6">
                                        <a class="forgot-link" href="{{ route('password.request') }}">هل نسيت كلمة المرور؟</a>
                                    </div>

                                    <button class="btn btn-primary btn-block btn-lg login-btn login-form2" type="submit">تسجيل دخول</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">او</span>
                                    </div>
                                    <div class="col-12 ">
                                        <a href="{{url('/login/google')}}" class="btn btn-primary btn-block  btn-lg login-form2"><i class="fab fa-facebook mr-1"></i> تسجيل الدخول بواسطة فيسبوك</a>
                                    </div>


                                    <div class="col-12 mt-3">
                                        <a href="{{url('/login/google')}}" class="btn btn-google btn-block  btn-lg login-form2"><i class="fab fa-google mr-1"></i>تسجيل الدخول بواسطة جوجل</a>
                                    </div>

                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or2">ليس لديك حساب في فينيشي</span>
                                    </div>
                                    <a <a href="{{route('register')}}" class="btn btn-primary btn-block  btn-lg login-form2">  انشاء حساب فينشي؟ </a>
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
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('site/js/script.js')}}"></script>

</body>
</html>
