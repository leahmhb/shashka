$(document).ready(function () {
  $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
  });
  $.fn.datepicker.defaults.format = "yyyy/mm/dd";
  $.fn.datepicker.defaults.todayHighlight =

  $('#datepicker').datepicker();

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  
});//end ready
