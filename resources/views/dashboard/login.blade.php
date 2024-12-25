@extends('dashboard.layouts.main')

@section('main-container')

<body>
<div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="{{ url('/index')}}" class="form-signin">
						<div class="account-logo">
                            <a href="{{ url('/index')}}"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <a href="{{ url('/forgot-password ')}}">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="{{ url('/register ')}}">Register Now</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
   
@endsection