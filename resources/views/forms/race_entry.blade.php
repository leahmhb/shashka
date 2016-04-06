@extends('layouts.master')

@section('title', 'Race Entry')

@section('content') <div class="container-fluid">
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <form id="race-entrant" class="form-horizontal" method="post">
      <input type="text" readonly class="form-control hidden" name="id" id="id" placeholder="" value="{{ $entry['id'] }}">

      <div class="panel panel-default">
        <div class="panel-heading"><h1 class="panel-title">
        Race Entry Information
        <small class="pull-right">
              <a href="@if( $entry['id'] != 0)/remove-race-entry/{{ $entry['id'] }}@endif"><i class="fa fa-times text-danger"></i></a>
              </small>
        </h1></div>

        <div class="panel-body">

          <div class="row">
            <div class="col-sm-12">
              <div id="success">
                @if($validate == true)
                <div class="alert alert-success" role="alert">
                  Success!
                </div><!--end alert-->
                @endif
              </div>
              <div id="rsvErrors" class="alert alert-danger"></div>
            </div><!--end col-->
          </div><!--end row-->

          <h2><small>Race</small></h2>

          <div class="form-group">     
           <label for="race" class="col-sm-3 control-label">
            <small>
              <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
            </small>
            Name</label>
            <div class="col-sm-9">
             <select name="race_id" class="form-control">
              <option></option>
              @foreach ($options['races'] as $race)          
              <option @if($race['id'] == $entry['race_id']) selected @endif value="{{$race['id']}}">             
                {{ $race['name'] }}
                {{ $race['surface'] }} 
                {{ $race['distance'] }}F 
                {{ $race['grade'] }} 
              </option>
              @endforeach
            </select>             
          </div>        
        </div><!--end race--> 

        <h2><small>Entry</small></h2>

        <div class="form-group">
          <label for="horse" class="col-sm-3 control-label">
            <small><i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i></small>
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
              <small><i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i></small>
              Placing</label>            
              <div class="col-sm-9">     
                <input type="number" name="placing" class="form-control" value="{{ $entry['placing'] }}"  placeholder="0">     
              </div> 
            </div><!--end placing-->


          </div><!--end panel body-->

          @include('includes.form_controls')

        </div><!--end panel-->
      </form>

    </div><!--end col-->
  </div><!--end row-->
</div><!--end container-->

@endsection
