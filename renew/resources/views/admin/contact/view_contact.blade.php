@extends('admin_layout')
@section('title')
    <title>Thông tin phản hồi</title>
@endsection
@section('content')
<div class="col-md-9 col-sm-12" style="margin-top:40px">
    <!--Email compose form-->
    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
        <div class="p-2 px-3 mb-0 border-bottom">
            <h6>Phản hồi từ {{$data->name}}</h6>
        </div>
        <form action="" class="mb-4 p-4 email-form">
            <div class="form-group row">
                <label for="to" class="col-sm-2">Người gửi</label>
                <label for="to" class="col-sm-10">{{$data->name}}</label>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2">Email</label>
                <label for="email" class="col-sm-10">{{$data->email}}</label>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-2">Tiêu đề</label>
                <label for="title" class="col-sm-10">{{$data->title}}</label>
            </div>

            <div class="form-group row">
                <label for="message" class="col-sm-2">Nội dung</label>
                <div class="col-sm-10">
                    <textarea name="" id="message" rows="5" class="form-control">{{$data->content}}</textarea>
                </div>
            </div>

            <div class="form-group text-right">
                <a href="{{url('/admin-contact')}}" class="btn btn-secondary">Đóng</a>
            </div>
        </form>
    </div>

</div>
@endsection