<!DOCTYPE html>
<html>
  <head>
    @include('layout.head')
  </head>

  <body class="hold-transition skin-blue sidebar-mini fixed" data-spy="scroll" data-target="#scrollspy">
  <div class="wrapper">

    <header class="main-header">
      @include('layout.header')    
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <div class="sidebar" id="scrollspy">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="nav sidebar-menu">
          <li class="header">TABLE OF CONTENTS</li>
          <li class="active"><a href="#introduction"><i class="fa fa-circle-o"></i> Introduction</a></li>
          <li><a href="#requirements"><i class="fa fa-circle-o"></i> Requirements</a></li>
          <li class="treeview" id="scrollspy-features">
          <li><a href="#login"><i class="fa fa-circle-o"></i> Login and Registration</a></li>
          <li><a href="#profile"><i class="fa fa-circle-o"></i> Profile</a></li>
          <li class="treeview" id="scrollspy-features">
            <a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Features</a>
            <ul class="nav treeview-menu">
              <li><a href="#features-transactions">Transactions</a></li>
              <li><a href="#features-products">Items</a></li>
              <li><a href="#features-debts">Debts</a></li>
              <li><a href="#features-analysis">Balance sheet</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <h1>
          Panda Trade Documentation
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Documentation</li>
        </ol>
      </div>

      <!-- Main content -->
      <div class="content body">
       @section('content')
       @show

      </div>
    </div>

    @include('layout.foot')
  </body>
</html>
