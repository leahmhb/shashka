$(document).ready(function () {

  $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
  });

  $.fn.datepicker.defaults.format = "yyyy-mm-dd";
  $.fn.datepicker.defaults.todayHighlight = true;
  $.fn.datepicker.defaults.todayBtn = true;
  
  $('#datepicker').datepicker();

  $.extend( $.fn.dataTable.defaults, {
    "pagingType": "simple_numbers",    
  });

  $('#races, #horses, #entries').DataTable();


  $('[data-toggle="tooltip"]').tooltip();
  $(".dropdown-toggle").dropdown();
  
  $( "select" ).addClass( "select" );

  $(".select").chosen({
    width: "100%",
    placeholder_text_single: "Select...",
    no_results_text: "Oops, nothing found!",
});

// Fill modal with content from link href
$("#quick-form").on("show.bs.modal", function(e) {
  var link = $(e.relatedTarget);
  $(this).find(".form-part").load(link.attr("href"));
});

var formData = "";
//ajax
$('#quick').submit(function (ev) { 

  formData = $(this).serialize();

  $.ajax({
    type: "POST",
    url: "/quick-person",
    data: formData,
    success: function (data, textStatus, jqXHR) {
      console.log(data);
      console.log(textStatus);     
    },
    error: function(jqXHR, textStatus, errorThrown){
      console.log(textStatus);
      console.log(errorThrown);   
    }
 });//end ajax

  ev.preventDefault();

  return false;

});//end submit


});//end ready



