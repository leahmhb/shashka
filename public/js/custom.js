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
    allow_single_deselect: true,
    search_contains: true
  });

});//end ready

/******* FILTER RESETS ******/

$("#t_entry_filter_reset").on('click', function(){
  $("#entry-filter").find(':input').each(function(){
    $(this).val('');
    $(this).trigger("chosen:updated");
  });
  //window.location.replace("/entry-table");
});

$("#t_race_filter_reset").on('click', function(){
  $("#race-filter").find(':input').each(function(){
    $(this).val('');
    $(this).trigger("chosen:updated");
  });
  //window.location.replace("/race-table");
});

$("#t_horse_filter_reset").on('click', function(){
  $("#horse-filter").find(':input').each(function(){
    $(this).val('');
    $(this).trigger("chosen:updated");
  });
  //window.location.replace("/horse-table");
});

$("#t_lineage_filter_reset").on('click', function(){
  $("#lineage-filter").find(':input').each(function(){
    $(this).val('');
    $(this).trigger("chosen:updated");
  });
  //window.location.replace("/lineage-table");
});

