 @extends('layouts.master')

@section('title', 'Race and Entry')

@section('content')
<div class="page-header"><h1>Add Race and Entry<h2><small>Efficient race records</small></h2></h1></div>

<form id="race-and-entry" class="form-horizontal" method="post">

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
        <label for="race-name" class="col-sm-3 control-label">
          <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
          Race Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" id="name" placeholder="...">
          </div>
        </div><!--end race-name-->
        

        <div class="form-group">
          <label for="distance" class="col-sm-3 control-label">
            <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
            Distance</label>            
            <div class="col-sm-9"> 
              <div class="input-group">
                <input type="number" name="distance" class="form-control" step="any" min="0" placeholder="0">
                <span class="input-group-addon">Furlongs</span>
              </div> 
            </div> 
          </div><!--end distance-->

          <div class="form-group">
            <label for="surface" class="col-sm-3 control-label">
              <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
              Surface</label>
              <div class="col-sm-9">             
                <label class="radio-inline">
                  <input type="radio" name="surface" id="dirt" value="Dirt">
                  Dirt
                </label>
                <label class="radio-inline">
                  <input type="radio" name="surface" id="turf" value="Turf">
                  Turf
                </label>  
              </label>              
            </div>
          </div><!--end surface-->    


          <div class="form-group">
            <label for="grade" class="col-sm-3 control-label">
              <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
              Grade</label>
              <div class="col-sm-9">
                <select name="grade" class="form-control">
                  <option></option>
                  @foreach ($domain['grades'] as $grade)          
                  <option value="{{$grade['grade']}}">{{$grade['grade']}}</option>
                  @endforeach
                </select>
              </div>
            </div><!--end grade-->    


            <div class="form-group">
              <label for="url" class="col-sm-3 control-label">               
                URL</label>            
                <div class="col-sm-9">         
                  <input type="text" name="url" class="form-control" placeholder="www">
                </div> 
              </div><!--end url-->

              <div class="form-group">
                <label for="date" class="col-sm-3 control-label">                
                 Date</label>
                 <div class="col-sm-9">
                  <div class="input-group date" data-provide="datepicker">
                    <input type="text" name="ran_dt" class="datepicker form-control" data-date-format="yyyy/mm/dd" value="1000-01-01">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                  </div>
                </div>
              </div><!--end date-->


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
                      <option value="{{$h['id']}}">{{$h['call_name']}}</option>
                      @endforeach
                    </select>           
                  </div>        
                </div><!--end horse--> 

                <div class="form-group">
                  <label for="distance" class="col-sm-3 control-label">
                    <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
                    Placing</label>            
                    <div class="col-sm-9">     
                      <input type="number" name="placing" class="form-control" placeholder="0">     
                    </div> 
                  </div><!--end placing-->

                </div><!--end panel-body-->
              </div><!--end panel-->


            </div><!--end row-->



            <div class="row">
              <div class="col-sm-offset-4 col-sm-4">
                <div class="text-center form-group panel-body"> 
                  <button type="submit" class="btn-lg btn-block btn btn-default">Add</button>    
                </div>
              </div><!--end col-->
            </div><!--end row-->


          </form>   



          @endsection
