@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="page-header"><h1>Login<h2><small>Access forms</small></h2></h1></div>

<form id="user" class="form-horizontal" method="post">

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
            <label for="name" class="col-sm-3 control-label">
              <small>
              <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
              </small>
              Name</label>
              <div class="col-sm-9">
                <input name="name" class="form-control" id="" value="{{ $user['name'] }}" placeholder="...">              
              </div>             
            </div><!--end name--> 

          <div class="form-group">
              <label for="password" class="col-sm-3 control-label">
               <small><i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i></small>  
               Password</label>
               <div class="col-sm-9">       
                <input name="password" type="password" class="form-control" id="" value="{{ $user['password'] }}" placeholder="...">        
              </div>             
            </div><!--end password-->           

          </div><!--end panel-body-->
        </div><!--end panel--> 

      </div><!--end col-->
    </div><!--end row-->


    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          @include('includes.form_controls')
        </div><!--end col-->
      </div><!--end row-->
      
    </form>
    @endsection
