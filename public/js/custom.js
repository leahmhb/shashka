$(document).ready(function () {
  $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
  });


  $('.datepicker').datepicker({
    format:"dd/mm/yyyy",
    todayHightlight: true,
    todayBtn: true
  });
   });//end ready
