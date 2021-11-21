@extends('admin_layout')
@section('title')
    <title>Category</title>
@endsection
@section('content')

   
<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
    <!--Order Listing-->
    <div class="product-list">

        <div class="row border-bottom mb-4">
            <div class="col-sm-8 pt-2">
                <h6 class="mb-4 bc-header">Danh sách danh mục
                    <a href="{{route('Category.create')}}" class="fa fa-plus"
                        style="margin-left:4px;color:#00cc6a" aria-hidden="true"></a>
                </h6>
            </div>
        </div>
        <div class="table-responsive product-list">

            <table class="table table-bordered table-striped mt-0" id="datatable">
                <thead>
                    <tr>
                        <th style="width: 10px;" class="p-0 pr-4 align-middle">
                            <div class="form-check-box cta">
                                <span class="color1">
                                    <input type="checkbox" id="orderAll">
                                    <label for="orderAll"></label>
                                </span>
                            </div>
                        </th>
                        <th>ID Danh Mục</th>
                        <th>Tên Danh Mục</th>
                        <!-- <th>Tổng tiền</th> -->
                        <th>Ngày thêm</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($categories as $category)
                    <tr>
                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                            <div class="form-check-box cta">
                                <span class="color1">
                                    <input type="checkbox" id="order2">
                                    <label for="order2"></label>
                                </span>
                            </div>
                        </td>
                        <td style="font-size: 18px;">{{$category ->id}}</td>
                        <td style="font-size: 18px;" class="align-middle">
                            {{$category ->name}}
                        </td>
                        <td style="font-size: 18px;">{{$category->created_at}}</td>
                        <td class="align-middle text-center">
                            <a href="{{ route('Category.edit', ['id'=>$category->id]) }}" class="btn btn-success edit" ><i class="fa fa-pencil"></i></a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa {{$category->name}}?')"
                                href="{{ route('Category.delete', ['id'=>$category->id]) }}"
                                class="btn btn-danger" role="button"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
    <!--/Order Listing-->
</div>
</div>

    
@endsection
