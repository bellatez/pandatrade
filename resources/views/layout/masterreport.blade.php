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
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        @section('content')
        @show
      </div>
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

  @include('layout.foot')
</body>
</html>
