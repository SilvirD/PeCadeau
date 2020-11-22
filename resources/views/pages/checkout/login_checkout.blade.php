@extends('layout')
@section('content')

<link href="{{asset('public/Frontend/css2/main.css')}}" rel="stylesheet">

	@if (\Session::has('login-fail'))
	<div class="alert alert-danger alert-dismissable text-center">
		<button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button> {!!
		\Session::get('login-fail') !!}
	</div>
	@endif

<section id="form">
    <!--form-->
    <div class="container">
        <div class="row"
            style="background-image: url('public/Frontend/image/login-signup.jpg');background-size: cover;">
            <div class="col-sm-6 col-sm-offset-1">
                <div class="login-form">
                    <!--login form-->
                    <h2>LOGIN</h2>
                    <form action="{{URL::to('/login-customer')}}" method="POST">
                        {{csrf_field()}}
                        <div>
                            <input type="text" name="email_account" placeholder="Your email" required />
                            <input type="password" name="password_account" placeholder="Password" required />
                        </div>
                        <button type="submit" class="btn-login-sigup btn-default">Login</button>
                    </form>
                </div>
                <!--/login form-->
            </div>
            <div class="col-sm-6">
                <div class="signup-form">
                    <!--sign up form-->
                    <h2>SIGN UP!</h2>
                    <form action="{{URL::to('/add-customer')}}" method="POST">
                        {{csrf_field()}}
                        <div>
                            <input type="text" name="acc_username" placeholder="Username" required />
                            <input type="password" name="acc_password" placeholder="Password" required />
                            <input type="text" name="acc_name" placeholder="Your name" required />
                            <input type="email" name="acc_email" placeholder="Email Address" required />
                            <input type="text" name="acc_phone" placeholder="Phone number" required />
                        </div>
                        <button type="submit" class="btn-login-sigup btn-default">Sign up</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->

@endsection