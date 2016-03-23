@include('includes.modal')
<form id="person" class="form" role="form" method="post" action="/quick-add-person">

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="add-person-quick_Label">Add Person Quick</h4>
  </div>

  <div class="modal-body"> 

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
      <label for="person_name" class="control-label">
      <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span>
      </small>
      Username
      </label>
      <input name="username" class="form-control" id="person_name" placeholder="...">  
    </div><!--end username-->       

    <div class="form-group">
      <label for="person_name" class="control-label">
       <small><span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span></small>  
      Stable Name
      </label>
      <input name="stable_name" class="form-control" id="person_stable_name" placeholder="...">
    </div><!--end stable name--> 

    <div class="form-group">
      <label for="person_name" class="control-label">
       <small>
       <span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span>
       </small>          
      Stable Prefix
      </label>      
      <input name="stable_prefix" class="form-control" id="person_stable_prefix" placeholder="..."> 
    </div><!--end stable prefix--> 

  </div>

  <div class="modal-footer">
    <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
    <button id="add-person-quick-btn" type="submit" class="btn btn-primary">Save</button>
  </div>

</form>
