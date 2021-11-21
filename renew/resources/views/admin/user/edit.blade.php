@extends('admin_layout')
@section('title')
    <title>Add user</title>
@endsection
@section('css')
  <link href="{{asset('vendor/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('js')
  {{-- <script src="{{asset('backend/js/select2.min.js')}}"></script> --}}
  <script src="{{asset('vendor/js/select2.min.js')}}"></script>
  <script src="{{asset('backend/UserManager/add.js')}}"></script>

@endsection
@section('content')
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <div class="row">
            {{-- {{ route('User.edit',['id'=>$user->id]) }} --}}
              <div class="col-md-12">
                  <form method="post" action="{{ route('User.update',['id'=>$user->id]) }}" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label >Tên</label>
                        <input type="text" class="form-control" name="name"  placeholder="Nhap ten" value="{{$user->name }}">
                      </div>
                      <div class="form-group">
                        <label >Email</label>
                        <input type="Email" class="form-control" name="email"  placeholder="Nhap Email" value="{{$user->email }}">
                      </div>
                      <div class="form-group">
                        <label >Password</label>
                        <input type="text" class="form-control" name="password"  placeholder="Nhap Password" >
                      </div>
                      <div class="form-group">
                        <label >Chon vai tro</label>
                        <select class="form-control select2_init" name="role[]" multiple="multiple">
                          {{-- <option value="0">Chon vai tro</option> --}}
                          @foreach ($roles as $role)
                              <option {{ $roleUser->contains('id', $role->id) ? 'selected':'' }} 
                              value="{{ $role->id }}">{{ $role->name }}</option>
                          @endforeach
                        </select>
                        
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
          </div>
        
    </div>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

@endsection
