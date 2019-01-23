<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">{{isset($title) ? $title : 'Balance Sheet'}}</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <label for="Date range"> Select the date range to Generate Sheet</label>
    {{ $slot }}
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" class="btn btn-info">
      Generate
    </button>
  </div>
</div>