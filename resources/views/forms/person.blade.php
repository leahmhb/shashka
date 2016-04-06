@extends('layouts.master')

@section('title', 'Person')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

      <form id="person" class="form-horizontal" method="post">
        <input name="id" class="form-control hidden" readonly id="id" value="{{ $person['id'] }}"> 

        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Person Information
             <small class="pull-right">
              <a href="@if( $person['id'] != 0)/remove-person/{{ $person['id'] }}@endif"><i class="fa fa-times text-danger"></i></a>
              </small>
            </h1>
          </div>

          <div class="panel-body">

            <div class="row">
              <div class="col-sm-12">          
                @if($validate == true)
                <div id="success "class="alert alert-success" role="alert">
                  Success!
                </div><!--end alert-->
                @endif        
                <div id="rsvErrors" class="alert alert-danger"></div>
              </div><!--end col-->
            </div><!--end row-->

            <div class="form-group">                    
              <label for="person_name" class="col-sm-2 control-label">
                <small><i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i></small>
                Username</label>
                <div class="col-sm-10">
                  <input name="username" class="form-control" id="person_name" value="{{ $person['username'] }}" placeholder="...">              
                </div>             
              </div><!--end username-->       

              <div class="form-group">
                <label for="stable_name" class="col-sm-2 control-label">
                 <small><span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span></small>        
                 Stable Name</label>
                 <div class="col-sm-10">       
                  <input name="stable_name" class="form-control" id="person_stable_name" value="{{ $person['stable_name'] }}" placeholder="...">         
                </div>             
              </div><!--end stable name--> 

              <div class="form-group">
                <label for="stable_prefix" class="col-sm-2 control-label">
                 <small><span class="text-info glyphicon glyphicon-grain" data-toggle="tooltip" data-placement="top" title="Required"></span></small>        
                 Stable Prefix</label>
                 <div class="col-sm-10"> 
                  <input name="stable_prefix" class="form-control" id="person_stable_prefix" value="{{ $person['stable_prefix'] }}" placeholder="...">   
                </div>             
              </div><!--end stable prefix--> 

              <div class="form-group">
                <label for="racing_colors" class="col-sm-2 control-label">                 
                 Racing Colors</label>
                 <div class="col-sm-10"> 
                  <input name="racing_colors" class="form-control" id="person_racing_colors" value="{{ $person['racing_colors'] }}" placeholder="...">   
                </div>             
              </div><!--end racing colors--> 

            </div><!--end panel body-->

            @include('includes.form_controls')

          </div><!--end panel-->
        </form>

      </div><!--end col-->
    </div><!--end row-->
  </div><!--end container-->
  @endsection
