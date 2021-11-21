@extends('homeUser.login.layout_login')
@section('title')
<title>Log in</title>
@endsection
@section('content')
 
<div class="container-fluid login-wrapper">
	<div class="login-box">
		<h1 class="text-center mb-5"><i class="fa fa-rocket text-primary"></i> Sleekadmin</h1>    
		<div class="row">
			<div class="col-md-6 col-sm-6 col-12 login-box-info">
				<h3 class="mb-4">Sign up</h3>
				<p class="mb-4">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
				<p class="text-center"><a href="{{ route('home.register') }}" class="btn btn-light">Register here</a></p>
			</div>
			<div class="col-md-6 col-sm-6 col-12 login-box-form p-4">
				<h3 class="mb-2">Login</h3>
				<small class="text-muted bc-description">Sign in with your credentials</small>
				<form action="{{ route('home.postLogin') }}" method="post" class="mt-2">
					@csrf
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control mt-0" name="email" placeholder="Email" aria-label="Emali" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
						</div>
						<input type="text" class="form-control mt-0" placeholder="Password" name="password" aria-label="Password" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label>
								<input type="checkbox" name="remembered">
								Remember me
							</label>
						</div>
					</div>

					<div class="form-group">
						<button class="btn btn-theme btn-block p-2 mb-1">Login</button>
						<a href="#">
							<small class="text-theme"><strong>Forgot password?</strong></small>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>    

@endsection