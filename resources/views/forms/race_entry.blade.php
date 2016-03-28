@extends('layouts.master')

@section('title', 'Race Entry')

@section('content')
<div class="page-header">
  <h1>{{ $action }} Race Entry</h1>
  <h2><small>@if($action == 'Update') Change Records @else New Entry @endif</small></h2>
</div>

<form id="race-entrant" class="form-horizontal" method="post">

  <div class="row">
    <div class="col-sm-12">
      <div id="success">
        @if($validate == true)
        <div class="alert alert-success" role="alert">
          Successful addition!
        </div><!--end alert-->
        @endif
      </div>
      <div id="rsvErrors" class="alert alert-danger"></div>
    </div><!--end col-->
  </div><!--end row-->

  <div class="row"> 
    <div class="col-md-6">
      <div class="panel panel-default">
       <div class="panel-heading">
        <h4 class="panel-title">Race</h4>
      </div>
      <div class="panel-body">


        <div class="form-group">
         <input type="text" readonly class="form-control hidden" name="id" id="id" placeholder="" value="{{ $entry['id'] }}">

         <label for="race" class="col-sm-3 control-label">
          <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
          Select</label>
          <div class="col-sm-9">
           <select name="race_id" class="form-control">
            <option></option>
            @foreach ($domain['races'] as $race)          
            <option @if($race['id'] == $entry['race_id']) selected @endif value="{{$race['id']}}">{{$race['name']}}
              {{ $race['surface'] }} 
              {{ $race['distance'] }}F 
              {{ $race['grade'] }} </option>
              @endforeach
            </select>             
          </div>        
        </div><!--end race--> 

        <div class="text-right">If race not in list, 
          <a href="/quick-race" type="button" class="btn btn-primary btn-xs" data-remote="false" data-toggle="modal" data-target="#quick-form" >
            Add Race 
          </a>
        </div>
      </div><!--end panel-body-->
    </div><!--end panel-->
  </div><!--end col-->

  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">Horse</h4>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="horse" class="col-sm-3 control-label">
            <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
            Name</label>
            <div class="col-sm-9">
              <select name="horse_id" class="form-control">
                <option></option>
                @foreach ($my_horses as $h)          
                <option value="{{$h['id']}}" @if($entry['horse_id'] == $h['id']) selected @endif>{{$h['call_name']}}</option>
                @endforeach
              </select>           
            </div>        
          </div><!--end horse--> 

          <div class="form-group">
            <label for="distance" class="col-sm-3 control-label">
              <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
              Placing</label>            
              <div class="col-sm-9">     
                <input type="number" name="placing" class="form-control" value="{{ $entry['placing'] }}"  placeholder="0">     
              </div> 
            </div><!--end placing-->

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
