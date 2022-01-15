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
                      <h6 class="mb-0">Profile Information</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <a href="{{ route('profile.update') }}">
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Profile" aria-label="Edit Profile"></i><span class="sr-only">Edit Profile</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <p class="text-sm">
                    {{ $profile->description }}
                  </p>
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; {{ $profile->fullname }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; {{ $profile->phone }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ $profile->email }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp;{{ $profile->location }}</li>
                    <li class="list-group-item border-0 ps-0 pb-0">
                      <strong class="text-dark text-sm">Social:</strong> &nbsp;
                      <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="{{ $profile->linkfb }}">
                        <i class="fab fa-facebook fa-lg" aria-hidden="true"></i>
                      </a>
                      <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                        <i class="fab fa-twitter fa-lg" aria-hidden="true"></i>
                      </a>
                      <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                        <i class="fab fa-instagram fa-lg" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  
</div>
@endsection