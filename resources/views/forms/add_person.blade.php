@extends('layouts.master')

@section('title', 'Add Person')

@section('content')
<div class="page-header"><h1>Add Person <small>Tracking owners, breeders, and hexers</small></h1></div>

<form id="add-person" class="form-horizontal" method="post">

  <div class="row">
    <div class="col-sm-12">          
            @if($validate == true)
            <div id="success "class="alert alert-success" role="alert">
              Successful addition!
            </div><!--end alert-->
            @endif        
          <div id="rsvErrors" class="alert alert-danger"></div>
    </div><!--end col-->
  </div><!--end row-->

  <div class="row">
    <div class="col-sm-12">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Basic Info</h4>
        </div>

        <div class="panel-body">
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

          </div><!--end panel-body-->
        </div><!--end panel--> 

      </div><!--end col-->
    </div><!--end row-->

    <div class="row">
      <div class="col-sm-offset-4 col-sm-4">
        <div class="text-center form-group"> 
          <button type="submit" class="btn-lg btn-block btn btn-default">Add</button>    
        </div>
      </div><!--end col-->
    </div><!--end row-->

  </form>
  @endsection
