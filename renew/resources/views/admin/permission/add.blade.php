@extends('admin_layout')
@section('title')
    <title>Permission</title>
@endsection

@section('content')

   
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <div class="row">
           
            <div class="col-md-12">
                <form method="post" action="{{ route('Permission.store') }}">
                  @csrf
                    <div class="form-group">
                      <label >Ten action</label>
                      <input type="text" class="form-control" name="name"  placeholder="Nhap ten module">
                    </div>
                    <div class="form-group">
                      <label >Mo ta module</label>
                      <textarea class="form-control" name="display_name" placeholder="Mo ta module" rows="5"></textarea>
                     
                    </div>
                    <div class="form-group">
                        <label>Chon module cha</label>
                        <select class="form-control" name="parent_id">
                          <option value="0">Chon danh muc</option>
                          {!! $htmlOption !!}
                          {{-- <option value="">{!! $htmlOption !!}</option> --}}
                        </select>
                    </div>
                    <div class="form-group">
                      <label >key code</label>
                      <input type="text" class="form-control" name="key_code"  placeholder="Nhap key code">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

@endsection
