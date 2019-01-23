@extends('layout.masterauth')

@section('content')
  <body class="hold-transition register-page" style="background: #000;">
    <div class="register-box">
      <div class="register-logo">
        <img src="{{asset('panda.ico') }}" alt="Panda Business">
      </div>
      <!-- /.register-logo -->
      <div class="register-box-body">
        <p class="register-box-msg">Reset Password</p>

        <form action="{{ route('password.request') }}" method="post">
          {{ csrf_field()}}

          <input type="hidden" name="token" value="{{ $token }}">

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

          <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

              @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
              @endif
          </div>

          <div class="row">
            <div class="col-xs-4 pull-right">
              <button type="submit" class="btn btn-success btn-block btn-flat">Reset Password</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
  </body>
@endsection