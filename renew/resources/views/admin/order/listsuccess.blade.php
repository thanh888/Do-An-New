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
                            
                            <th>Tên khách hàng</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Sđt</th>
                            <th>Địa chỉ</th>
                            <th>Thời gian giao</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                       
                        @foreach($products as $product)
                        <tr>
                            <td  class="align-middle">
                                {{$product->name_customer}}
                            </td>
                            <td  class="align-middle">
                                {{ $product->name_product }}
                            </td>
                            <td  class="align-middle">
                                {{ number_format($product ->price) }}
                            </td>
                            <td  class="align-middle">
                                {{ $product ->phone }}
                            </td>
                            <td  class="align-middle">
                                {{$product ->address }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $product->updated_at }}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                        
                        
                    </div>
                    
                </div>
            </div>
    
@endsection
@section('js')
            
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
        {{-- <script type="text/javascript">
        $(document).on('click', '.edit', function() {
            var _this = $(this).parent('tr');
            $('#nameproduct').val(_this.find('.align-middle').text());
        });
        </script> --}}
        <script src="{{ asset('backend/ordered/list.js') }}"></script>
@endsection
