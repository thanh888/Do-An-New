@extends('profile_layout')
@section('profile_content')
<div class="col-sm-12" style="margin-top: 60px">
    <form action="{{ route('profile.confirm') }}" method="POST">
        {{csrf_field()}}
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="col-sm-2">
                    <h4 class="mb-0">Họ và tên</h4>
                </div>
                <div class="col-sm-9 text-secondary"> 
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Sở thích</h4>
                </div>
                <div class="col-sm-9 text-secondary"> 
                    <input type="text" class="form-control" name="favourite" value="{{ $user->favourite }}">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Link facebook</h4>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" name="linkfb" value="{{ $user->linkfb }}">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">SDT</h4>
                </div>
                <div class="col-sm-9 text-secondary"> 
                    <input type="text" class="form-control" name="number_phone" value="{{ $user->number_phone }}">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Địa chỉ</h4>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" name="location" value="{{ $user->location }}">
                </div>
            </div>
            <hr>
            {{-- <div class="row">
                <div class="col-sm-12"> <a class="btn btn-info " target="__blank" type="submit">LƯU</a>
                </div>
            </div> --}}
            <div class="d-flex">
                <div class="ml-auto">
                    <button type="submit" class="btn btn-primary" style="margin-right:20px">LƯU</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection