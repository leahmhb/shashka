
<div id="ajax-modal" class="modal fade" tabindex="-1" style="display: none;"></div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>    

<!-- Plugins -->
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/rsv.jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('js/bootstrap-modal.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<!-- Custom -->
<script src="{{ asset('js/custom.js') }}"></script>

<script id="ajax" type="text/javascript">

var $modal = $('#ajax-modal');

$('#demoBtn').on('click', function(){
  // create the backdrop and wait for next modal to be triggered
  $('body').modalmanager('loading');

  setTimeout(function(){
     $modal.load('{{asset("modal_ajax_test.html")}}', '', function(){
      $modal.modal();
    });
  }, 1000);
});

$modal.on('click', '.update', function(){
  $modal.modal('loading');
  setTimeout(function(){
    $modal
      .modal('loading')
      .find('.modal-body')
        .prepend('<div class="alert alert-info fade in">' +
          'Updated!<button type="button" class="close" data-dismiss="alert">&times;</button>' +
        '</div>');
  }, 1000);
});

</script> 