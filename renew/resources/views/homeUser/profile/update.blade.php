@extends('homeUser.profile.layout.layout')
@section('content')
<div class="container-fluid py-4">
  <div class="row">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-12 col-xl-12">
              <div class="card h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Update Profile Information</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <a href="#">
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Profile" aria-label="Edit Profile"></i><span class="sr-only">Edit Profile</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <form action="{{ route('profile.pupdate') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $profile->id }}">
                    
                    <hr class="horizontal gray-light my-4">
                    <div class="form-group">
                      <label for="">Full Name:</label>
                      <input type="text" class="form-control" name="fullname" value="{{ $profile->fullname }}">
                    </div>
                    <div class="form-group">
                      <label for="">Email:</label>
                      <input type="text" class="form-control" name="email" value="{{ $profile->email }}">
                    </div>
                    <div class="form-group">
                      <label for="">Mobile:</label>
                        <input type="text" name="phone" class="form-control"  value="{{ $profile->phone }}">
                    </div>
                    <div class="form-group">
                      <label for="">Location:</label>
                        <input type="text" name="location" class="form-control"  value="{{ $profile->location }}">
                    </div>
                    <div class="form-group">
                      <label for="">Social:</label>
                        <input type="text" name="linkfb" class="form-control"  value="{{ $profile->linkfb }}">
                    </div>
                    <div class="form-group">
                      <label for="">Các thông tin khác </label>
                      <textarea name="description" class="form-control" style="width: 100%" rows="2">{{ $profile->description }}</textarea>
                  </div>
                      <button type="submit" class="ms-1 btn btn-outline-primary "> Save</button>
                   </form>
                  
                </div>
                {{-- <form action="{{ route('profile.pupdate') }}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{ $profile->id }}">
                <div class="card-body p-3">
                  <p class="text-sm">
                    <textarea name="description" id="" style="width: 100%" rows="2">{{ $profile->description }}</textarea>
                  </p>
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp;<input type="text" name="fullname" value="{{ $profile->fullname }}"></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp;<input type="text" name="phone"  value="{{ $profile->phone }}"></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp;<input type="text" name="location"  value="{{ $profile->location }}"></li>
                    <li class="list-group-item border-0 ps-0 pb-0">
                      <strong class="text-dark text-sm">Social:</strong> &nbsp;   <input type="text" name="linkfb" value="{{ $profile->linkfb }}">     
                    </li>
                    <br>
                    <br>
                    <button type="submit" class="ms-1 btn btn-outline-primary "> Save</button>
                  </ul>
                </div>
              </form> --}}
              </div>
            </div>
          </div>
        </div>
  </div>
  
</div>
@endsection