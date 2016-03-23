@include('includes.modal')
<form id="person-quick" class="form" role="form" method="post" action="/quick-person" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="add-person-quick_Label">Add Person</h4>
  </div>

  <div class="modal-body"> 

    <div class="form-group">     
      <label for="person_name" class="control-label">
      <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span>
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

  <div class="modal-footer">
    <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
    <button id="person-quick-btn" type="submit" class="btn btn-success">Save</button> 
  </div>

</form>
