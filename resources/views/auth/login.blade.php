@extends('layout.masterauth')

@section('content')
  <body class="hold-transition">
    <div class="login-logo" id="app">
      <h3>GNY Transax</h3>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class=" login-box box box-solid box-default">
          <!-- /.login-logo -->
          <h3 class="box-header" style="text-align: center;">Sign In</h3>
          <div class="box-body">
            <form action="{{route('login')}}" method="post">
              {{ csrf_field()}}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label><br>
                    <a href="{{ route('password.request') }}">I forgot my password</a>
                  </div>
                </div>
                <div class="col-xs-6">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  <a href="/gtrade/register" class="text-center">Register a new membership</a>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
          <!-- /.login-box-body -->
        </div>
        
      </div>
    </div>
  </body>
@endsection