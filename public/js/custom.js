$(document).ready(function () {
  /*******DROP DOWN******/
  $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
  });

  $(".dropdown-toggle").dropdown();

  /*******TOOL TIPS******/
  $('[data-toggle="tooltip"]').tooltip();

  /*******DATE PICKER******/
  $.fn.datepicker.defaults.format = "yyyy-mm-dd";
  $.fn.datepicker.defaults.todayHighlight = true;
  $.fn.datepicker.defaults.todayBtn = true;
  $.fn.datepicker.defaults.clearBtn = true;
  
  $('#datepicker').datepicker();

  /*******DATA TABLE******/
  $.extend( $.fn.dataTable.defaults, {
    "pagingType": "simple",  
  });

  $('#t_races, #t_horses, #t_entries, #t_person').DataTable();

  /******* CHOSEN ******/
  $( "select" ).addClass( "select" );

  $(".select").chosen({
    width: "100%",
    placeholder_text_single: "Select...",
    no_results_text: "Oops, nothing found!",
  });

  /******* MODAL FORMS ******/
  $("#quick-form").on("show.bs.modal", function(e) {
    var link = $(e.relatedTarget);
    $(this).find(".form-part").load(link.attr("href"));
  });

  /******* AJAX FORMS******/
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
  
  var formData = "";

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



