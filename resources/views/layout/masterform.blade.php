<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('layout.head')
  </head>

  <body class="hold-transition skin-blue sidebar-mini fixed">
    <div class="wrapper" id="app">

      <header class="main-header">
        @include('layout.header')    
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        @include('layout.sidebar')
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('active')
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>@yield('active')</a></li>
            <li class="active">@yield('active1')</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">@yield('form-title')</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action=@yield('form-action') method="POST">
                  {{ csrf_field() }}
                  <div class="box-body" id="app">
                    @if (count($errors)>0)
                      <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                          {{$error}}
                        @endforeach
                      </div>
                    @endif
                    <div class="overlay" v-if="loading">
                      <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    @section('form')
                    @show
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">@yield('submitbtn')</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->

    @include('layout.foot')
  </body>
 </html>
