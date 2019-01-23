$(function() {
  //multiple select field
  $('.select2').select2()

  //initialize date picker
  $('#datepicker').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  });
  $('#from').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  });
  $('#to').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  });

  //initialize table components
  $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : false,
    'info'        : false,
    'autoWidth'   : true
  });

  //Initialize Calendar
  //Date for the calendar events (dummy data)
  var date = new Date()
  var d    = date.getDate(),
  m    = date.getMonth(),
  y    = date.getFullYear()
  $('#calendar').fullCalendar({
    header    : {
      left  : 'prev,next today',
      center: 'title',
      right : 'month,agendaWeek,agendaDay'
    },
    buttonText: {
      today: 'today',
      month: 'month',
      week : 'week',
      day  : 'day'
    }
  });  
})

//vue loading and profile password
var app = new Vue({
  el: '#app',
  data: {
    password_options:'keep',
    loading: false
  }
});