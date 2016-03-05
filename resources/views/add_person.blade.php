@extends('layouts.master')

@section('title', 'Add Person')

@section('content')
<div class="page-header"><h1>Add Person <small>Recording horse origins</small></h1></div>




<form id="add-horse" class="form-horizontal" method="post">
  <div class="row">
    <div class="col-sm-12">
      @if($validate == true)
      <div class="alert alert-success" role="alert">
        Successful addition!
      </div><!--end alert-->
      @endif
      <div class="row">
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Basic Info</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label for="person_name" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
              <input name="username" class="form-control" id="person_name" placeholder="Haubing">              
            </div>             
          </div><!--end username-->       

          <div class="form-group">
            <label for="person_name" class="col-sm-3 control-label">Stable Name</label>
            <div class="col-sm-9">       
              <input name="stable_name" class="form-control" id="person_stable_name" placeholder="Shashka Stables">         
            </div>             
          </div><!--end stable name--> 

          <div class="form-group">
            <label for="person_name" class="col-sm-3 control-label">Stable Prefix</label>
            <div class="col-sm-9"> 
              <input name="stable_prefix" class="form-control" id="person_stable_prefix" placeholder="Haubing">   
            </div>             
          </div><!--end stable prefix--> 

        </div><!--end panel-body-->
      </div><!--end panel-->
    </div><!--end row-->


    <div class="pull-right">
     <button type="submit" name="submit" class="btn-lg btn btn-primary">Add</button>      
   </div>
 </div><!--end col-->
</div><!--end row-->
</form>
@endsection
