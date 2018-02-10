@extends('layouts.master')

@section('mainContent')

<div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2 col-sm-12 margintop50">
    <div class="card">
        <div class="card-body">
            <div class="form-header blue  z-depth-1-half">
                <h3>
                    <i class="fa fa-lock"></i> Login
                </h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>
                
                
                <br/>
                
                <div class=" form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            <strong>Login</strong>
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 0px">
                            Forgot Your Password?
                        </a>
                        <br/>                        
                        <a href="{{url('/register')}}" class=" btn btn-sm btn-default waves-effect waves-light" >
                             <span class="text-lowercase">New Here?</span> &nbsp;&nbsp;&nbsp;<strong>Register Now!</strong> <div class="ripple-container"></div>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
