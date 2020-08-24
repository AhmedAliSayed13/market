<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.layouts.style')

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
                </a>
                <a href="{{route('home')}}" class="navbar-brand logo">
                    <img src="{{asset('')}}site/img/logo.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{route('home')}}" class="menu-logo">
                        <img src="{{asset('')}}site/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>

            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
                        <i class="far fa-hospital"></i>
                    </div>
                    <div class="header-contact-detail">
                        <p class="contact-header">Contact</p>
                        <p class="contact-info-header"> +1 315 369 5943</p>
                    </div>
                </li>

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="{{asset('')}}site/upload_img/{{auth()->user()->image}}" width="31" alt="Darren Elder">
								</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{asset('')}}site/upload_img/{{auth()->user()->image}}" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{auth()->user()->name}}</h6>
                                <p class="text-muted mb-0">User Account</p>
                            </div>
                        </div>
                        <a class="dropdown-item {{active_link(['user','dashboard'])}}"  href="{{route('user.dashboard')}}">Dashboard</a>
                        <a class="dropdown-item {{active_link(['user','change-password'])}}" href="{{route('user.change-password')}}">Profile Settings</a>
                        <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->
            </ul>
        </nav>
    </header>
    <!-- /Header -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Market</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">{{$title}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Profile Sidebar -->
                @include('user.layouts.sidebar')
                    <!-- /Profile Sidebar -->
                </div>
                <div class="col-md-7 col-lg-8 col-xl-9">
                    @include('user.layouts.message')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
<!-- /Main Wrapper -->

@include('user.layouts.script')

</body>
</html>
