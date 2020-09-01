<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    @include('site.layouts.style')
</head>

<body>

<!-- Start Header Area -->
@include('site.layouts.header')
<!-- End Header Area -->

@yield('content')

<!-- start footer Area -->
@include('site.layouts.footer')
<!-- End footer Area -->

@include('site.layouts.script')
</body>

</html>
