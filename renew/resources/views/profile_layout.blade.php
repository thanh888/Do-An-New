<!DOCTYPE html>
<html lang="en">

<head itemscope="" itemtype="http://schema.org/WebSite">
    <title itemprop="name"> My profile </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts" />
    <script src="/cache-js/cache-1635427806-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('profile/index.css') }}">
</head>

<body>
    <div id="snippetContent">
        <div class="container">
            <div class="row">
                @include('homeUser.profile.slidebar')
                
                <div class="col-sm-9">
                    <div class="row">
                        @include('homeUser.profile.header')
                        @yield('profile_content')
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript"></script>
    </div>
</body>

</html>