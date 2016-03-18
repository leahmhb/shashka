$(document).ready(function () {

  $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
  });

  $.fn.datepicker.defaults.format = "yyyy-mm-dd";
  $.fn.datepicker.defaults.todayHighlight = true;

  $('#datepicker').datepicker();

  $('[data-toggle="tooltip"]').tooltip();
  $(".dropdown-toggle").dropdown();
  
  $('.select').select2({
    placeholder: 'Select...',
    width: '100%' 
  });

//modal - add person quick
$( '#add-person-quick-btn' ).click(function(e) {
  alert($('#add-person-quick').serialize());
  e.preventDefault(); 

 /* $.ajax({
    type: "POST",
    url: '/add-person-quick',
    beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
    data: $('#add-person-quick').serializeArray(),
    success: function( msg ) { 
      alert( msg ); 
      
    }//end success
  });//end ajax*/
});//end submit



});//end ready
