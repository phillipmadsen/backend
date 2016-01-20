@extends('backend.auth.auth')

@section('loginform')
<!-- start: LOGIN BOX -->
<div class="box-login">
    <h3>Sign in to your account</h3>
    <p>
        Please enter your name and password to log in.
    </p>
    {{-- <form class="form-login" role="form" method="POST" action="/auth/login"> --}}
    {!! Form::open(array('url' => '/admin/login', 'class' => 'form-login')) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="errorHandler alert alert-danger no-display">
            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
        </div>
        <fieldset>
            <div class="form-group">
                <span class="input-icon">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                    <i class="fa fa-envelope"></i> </span>
            </div>
            <div class="form-group form-actions">
                <span class="input-icon">
                    <input type="password" class="form-control password" name="password" placeholder="Password">
                    <i class="fa fa-lock"></i>
                {{--     <a class="forgot" href="{{ url('/backend/password/email') }}">
                        I forgot my password
                    </a>  --}}
                    </span>
            </div>
            <div class="form-actions">
                <label for="remember" class="checkbox-inline">
                    <input type="checkbox" class="iCheck grey remember" id="remember" name="remember">
                    Keep me signed in
                </label>
                <button type="submit" class="btn btn-bricky pull-right">
                    Login <i class="fa fa-arrow-circle-right"></i>
                </button>
            </div>
            <div class="new-account">
                Do not have an account yet?
                <a href="#" class="register">
                    Create an account
                </a>
            </div>
        </fieldset>
   {!! Form::close() !!}
</div>
<!-- end: LOGIN BOX  {{-- url('/auth/register') --}}  -->
{{-- @endsection --}}
{{-- @section('forgotform') --}}
<!-- start: FORGOT BOX -->
<div class="box-forgot">
    <h3>Forget Password?</h3>
    <p>
        Enter your e-mail address below to reset your password.
    </p>
    {{-- <form class="form-forgot"> --}}
        {!! Form::open(['url' => '/password/email', 'class' => 'form-forgot']) !!}
        <div class="errorHandler alert alert-danger no-display">
            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
        </div>
        <fieldset>
            <div class="form-group">
                <span class="input-icon">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <i class="fa fa-envelope"></i> </span>
            </div>
            <div class="form-actions">
                <a class="btn btn-light-grey go-back">
                    <i class="fa fa-circle-arrow-left"></i> Back
                </a>
                <button type="submit" class="btn btn-bricky pull-right">
                    Submit <i class="fa fa-arrow-circle-right"></i>
                </button>
            </div>
        </fieldset>
   {!! Form::close() !!}
</div>
<!-- end: FORGOT BOX -->
<div class="box-register">
    <h3>Sign Up</h3>
    <p>
        Enter your personal details below:
    </p>
    {!! Form::open(array('url' => '/admin/register', 'class' => 'form-register')) !!}
        <div class="errorHandler alert alert-danger no-display">
            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
        </div>
        <fieldset>
            <div class="form-group">
                <input type="text" class="form-control" name="display_name" placeholder="Full Name">
            </div>
     {{--        <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="City">
            </div> --}}
            <div class="form-group">
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="grey" value="F" name="gender">
                        Female
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="grey" value="M" name="gender">
                        Male
                    </label>
                </div>
            </div>
            <p>
                Enter your account details below:
            </p>
              <div class="form-group">
                <span class="input-icon">
                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
                    <i class="fa fa-user"></i> </span>
                <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
            </div>
            <div class="form-group">
                <span class="input-icon">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                    <i class="fa fa-envelope"></i> </span>
            </div>
            <div class="form-group">
                <span class="input-icon">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <i class="fa fa-lock"></i> </span>
            </div>
            <div class="form-group">
                <span class="input-icon">
                    <input type="password" class="form-control" name="password_again" placeholder="Password Again">
                    <i class="fa fa-lock"></i> </span>
            </div>
            <div class="form-group">
                <div>
                    <label for="agree" class="checkbox-inline">
                        <input type="checkbox" class="iCheck grey agree" id="agree" name="agree">
                        I agree to the Terms of Service and Privacy Policy
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <a class="btn btn-light-grey go-back">
                    <i class="fa fa-circle-arrow-left"></i> Back
                </a>
                <button type="submit" class="btn btn-bricky pull-right">
                    Submit <i class="fa fa-arrow-circle-right"></i>
                </button>
            </div>
        </fieldset>
          <a href="{{ url('/backend/auth/login') }}" class="text-center">I already have a membership</a>
     {!! Form::close() !!}
</div>
<!-- end: REGISTER BOX -->
@endsection
