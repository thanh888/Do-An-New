@extends('admin_layout')
@section('title')
    <title>User</title>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('backend/UserManager/list.js') }}"></script>
@endsection
@section('content')

   
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <div class="row">
            <div class="col-md-12">
                <a name="" id="" class="btn btn-primary float-right m-2" href="{{route('User.create')}}" role="button">Add</a>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                          
                        <tr>
                          <th scope="row">1</th>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                            <a href="{{ route('User.edit',['id'=>$user->id]) }}" class="btn btn-default">Edit</a>
                            <a data-url="{{ route('User.delete',['id'=>$user->id]) }}" class="btn btn-danger action_delete">Delete</a>
                          </td>
                        </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
            </div>
            <div class="col-md-12">
              {{ $users->links() }}
            </div>
        </div>
      
    </div>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

@endsection
