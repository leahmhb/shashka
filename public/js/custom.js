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
    "pageLength": 25,
    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],

  });

   $('#t_entries').DataTable( {
        "order": [[ 4, "desc" ]]
    } );

  $('#t_races, #t_horses, #t_entries, #t_lineages').DataTable();

  $('#t_users, #t_person').DataTable({
    "paging": false,
    "searching": false
  });


  /******* CHOSEN ******/
  $( "select" ).addClass( "select" );

  $(".select").chosen({
    width: "100%",
    placeholder_text_single: "Select...",
    no_results_text: "Oops, nothing found!",
    disable_search_threshold: 5,
    search_contains: true
  });

});//end ready



