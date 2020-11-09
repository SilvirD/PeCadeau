@extends('layout')
@section('content')

<link href="{{asset('public/Frontend/css2/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('public/Frontend/css2/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{asset('public/Frontend/css2/price-range.css')}}" rel="stylesheet">
<link href="{{asset('public/Frontend/css2/animate.css')}}" rel="stylesheet">
<link href="{{asset('public/Frontend/css2/main.css')}}" rel="stylesheet">
<link href="{{asset('public/Frontend/css2/responsive.css')}}" rel="stylesheet">

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>LOGIN</h2>
						<form action="#">
							<input type="text" name = "email_account" placeholder="Your email" />
							<input type="password" name = "password_account" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>SIGN UP!</h2>
                        <form action="{{URL::to('/add-customer')}}" method = "POST">
                        {{csrf_field()}}
							<input type="text" name = "acc_username" placeholder="Username"/>
                            <input type="password"  name = "acc_password" placeholder="Password"/>
                            <input type="text" name = "acc_name" placeholder="Your name"/>
							<input type="email" name = "acc_email" placeholder="Email Address"/>
                            <input type="text" name = "acc_phone" placeholder="Phone number"/>
							<button type="submit" class="btn btn-default">Sign up</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
    </section><!--/form-->
    
@endsection