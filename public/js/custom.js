$(document).ready(function () {

  $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
  });

  $.fn.datepicker.defaults.format = "yyyy/mm/dd";
  $.fn.datepicker.defaults.todayHighlight =

  $('#datepicker').datepicker();

  $('[data-toggle="tooltip"]').tooltip();
   $(".dropdown-toggle").dropdown();
  
  $('.select').select2({
    placeholder: 'Select...',
    width: '100%' 
  });

//modal - add horse quick
$( '#add-horse-quick-btn' ).click(function(e) {
  e.preventDefault(); 
  $.ajax({
    type: "POST",
    url: '/add-horse-quick',
    beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
    data: $('#add-horse-quick').serialize(),
    success: function( msg ) { alert( msg );}
  });
});

//modal - add person quick
$( '#add-person-quick-btn' ).click(function(e) {
  e.preventDefault(); 
  $.ajax({
    type: "POST",
    url: '/add-person-quick',
    beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
    data: $('#add-person-quick').serialize(),
    success: function( msg ) { alert( msg );}
  });
});

//modal - add race quick
$( '#add-race-quick-btn' ).click(function(e) {
  e.preventDefault(); 
  $.ajax({
    type: "POST",
    url: '/add-race-quick',
    beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
    data: $('#add-horse-quick').serialize(),
    success: function( msg ) { alert( msg );}
  });
});


});//end ready
