$('#sendReport').click(function(event) {
  var message = $('#message').val();
  $.ajax({
    url: '/gtrade/reportBug',
    type: 'POST',
    data: {'message': message, '_token':$('input[name=_token]').val()},
  })
  .done(function() {
    swal("Report Sent", "Your Report was Sent successfully", {
      icon: "success",
      timer: 1800
    });
  })
  .fail(function() {
    swal("Oops", "We couldn't connect to the server!", {
      icon: "error",
      timer: 1800
    });
  })
}); 

 
