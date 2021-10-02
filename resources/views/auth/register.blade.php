@extends('layouts/app')

@section('content')
	@error('name')
        {{$message}}
    @enderror
    @error('email')
        {{$message}}
    @enderror
    @error('password')
        {{$message}}
    @enderror
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('register')}}" method="POST">
					@csrf
                <span class="login100-form-title p-b-26">
						Sign Up
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid nam is: abc">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="confirmer  password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password_confirmation">
						<span class="focus-input100" data-placeholder="Confirmer Password "></span>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Inscription
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Return to Login?
						</span>

						<a class="txt2" href="{{route('login')}}">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
    @endsection
