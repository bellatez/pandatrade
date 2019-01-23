@extends('layout.masterauth')

@section('content')
  <body class="hold-transition" style="background: #000;">
    <div class="login-logo">
      <img src="{{asset('panda.ico') }}" alt="Panda Business">
    </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="box box-solid box-default">
          <!-- /.login-logo -->
            <h3 class="box-header" style="text-align: center;">Reset Password</h3>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
          <div class="box-body">
            <form action="{{ route('password.email') }}" method="post">
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
                <div class="form-group">
                  <div class="col-md-6 pull-right">
                    <button type="submit" class="btn btn-primary btn-block pull-right">Send Password Reset Link</button>
                  </div>
                </div>
            </form>
            <div class="row">
              <div class="col-md-6">
                <h5><a href="/gtrade/login" class="">Go to Login</a></h5>
                <h5><a href="/gtrade/register" class="text-center">Register a new membership</a></h5>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
  </body>
@endsection