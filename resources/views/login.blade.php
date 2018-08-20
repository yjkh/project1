@extends('layout.signuploginlayout')
@section('title','Login')
@section('content')

	@if (session('alert'))
		<div class="alert alert-danger alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{ session('alert') }}
		</div>
	@endif 

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				    <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					    <span class="login100-form-title-1">
						   LogIn
					    </span>
				    </div>

				    <form class="login100-form validate-form" action="log">
					    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						  <span class="label-input100">Email</span>
						  <input class="input100" type="email" name="email" placeholder="Enter email" required>
						  <span class="focus-input100"></span>
					    </div>

					    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						  <span class="label-input100">Password</span>
						  <input class="input100" type="password" name="pass" placeholder="Enter password" required>
						  <span class="focus-input100"></span>
					    </div>

					

					    <div class="container-login100-form-btn" >

						    <button class="login100-form-btn  bg-dark">
							 Login
						    </button> 
                        </div>
                    
    
                    </form>
			</div>
		</div>
    </div>
    
@endsection