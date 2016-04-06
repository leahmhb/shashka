@extends('layouts.master')

@section('title', 'Race')

@section('content')

<div class="container-fluid">
  <div class="row">  
    <div class="col-md-8 col-md-offset-2">

      <form id="race" class="form-horizontal" method="post">
        <input type="text" class="form-control hidden" readonly name="id" id="id" value="{{ $race['id'] }}">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">
            Race Information
            <small class="pull-right">
              <a href="@if( $race['id'] != 0)/remove-race/{{ $race['id'] }}@endif"><i class="fa fa-times text-danger"></i></a>
              </small>
            </h1>
          </div>

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

            <div class="form-group">
              <label for="race-series" class="col-sm-2 control-label">Series</label>
              <div class="col-sm-10">
                <select name="series" class="form-control">
                  <option></option>
                  @foreach ($options['race_series'] as $race_series)          
                  <option @if( $race['series'] === $race_series['value']) selected @endif value="{{$race_series['value']}}">{{$race_series['description']}}</option>
                  @endforeach
                </select>
              </div>
            </div><!--end race-series-->

            <div class="form-group">
              <label for="race-name" class="col-sm-2 control-label">
                <small><i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i></small>
                Name
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" value="{{ $race['name'] }}" placeholder="...">
              </div>
            </div><!--end race-name-->

            <div class="form-group">
              <label for="distance" class="col-sm-2 control-label">
                <small><i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i></small>
                Distance
              </label>            
              <div class="col-sm-10"> 
                <div class="input-group">
                  <input type="number" name="distance" class="form-control" value="{{ $race['distance'] }}" step="any" min="0">
                  <span class="input-group-addon"><small>Furlongs</small></span>
                </div> 
              </div> 
            </div><!--end distance-->

            <div class="form-group">
              <label for="surface" class="col-sm-2 control-label">
                <small><i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i></small>
                Surface
              </label>
              <div class="col-sm-10">             
                <label class="radio-inline">
                  <input type="radio" name="surface" id="dirt" value="Dirt" @if($race['surface'] == 'Dirt') checked @endif>
                  Dirt
                </label>
                <label class="radio-inline">
                  <input type="radio" name="surface" id="turf" value="Turf" @if($race['surface'] == 'Turf') checked @endif>
                  Turf
                </label>               
              </div>
            </div><!--end surface-->    

            <div class="form-group">
              <label for="grade" class="col-sm-2 control-label">
                <small>
                  <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
                </small>
                Grade
              </label>
              <div class="col-sm-10">           
               @foreach ($domain['grades'] as $grade)    
               <label class="radio-inline">
                <input type="radio" name="grade" value="{{$grade['value']}}" @if($race['grade'] == $grade['value']) checked @endif>
                {{$grade['description']}}
              </label>   
              @endforeach
            </div>
          </div><!--end grade-->    

          <div class="form-group">
            <label for="url" class="col-sm-2 control-label">URL</label>            
            <div class="col-sm-10">    
              <div class="input-group">     
              <input type="text" name="url" class="form-control" value="{{ $race['url'] }}" placeholder="www">
              <span class="input-group-addon">
                <small>
                  <i class="fa fa-link fa-color"></i>
                </small>
              </span>
            </div>
          </div> 
        </div><!--end url-->

        <div class="form-group">
          <label for="date" class="col-sm-2 control-label">Date</label>
          <div class="col-sm-10">
            <div class="input-group date" data-provide="datepicker">
              <input type="text" name="ran_dt" class="datepicker form-control" data-date-format="yyyy-mm-dd" value="@if($race['ran_dt']) {{ date('Y-m-d', strtotime($race['ran_dt']))}} @endif">
              <div class="input-group-addon">
              <small><i class="fa fa-calendar fa-color"></i>
                </small>
              </div>
            </div>
          </div>
        </div><!--end date-->

      </div><!--end panel body-->

      @include('includes.form_controls')

    </div><!--end panel-->
  </form>

</div><!--end col-->
</div><!--end row-->
</div><!--end container-->



@endsection
