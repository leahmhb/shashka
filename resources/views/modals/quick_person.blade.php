<script>
  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $( "select" ).addClass( "select" );
    $(".select").chosen({width: "100%"});      
});//end ready
</script>
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="add-person-quick_Label">Add Person</h4>
  </div>

  <div class="modal-body"> 
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
    <div class="form-group">     
      <label for="person_name" class="control-label">
      <small><i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
      </small>
      Username
      </label>
      <input name="username" class="form-control" placeholder="...">  
    </div><!--end username-->       

    <div class="form-group">
      <label for="person_name" class="control-label">
       <small><span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span>
       </small>  
      Stable Name
      </label>
      <input name="stable_name" class="form-control" placeholder="...">
    </div><!--end stable name--> 

    <div class="form-group">
      <label for="person_name" class="control-label">
       <small>
       <span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span>
       </small>          
      Stable Prefix
      </label>      
      <input name="stable_prefix" class="form-control" placeholder="..."> 
    </div><!--end stable prefix--> 

  </div>


