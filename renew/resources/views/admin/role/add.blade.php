@extends('admin_layout')
@section('title')
    <title>Roles</title>
@endsection

@section('css')
  <link href="{{asset('vendor/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('js')
  <script src="{{ asset('backend/roles/add.js') }}"></script>
@endsection
@section('content')

   
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <form class="row" method="post" action="{{ route('Role.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                    <div class="form-group">
                    <label >Tên vai tro</label>
                    <input type="text" class="form-control" name="name"  placeholder="Nhap ten vai tro" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                    <label >Mo ta vai tro</label>
                    <textarea name="display_name" class="form-control" rows="5" placeholder="Mo ta vai tro"></textarea>
                    </div>
            </div>
            <div class="col-md-12">
                <div class="card-header col-md-12 bg-info  mb-3">
                    <label >
                        <input type="checkbox" class=" check_all">
                        All
                    </label>
                </div>
                @foreach ($permissionParent as $itemParent)
                    <div class="card border-primary mb-3 ">
                        <div class="card-header col-md-12 bg-info ">
                            <label >
                                <input type="checkbox" name="parent_id" id="" class="checkbox_wrapper">
                                {{ $itemParent->name }} 
                            </label>
                        </div>
                        <div class="row">
                            @foreach ( $itemParent->permissionChildren as $itemChildren )
                                <div class="card-body text-primary col-md-3">
                                    <label >
                                        <input type="checkbox" name="permission_id[]" class="checkbox_children" id="" value="{{ $itemChildren->id }} ">
                                        {{ $itemChildren->name }} 
                                    </label>    
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
               
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   
        
    </div>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

@endsection
