@extends('admin_layout')
@section('title')
    <title>Product</title>
@endsection
@section('content')

   
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <!--Order Listing-->
        <div class="product-list">

            <div class="row border-bottom mb-4">
                <div class="col-sm-8 pt-2">
                    <h6 class="mb-4 bc-header">Danh sách danh mục</h6>
                </div>

            </div>

            <div class="table-responsive product-list">

                <table class="table table-bordered table-striped mt-0" id="datatable">
                    <thead>
                        <tr>
                            
                            <th>STT</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Ảnh Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <?php 
                        $message= Session::get('message');
                        if($message){
                            echo '<script> alert("Bạn đã thêm danh mục thành công!");</script>';
                            Session::put('message',null);
                        }
                        
                    ?>
                    <tbody>
                       
                        @foreach($products as $product)
                        <tr>
                            
                            <td style="font-size: 18px;" class="align-middle">{{$product ->id}}</td>
                            <td style="font-size: 18px;" class="align-middle">
                                {{$product->name}}
                            </td>
                            <td style="font-size: 18px;" class="align-middle">
                                <img src="uploads/products/{{$product->image}}" width="100px" height="100px" style="overflow: hidden;">
                            </td>
                            <td style="font-size: 18px;" class="align-middle">
                                {{ number_format($product ->price) }}
                            </td>
                            
                            <td class="align-middle text-center">
                                <a href="{{ route('Product.edit',['id'=>$product->id]) }}" class="btn btn-success edit">
                                    <i class="fa fa-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa {{$product->name}}?')"
                                    href="{{route('Product.delete',['id'=>$product->id])}}"
                                    class="btn btn-danger" role="button"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                        
                        <div class="text-right">
                            <a href="{{ route('Product.create') }}" class="btn btn-outline-theme"><i
                                class="fa fa-plus"></i> Thêm sản phẩm</a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
    
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


    <script type="text/javascript">
    $(document).on('click', '.edit', function() {
        var _this = $(this).parent('tr');
        $('#nameproduct').val(_this.find('.align-middle').text());
    });
    </script>
@endsection
