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

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('login/user/assets/css/bootstrap.min.css')}}">
    <!--Custom style.css-->
    <link rel="stylesheet" href="{{asset('login/user/assets/css/quicksand.css')}}">
    <link rel="stylesheet" href="{{asset('login/user/assets/css/style.css')}}">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{asset('login/user/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('login/user/assets/css/fontawesome.css')}}">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        @yield('title')
  </head>

  <body class="login-body">
    
    <!--Login Wrapper-->

    @yield('content')    

    <!--Login Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="{{asset('login/user/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('login/user/assets/js/jquery-1.12.4.min.js')}}"></script>
    <!--Popper JS-->
    <script src="{{asset('login/user/assets/js/popper.min.js')}}"></script>
    <!--Bootstrap-->
    <script src="{{asset('login/user/assets/js/bootstrap.min.js')}}"></script>

    <!--Custom Js Script-->
    <script src="{{asset('login/user/assets/js/custom.js')}}"></script>
    <!--Custom Js Script-->
  </body>
</html>