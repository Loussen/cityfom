<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Dashboard')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('admin/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->
    <script src="{{asset('admin/global_assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/editors/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/editor_ckeditor_default.js')}}"></script>

    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script src="{{asset('admin/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/pickers/anytime.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/pickers/pickadate/picker.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/pickers/pickadate/picker.time.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/pickers/pickadate/legacy.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/notifications/jgrowl.min.js')}}"></script>

    <script src="{{asset('admin/js/app.js')}}"></script>
{{--    <script src="{{asset('admin/global_assets/js/demo_pages/dashboard.js')}}"></script>--}}
    <script src="{{asset('admin/global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>
    <script src="{{asset('admin/js/custom.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_wizard.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/picker_date.js')}}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

@yield('style')
<!-- /theme JS files -->
</head>
<body>

<!-- Main navbar -->
@include('admin.particles._page_header')
<!-- /main navbar -->

<!-- Page content -->
<div class="page-content">
@include('admin.particles._navbar')
    <div class="content-wrapper">
        @yield('content')

        @include('admin.particles._footer')
    </div>
</div>

@yield('script')
</body>
</html>
