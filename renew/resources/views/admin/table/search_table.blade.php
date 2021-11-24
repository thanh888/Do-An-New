@extends('admin_layout')
@section('title')
    <title>Danh sách đơn đặt bàn</title>
@endsection
@section('content')
    <!--Datatable-->
    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
        <h6 class="mb-2">Danh sách tìm kiếm</h6>
        <div class="table-responsive">
            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-9 col-md-7">
                        <form action="{{ route('AdminTable.search') }}" method="get">
                            <div id="example_filter" class="dataTables_filter"><label><input type="search"
                                        class="form-control form-control-sm" name="key" placeholder="Nhập tên tìm kiếm"
                                        aria-controls="example"></label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id=" example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Nội dung</th>
                                <th>Ngày đặt</th>
                                <th>Thời gian</th>
                                <th>SDT</th>
                                <th style="width: 60px;"></th>
                            </tr>
                        </thead>
                       @foreach($data as $key)
                        <tr>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->descript }}</td>
                            <td>{{ $key->date }}</td>
                            <td>{{ $key->time }}</td>
                            <td>{{ $key->sdt }}</td>
                            <td>
                                <a href="{{ route('AdminTable.delete',['id'=>$key->id]) }}" type="button"
                                    class="btn btn-danger icon-round shadow"
                                    onclick="return confirm('Bạn có chắc xóa không?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="d-flex">
                        <div class="ml-auto">
                            <nav aria-label="">
                              
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/Datatable-->
@endsection