<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.style')
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    @include('admin.layout.header')
    <!-- /Header -->

    <!-- Sidebar -->
    @include('admin.layout.sidebar')
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            @include('admin.layout.message')


                    @yield('content')



        </div>
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->
@include('admin.layout.script')
</body>
</html>
