<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{  __('admin.login_title') }}</title>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script src="{{ asset('admin/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script src="{{ asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{ asset('admin/js/app.js')}}"></script>
    <script src="{{ asset('admin//global_assets/js/demo_pages/login.js')}}"></script>
    <!-- /theme JS files -->
</head>
<body>
<!-- Page content -->
<div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">
            <!-- Login card -->
        @yield('content')
        <!-- /login card -->
        </div>
        <!-- /content area -->
    </div>
    <!-- /main content -->
</div>
<!-- /page content -->
</body>
</html>
