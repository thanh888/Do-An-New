@extends('admin_layout')
@section('title')
    <title>Product Add</title>
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
<div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
    <h6 class="mb-3">Thêm danh mục sản phẩm</h6>
    <?php 
        $message= Session::get('message');
        if($message){
            echo '<script> alert("Bạn đã thêm sản phẩm thành công!");</script>';
            Session::put('message',null);
        }
    ?>
    <form action="{{ route('Product.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group row">
            <label class="control-label col-sm-2" for="input-1">Tên Sản phẩm</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input-1" name="name"
                    placeholder="Tên Sản phẩm" />
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="input-4">Giá sản phẩm</label>
            <div class="col-sm-10">
                <input type="number" id="input-4" name="price" class="form-control"
                    placeholder="Giá sản phẩm" />
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="control-label col-sm-2">Danh mục sản phẩm</label>
            <div class="col-sm-10">
                <select class="form-control" name="category_id" id="category">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="exampleFormControlFile1">Ảnh sản phẩm</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="image" id="exampleFormControlFile1">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" >Chon vai tro</label>
            <div class="col-sm-10">
                <select class="form-control select2_init" name="size" >
                    {{-- <option value="0">Chon vai tro</option> --}}
                    @foreach ($sizes as $size)
                        <option value="{{ $size->name }}">{{ $size->name }}</option>
                    @endforeach
                  </select>
            </div>
        </div>
      
        <div class="form-group row">
            <label class="control-label col-sm-2" for="input-11">Mô tả chi tiết</label>
            <div class="col-sm-10">
                <textarea rows="5" class="form-control" id="input-11" name="description"
                    placeholder="Mô tả chi tiết"></textarea>
            </div>
        </div>
        <div class="form-group">
            <button name="product_add" type="submit" class="btn btn-primary"> Thêm sản
                phẩm</button>
        </div>
    </form>
</div>


@endsection
