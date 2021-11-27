
<div class="col-sm-3">
    <div class="user-profile__avatar shadow-effect text-center"> <img class="img-responsive center-block" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..."> {{ $user->name }}
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Menu</div>
        <div class="panel-body">
            <ul>
                <li><a href="{{ route('profile.index') }}"><i class="fa fa-user"></i>  Profile</a>
                </li>
                <li><a href="{{ route('profile.update') }}"><i class="fa fa-edit"></i> Chỉnh sửa Profile</a>
                </li>
                <li><a href="{{ route('profile.logout') }}"><i class="fa fa-sign-out"></i> Thoát</a>
                </li>
            </ul>
        </div>
    </div>
</div>
