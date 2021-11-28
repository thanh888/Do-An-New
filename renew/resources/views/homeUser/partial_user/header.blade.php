<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{URL::to('/home')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('Menu.index')}}" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="shop.html">Shop</a>
                        <a class="dropdown-item" href="product-single.html">Single Product</a>
                        <a class="dropdown-item" href="room.html">Cart</a>
                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                        <a class="dropdown-item" href="{{URL::to('/logout')}}">Đăng xuất</a>
                    </div>
                </li> --}}
                <li class="nav-item"><a href="{{ route('home.contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item cart"><a href="{{ route('home.cart') }}" class="nav-link"><span
                    class="icon icon-shopping_cart"></span><span
                    class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a>
                </li>
                <li class="nav-item dropdown">
                    @if (auth()->user())
                        <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{ route('profile.index') }}"><i class="fa fa-user pr-2"></i> Profile</a>
                            <a class="dropdown-item" href="product-single.html"><i class="fa fa-th-list pr-2"></i> Tasks</a>
                            <a class="dropdown-item" href="room.html"><i class="fa fas fa-cart-plus"></i>Cart</a>
                            {{-- <a class="dropdown-item" href="checkout.html">Checkout</a> --}}
                            <a class="dropdown-item" href="{{route('home.logout')}}"><i class="fa fa-power-off pr-2"></i> Logout</a>
                        </div>
                    @else
                        <a class="nav-link dropdown-toggle" href="{{ route('home.login') }}" id="dropdown04" >
                            {{ 'Login' }}
                        </a>
                        
                        
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->