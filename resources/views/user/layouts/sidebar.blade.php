<!-- Profile Sidebar -->
<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                <img src="{{asset('')}}site/upload_img/{{auth()->user()->image}}" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3>{{auth()->user()->name}}</h3>

                <div class="patient-details">
                    <h5 class="mb-0">{{auth()->user()->email}}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="{{active_link(['user','dashboard'])}}">
                    <a href="{{route('user.dashboard')}}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{active_link(['user','change-password'])}}">
                    <a href="{{route('user.change-password')}}">
                        <i class="fas fa-columns"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>
                <li class="{{active_link(['user','order'])}}">
                    <a href="{{route('user.order')}}">
                        <i class="fas fa-columns"></i>
                        <span>My Orders</span>
                    </a>
                </li>
                <li class="{{active_link(['user','my-favourite'])}}">
                    <a href="{{route('user.my-favourite')}}">
                        <i class="fas fa-columns"></i>
                        <span>Favourite Product</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('user.logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /Profile Sidebar -->
