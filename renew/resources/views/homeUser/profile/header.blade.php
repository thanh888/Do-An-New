<div class="col-sm-6">
    <h3 class="user-profile__title">{{ $user->name ? $user->name : auth()->user()->name  }}</h3>
    {{-- <p class="user-profile__desc">{{ $user->favourite ? $user->favourite : ''  }}</p>
    <div class="user-profile__url"> <a href="{{ $user->linkfb ? $user->location : ''   }}">{{ $user->linkfb ? $user->linkfb : 'Chua cap nhat'    }}</a>
    </div> --}}
    <div class="social">
        <ul class="list-inline">
            <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            </li>
            <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            </li>
            <li> <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
            </li>
        </ul>
    </div>
</div>
<div class="col-sm-6">
    <ul class="user-profile__info">
        <li> <i class="fa fa-user"></i> {{ $user->gender ? $user->gender : 'Chua cap nhat'  }}</li>
        <li> <i class="fa fa-phone"></i> {{ $user->number_phone ? $user->number_phone : 'Chua cap nhat' }}</li>
        <li> <i class="fa fa-map-marker"></i> {{ $user->location ? $user->location : 'Chua cap nhat'  }}</li>
    </ul>
</div>