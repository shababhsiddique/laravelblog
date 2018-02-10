@extends('layouts.master')

@section('mainContent')

<div class="col-md-8 offset-md-2 col-sm-12 margintop50">
    <div class="card">

        <div class="card-body">
            <div class="form-header default-color z-depth-1-half">
                <h3>
                    <i class="fa fa-pencil"></i> Register
                </h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class=" form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class=" form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                    <label for="mobile" class="col-md-4 control-label">Mobile Number</label>

                    <div class="col-md-12">
                        <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>

                        @if ($errors->has('mobile'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>




                <div class=" form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <br/>

                <div class=" form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>                           

                </div>

                <div class=" form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                
                <br/>

                <div class=" form-group">
                    <div class="col-md-12 col-md-offset-4">
                        <button type="submit" class="btn btn-default waves-effect waves-light">
                            <strong>Register</strong>
                        </button>
                        
                        <a href="{{url('/login')}}" class="btn btn-sm btn-primary waves-effect waves-light" ><span class="text-lowercase">Already Member?</span> &nbsp;&nbsp;&nbsp;<strong>Sign In</strong> <div class="ripple-container"></div></a>
                    </div>
                </div>
                
                
            </form>
        </div>
    </div>
</div>

@endsection
