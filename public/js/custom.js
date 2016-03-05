$(document).ready(function () {
    $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
  });


  $('.datepicker').datepicker({
    format:"yyyy-mm-dd",
    todayHightlight: true,
    todayBtn: true
  });
});//end ready
