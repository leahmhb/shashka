@extends('layouts.master')

@section('title', 'Update Person')

@section('content')
<div class="page-header"><h1>Update Person <h2><small>Tracking owners, breeders, and hexers</small></h2></h1></div>

<form id="person" class="form-horizontal" method="post">

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
              <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
              Username</label>
              <div class="col-sm-9">
                <input name="username" class="form-control" id="person_name" value="{{ $person['username'] }}">              
              </div>             
            </div><!--end username-->       

            <div class="form-group">
              <label for="stable_name" class="col-sm-3 control-label">
               <small><span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span></small>        
               Stable Name</label>
               <div class="col-sm-9">       
                <input name="stable_name" class="form-control" id="person_stable_name" value="{{ $person['stable_name'] }}">         
              </div>             
            </div><!--end stable name--> 

            <div class="form-group">
              <label for="stable_prefix" class="col-sm-3 control-label">
               <small><span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span></small>        
               Stable Prefix</label>
               <div class="col-sm-9"> 
                <input name="stable_prefix" class="form-control" id="person_stable_prefix" value="{{ $person['stable_prefix'] }}">   
              </div>             
            </div><!--end stable prefix--> 

            <div class="form-group">
              <label for="racing_colors" class="col-sm-3 control-label">                 
               Racing Colors</label>
               <div class="col-sm-9"> 
                <input name="racing_colors" class="form-control" id="person_racing_colors" value="{{ $person['racing_colors'] }}">   
              </div>             
            </div><!--end racing colors--> 

          </div><!--end panel-body-->
        </div><!--end panel--> 

      </div><!--end col-->
    </div><!--end row-->

    <div class="row">
      <div class="col-sm-offset-4 col-sm-4">
        <div class="text-center form-group panel-body"> 
          <button type="submit" class="btn-lg btn-block btn btn-default">Save</button>    
        </div>
      </div><!--end col-->
    </div><!--end row-->

  </form>
  @endsection
