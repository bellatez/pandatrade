@extends('layout.masterauth')

@section('content')
  <body class="hold-transition">
    <div class="login-logo" id="app">
      <h3>GNY Transax</h3>
    </div>
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class=" register-box box box-solid box-default">
          <h3 class="box-header" style="text-align: center;">Create Account</h3>
          <div class="box-body">
            @if (count($errors)>0)
              <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  {{$error}}
                @endforeach
              </div>
            @endif
            <form action="{{route('register')}}" method="post">
              {{ csrf_field()}}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="overlay">
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

              </div>
              <div class="row">
                <div class="col-sm-6">
                  <h5><a href="/gtrade/login" class="">I already have a membership</a></h5>
                </div>
                <div class="col-sm-6 pull-right">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

          </div>
          <!-- /.form-box -->
        </div>
      </div>
    </div> 
  </body>
@endsection