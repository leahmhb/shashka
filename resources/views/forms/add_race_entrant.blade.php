@extends('layouts.master')

@section('title', 'Add Race Entrant')

@section('content')
<div class="page-header"><h1>Add Race Entrant <small>Record Entries and Placings</small></h1></div>

<form id="add-race-entrant" class="form-horizontal" method="post">

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
    <div class="col-sm-6">
      <div class="panel panel-default">
       <div class="panel-heading">
        <h4 class="panel-title">Race</h4>
      </div>
      <div class="panel-body">

        <div class="form-group">
          <label for="horse" class="col-sm-3 control-label">
            <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
            Select</label>
            <div class="col-sm-9">
             <select name="race_id" class="form-control select">
              <option></option>
              @foreach ($domain['races'] as $race)          
              <option value="{{$race['id']}}">{{$race['name']}}
                {{ $race['surface'] }} 
                {{ $race['distance'] }}F 
                {{ $race['grade'] }} </option>
                @endforeach
              </select>             
            </div>        
          </div><!--end race--> 


          <div class="text-right">If race not in list, <a class="btn-xs btn btn-primary" href="/add-race/quick" target="_blank">Add</a></div>
        </div><!--end panel-body-->
      </div><!--end panel-->
    </div><!--end col-->

    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Horse</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label for="horse" class="col-sm-3 control-label">
              <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
              Call Name</label>
              <div class="col-sm-9">
                <select name="horse_id" class="form-control select">
                  <option></option>
                  @foreach ($domain['horses'] as $h)          
                  <option @if($horse['id'] === $h['id']) selected @endif value="{{$h['id']}}">{{$h['call_name']}}</option>
                  @endforeach
                </select>           
              </div>        
            </div><!--end horse--> 

            <div class="form-group">
              <label for="distance" class="col-sm-3 control-label">
                <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                Placing</label>            
                <div class="col-sm-9">     
                  <input type="number" name="placing" class="form-control" placeholder="1">     
                </div> 
              </div><!--end placing-->

            </div><!--end panel-body-->
          </div><!--end panel-->


        </div><!--end col-->
      </div><!--end row-->



      <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
          <div class="text-center form-group"> 
            <button type="submit" class="btn-lg btn-block btn btn-primary">Add</button>    
          </div>
        </div><!--end col-->
      </div><!--end row-->



    </form>   



    @endsection
