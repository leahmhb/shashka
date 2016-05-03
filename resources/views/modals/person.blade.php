  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="add-person-quick_Label">Add Person</h4>
  </div><!--end modal header-->
  <div class="modal-body"> 
  <form class="form-horizontal" id="person" method="post"> 
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @include('forms.person')
  </div><!--end modal body-->
 <div class="modal-footer">
         <div class="text-center"> 
        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="quick-btn" type="submit" class="btn btn-primary">Save</button> 
      </div>
      </div><!--end modal footer-->
     </form>
<script>
  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $( "select" ).addClass( "select" );
    $(".select").chosen({width: "100%"});      
});//end ready
</script>

