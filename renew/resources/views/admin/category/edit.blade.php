@extends('admin_layout')
@section('title')
    <title>Category Edit</title>
@endsection
@section('content')

  
    <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
        <h6 class="mb-3">Thêm danh mục sản phẩm</h6>
        <?php 
            $message= Session::get('message');
            if($message){
                echo '<script> alert("Bạn đã thêm danh mục thành công!");</script>';
                Session::put('message',null);
            }
        ?>
        <form action="{{route('Category.update', ['id'=>$category->id])}}" method="post">
            {{csrf_field()}}
            <div class="form-group floating-label">
                <input name="name" class="form-control" type="text" value="{{ $category->name }}" required>
                <label for="">Tên danh mục sản phẩm</label>
            </div>

            <div class="form-group">
                <button name="category_product_add" type="submit" class="btn btn-primary"> Thêm danh mục sản
                    phẩm</button>
            </div>
        </form>
    </div>
    
@endsection
