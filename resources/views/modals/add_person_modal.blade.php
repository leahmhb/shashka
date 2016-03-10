@extends('layouts.modal')

@section('title', 'Add Person')

@section('content')


<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h3>Add Person</h3>
</div>
<div class="modal-body">
  <div class="row">
    <div class="col-sm-12">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Basic Info</h4>
        </div>

        <div class="panel-body">
          <form id="add-person" class="form-horizontal" method="post">

            <div class="form-group">
              <label for="person_name" class="col-sm-3 control-label">
                <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                Username</label>
                <div class="col-sm-9">
                  <input name="username" class="form-control" id="person_name" placeholder="Haubing">              
                </div>             
              </div><!--end username-->       

              <div class="form-group">
                <label for="person_name" class="col-sm-3 control-label">
                 <span class="text-info" data-toggle="tooltip" data-placement="left" title="Required for horses not owned by Haubing">!</span>        
                 Stable Name</label>
                 <div class="col-sm-9">       
                  <input name="stable_name" class="form-control" id="person_stable_name" placeholder="Shashka Stables">         
                </div>             
              </div><!--end stable name--> 

              <div class="form-group">
                <label for="person_name" class="col-sm-3 control-label">
                 <span class="text-info" data-toggle="tooltip" data-placement="left" title="Required for horses not owned by Haubing">!</span>        
                 Stable Prefix</label>
                 <div class="col-sm-9"> 
                  <input name="stable_prefix" class="form-control" id="person_stable_prefix" placeholder="Haubing">   
                </div>             
              </div><!--end stable prefix--> 

            </form>
          </div><!--end panel-body-->
        </div><!--end panel--> 

      </div><!--end col-->
    </div><!--end row-->
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
    <button type="button" class="btn btn-primary">Ok</button>
  </div>

  @endsection
