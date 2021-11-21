@extends('homeUser.login.layout_login')
@section('title')
<title>Admin sign up</title>
@endsection
@section('content')

<div class="container-fluid login-wrapper">
	<div class="login-box">
		<h1 class="text-center mb-5"><i class="fa fa-rocket text-primary"></i> Sleekadmin</h1>    
		<div class="row">
			<div class="col-md-6 col-sm-6 col-12 login-box-info">
				<h3 class="mb-4">Sign in</h3>
				<p class="mb-4">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
				<p class="text-center"><a href="" class="btn btn-light">Login here</a></p>
			</div>
			<div class="col-md-6 col-sm-6 col-12 login-box-form p-4">
				<h3 class="mb-2">Sign up</h3>
				<small class="text-muted bc-description">Create new account</small>
				<form action="{{ route('home.postRegister') }}" method="post" class="mt-2">
					@csrf
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control mt-0" name="name" placeholder="Ten nguoi dung" aria-label="Username" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control mt-0" name="email" placeholder="johndoe@gmail.com" aria-label="email" aria-describedby="basic-addon1">
					</div>

					{{-- <div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
						</div>
						<input type="text" class="form-control mt-0"  placeholder="555-098-444" aria-label="phone" aria-describedby="basic-addon1">
					</div> --}}

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
						</div>
						<input type="text" class="form-control mt-0" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
					</div>

					<div class="form-group">
						<button class="btn btn-theme btn-block p-2 mb-1">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>  
@endsection