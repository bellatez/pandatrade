@extends('layout.master')

@section('page_title')
  Calendar
@endsection

@section('calendar')
  active
@endsection

@section('active')
  Home
@endsection

@section('active1')
  Calendar
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body no-padding">
          <!-- THE CALENDAR -->
          <div id="calendar">
            <!-- Loading (remove the following to stop the loading)-->
          </div>
        </div>
      </div>
    </div>
@endsection      