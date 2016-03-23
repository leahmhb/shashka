$(document).ready(function () {

  $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
  });

  $('.collapse').collapse("hide");

  $.fn.datepicker.defaults.format = "yyyy-mm-dd";
  $.fn.datepicker.defaults.todayHighlight = true;

  $('#datepicker').datepicker();

  $('[data-toggle="tooltip"]').tooltip();
  $(".dropdown-toggle").dropdown();
  
  $('.select').select2({
    placeholder: 'Select...',
    width: '100%' 
  });

// Fill modal with content from link href
$("#quick-form").on("show.bs.modal", function(e) {
  var link = $(e.relatedTarget);
  $(this).find(".form-part").load(link.attr("href"));
});

});//end ready

//ajax
var frm = $('#person-quick');

$(frm).submit(function (ev) { 
  ev.preventDefault();

  var formData = $(frm).serialize();

  $.ajax({
    type: $(frm).attr('method'),
    url: $(frm).attr('action'),
    data: $(frm).serialize(),
    success: function (data) {
      alert('Success');
    }
  });
});

