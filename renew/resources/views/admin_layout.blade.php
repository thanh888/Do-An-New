<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon Icon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/css/bootstrap.min.css')}}">
    <!--Custom style.css')}}-->
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/css/quicksand.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/css/style.css')}}">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/css/fontawesome.css')}}">
    <!--Animate CSS-->
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/css/animate.min.css')}}">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/css/chartist.min.css')}}">
    <!--Map-->
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/css/jquery-jvectormap-2.0.2.css')}}">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/js/calendar/bootstrap_calendar.css')}}">
    <!--Nice select -->
    <link rel="stylesheet" href="{{asset('backend/dashboard/assets/css/nice-select.css')}}">

    @yield('title')
    @yield('css')
  </head>
  <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->

    <!--Page Wrapper-->

    <div class="container-fluid">

        @include('partial_admin.header')

        <!--Main Content-->

        <div class="row main-content">
             @include('partial_admin.sidebar')

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-3" ><strong>Dashboard</strong></h5>
                
                @yield('content')

                @include('partial_admin.footer')

            </div>
        </div>

        <!--Main Content-->

    </div>

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="{{asset('backend/dashboard/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/assets/js/jquery-1.12.4.min.js')}}"></script>
    <!--Popper JS-->
    <script src="{{asset('backend/dashboard/assets/js/popper.min.js')}}"></script>
    <!--Bootstrap-->
    <script src="{{asset('backend/dashboard/assets/js/bootstrap.min.js')}}"></script>
    <!--Sweet alert JS-->
    <script src="{{asset('backend/dashboard/assets/js/sweetalert.js')}}"></script>
    <!--Progressbar JS-->
    <script src="{{asset('backend/dashboard/assets/js/progressbar.min.js')}}"></script>
    <!--Flot.js')}}-->
    <script src="{{asset('backend/dashboard/assets/js/charts/jquery.flot.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/assets/js/charts/jquery.flot.pie.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/assets/js/charts/jquery.flot.categories.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/assets/js/charts/jquery.flot.stack.min.js')}}"></script>
    <!--Chart JS-->
    <script src="{{asset('backend/dashboard/assets/js/charts/chart.min.js')}}"></script>
    <!--Chartist JS-->
    <script src="{{asset('backend/dashboard/assets/js/charts/chartist.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/assets/js/charts/chartist-data.js')}}"></script>
    <script src="{{asset('backend/dashboard/assets/js/charts/demo.js')}}"></script>
    <!--Maps-->
    <script src="{{asset('backend/dashboard/assets/js/maps/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/assets/js/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('backend/dashboard/assets/js/maps/jvector-maps.js')}}"></script>
    <!--Bootstrap Calendar JS-->
    <script src="{{asset('backend/dashboard/assets/js/calendar/bootstrap_calendar.js')}}"></script>
    <script src="{{asset('backend/dashboard/assets/js/calendar/demo.js')}}"></script>
    <!--Nice select-->
    <script src="{{asset('backend/dashboard/assets/js/jquery.nice-select.min.js')}}"></script>

    <!--Custom Js Script-->
    <script src="{{asset('backend/dashboard/assets/js/custom.js')}}"></script>
    <!--Custom Js Script-->
    <script>
        //Nice select
        $('.bulk-actions').niceSelect();
    </script>
    @yield('js')
  </body>
</html>
