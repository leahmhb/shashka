@include('includes.modal')
<form id="add-horse-quick" class="form" role="form" method="post" action="/quick-add-horse">
 <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="add-horse-quick_Label">Add Horse Quick</h4>
</div>

<div class="modal-body">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label for="call-name" class="control-label">
      <small>
        <span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span>
      </small>
      Call Name
    </label>               
    <input type="text" class="form-control" name="call_name" id="call-name" placeholder="...">
  </div><!--end call-name-->

  <div class="form-group">
    <label for="registered-name" class="control-label">
      <small>
        <span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span>
      </small>  
      Reg'd Name
    </label>
    <input type="text" class="form-control" name="registered_name" id="registered-name" placeholder="...">
  </div><!--end registered-name-->   

  <div class="form-group">
    <label for="sex" class="control-label">
      <small>
        <span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required">
        </span>
      </small>
      Sex
    </label>
    <select name="sex" class="form-control select">
      <option></option>
      @foreach ($domain['sexes'] as $sex)          
      <option value="{{$sex['sex']}}">{{$sex['sex']}}</option>
      @endforeach
    </select>           
  </div><!--end sex-->   

  <div class="form-group">
    <label for="stall_path" class="control-label">
      <small>
        <span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span>
      </small>  
      Stall Page
    </label>
    <input type="text" class="form-control" name="stall_path" id="stall page" placeholder="www">
  </div><!--end stall page-->

  <div class="form-group">
    <label for="owner-name" class="control-label">
      <small>
        <span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span>
      </small>
      Owner
    </label>
    <select name="owner" class="form-control select">
      <option></option>
      @foreach ($domain['person'] as $person)          
      <option value="{{$person['username']}}">{{$person['username']}}</option>
      @endforeach
    </select>
  </div><!--end owner-name-->

</div><!--end modal body-->

<div class="modal-footer">
  <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
  <button id="add-horse-quick-btn" type="submit" class="btn btn-primary">Save</button>
</div><!--end modal footer-->

</form>
