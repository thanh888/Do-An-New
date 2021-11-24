@extends('admin_layout')
@section('title')
    <title>Phản hồi từ khách hàng</title>
@endsection
@section('content')
<div class="col-lg-7 col-md-4 col-sm-4 card-pro mb-3" style="margin-top:40px">
    <div class="card shadow" style="width: 800px">
        <div class="card-body">
            <h5 class="card-title bc-header">Phản hồi từ khách hàng</h5>
            @foreach($data as $key)
            <div class="media border-top border-bottom pt-1">
                <img class="align-self-center mr-2 rounded-circle mb-1"
                    src="{{asset('public/backend/assets/img/user.png')}}" width="50px" height="50px">
                <div class="media-body" style="margin-top:4px">
                    <p class="bc-description mt-2">
                        <span style="font-size: 16px;"> {{$key->name}} </span>
                        <a href="{{route('AdminContact.view',['id'=>$key->id])}}" class="pull-right">
                            <i class="fa fa-eye" style="font-size: 22px;">
                            </i>
                        </a>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection