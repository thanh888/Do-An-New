<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coffee- Nơi đưa tình yêu đến gần hơn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    @include('homeUser.partial_user.layout_css')


</head>

<body>
    @include('homeUser.partial_user.header')

    @yield('content')

    @include('homeUser.partial_user.footer')
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    @include('homeUser.partial_user.layout_js')
    @yield('js')

</body>

</html>