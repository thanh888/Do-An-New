@extends('admin_layout')
@section('title')
    <title>Roles</title>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('backend/UserManager/list.js') }}"></script>
@endsection
@section('content')

   
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <div class="row">
            <div class="col-md-12">
                <a name="" id="" class="btn btn-primary float-right m-2" href="{{route('Role.create')}}" role="button">Add</a>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên vai tro</th>
                        <th scope="col">Mo ta vai tro</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($roles as $role)
                          
                        <tr>
                          <th scope="row">1</th>
                          <td>{{ $role->name }}</td>
                          <td>{{ $role->display_name }}</td>   
                          <td>
                            <a href="{{ route('Role.edit',['id'=>$role->id]) }}" class="btn btn-default">Edit</a>
                            <a data-url="{{ route('Role.delete', ['id'=>$role->id]) }}" class="btn btn-danger action_delete">Delete</a>
                          </td>
                        </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
            </div>
            <div class="col-md-12">
              {{ $roles->links() }}
            </div>
        </div>
      
        
        
    </div>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

@endsection
