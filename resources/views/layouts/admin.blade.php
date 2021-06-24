<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta http-equiv=”Expires” content=”0″>
    <meta http-equiv=”Last-Modified” content=”0″>
    <meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>
    <meta http-equiv=”Pragma” content=”no-cache”>
    <title>@yield('title')</title>
    {!! Html::style('demo7/assets/css/loader.css') !!}
    {!! Html::script('demo7/assets/js/loader.js') !!}

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    {!! Html::style('demo7/bootstrap/css/bootstrap.min.css') !!}
    {!!Html::style("demo7/plugins/table/datatable/datatables.css")!!}
    {!!Html::style('demo7/assets/css/forms/theme-checkbox-radio.css') !!}
    {!!Html::style('demo7/plugins/table/datatable/custom_dt_custom.css') !!}
    {!!Html::style('demo7/assets/css/users/account-setting.css') !!}
    {!!Html::style('demo7/assets/css/users/user-profile.css') !!}
    {!!Html::style('demo7/plugins/table/datatable/dt-global_style.css') !!}
    {!!Html::style('demo7/plugins/file-upload/file-upload-with-preview.min.css') !!}
    {!!Html::style('demo7/assets/css/scrollspyNav.css') !!}
    {!! Html::style('demo7/assets/css/plugins.css') !!}
    {!!Html::style('demo7/assets/css/widgets/modules-widgets.css') !!}
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    {!! Html::style('demo7/plugins/apex/apexcharts.css') !!}
    {!! Html::style('demo7/assets/css/dashboard/dash_2.css') !!}

    @yield('styles')
</head>

<body class="alt-menu sidebar-noneoverflow">
    @include('layouts._nav')
    <div class="main-container" id="container">

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                @yield('content')



            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="https://greenJk.com">GreenJk</a>,
                        All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- End custom js for this page -->

    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    {!! Html::script('demo7/assets/js/libs/jquery-3.1.1.min.js') !!}
    {!! Html::script('demo7/bootstrap/js/popper.min.js') !!}
    {!! Html::script('demo7/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('demo7/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}
    {!! Html::script('demo7/assets/js/app.js') !!}
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    
    {!! Html::script('demo7/assets/js/custom.js') !!}
    {!!Html::script('demo7/plugins/table/datatable/datatables.js')!!}
    {!!Html::script('demo7/plugins/file-upload/file-upload-with-preview.min.js') !!}
    {!!Html::script('demo7/assets/js/scrollspyNav.js') !!}
    {!!Html::script('demo7/assets/js/widgets/modules-widgets.js') !!}
    <script>

    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    {!! Html::script('demo7/plugins/apex/apexcharts.min.js') !!}
    {!! Html::script('demo7/assets/js/dashboard/dash_2.js') !!}
    @yield('scripts')
</body>