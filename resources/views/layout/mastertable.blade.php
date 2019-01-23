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

      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        @include('layout.sidebar')
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('active1')
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>@yield('active1')</a></li>
            <li class="active">@yield('active')</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content" id="app">
          <div class="row">
            <div class="col-xs-12"> 
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">@yield('table_title')</h3>
                    <div class="pull-right">
                      <a href=@yield('createbtn') class="btn btn-primary btn-flat">
                        <span class="fa fa-plus">&nbsp;New</span>
                      </a>
                      @yield('extra-btns')
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body" id="table" style="overflow-x: auto;">
                    <table id="example2" class="table table-bordered table-striped">
                      <thead>
                        @section('thead')
                        @show
                      </thead>
                      <tbody>
                        @section('tbody')
                        @show
                        <div class="overlay" v-if="loading">
                          <i class="fa fa-refresh fa-spin"></i>
                        </div>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>  
          </div>
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->

    @include('layout.foot')
  </body>
  <script>
    $(document).ready(function(){

      //sweet alert to delete items from tables
      $(document).on('click', '#confirm_delete', function(event){
        var id = $(this).data('item-id');
        warnBeforeRedirect(id);
      });

      function warnBeforeRedirect(id){
        swal({
          title: "Are you sure you want to delete?",
          text: "Once deleted, you will not be able to recover!",
          icon: "warning",
          closeModal: true,
          buttons: {
            confirm: {
              text: "yes, Delete it",
              visible: true,
              closeModal: true
            },
            cancel: {
              text: "Cancel",
              value: null,
              visible: true,
              closeModal: true,
            }
          },
          dangerMode: true,
          showCancelButton: true,
          showLoaderOnConfirm: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.post(@yield('deletebtn'), {'id': id, '_token':$('input[name=_token]').val()}, function(data) {
              swal("The data has been deleted!", {
                icon: "success",
                buttons: false,
                timer: 2000
              });
              $('#table').load(location.href + ' #table');
            });
          } else {
            swal("Delete cancelled!", {
              icon: 'error',
              buttons: false,
              timer: 2000
            });
          }
        });
      };

      //initializing tooltips
      $('[data-toggle="tooltip"]').tooltip();

    });
  </script>
</html>
