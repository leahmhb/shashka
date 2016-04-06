 @extends('layouts.master')

 @section('title', 'Race and Entry')

 @section('content')
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
     <form id="race-and-entry" class="form-horizontal" method="post">

       <div class="panel panel-default">
        <div class="panel-heading"><h1 class="panel-title">
        Race and Entry Information      
        </h1></div>

        <div class="panel-body">

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

          <h2><small>Race</small></h2>

          <div class="form-group">
            <label for="race-series" class="col-sm-2 control-label">Series</label>
            <div class="col-sm-10">
              <select name="series" class="form-control">
                <option></option>
                @foreach ($options['race_series'] as $race_series)          
                <option value="{{$race_series['value']}}">{{$race_series['description']}}</option>
                @endforeach
              </select>
            </div>
          </div><!--end series-->

          <div class="form-group">
            <label for="race-name" class="col-sm-2 control-label">
              <small>
                <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i></small>
                Name
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="...">
              </div>
            </div><!--end name-->

            <div class="form-group">
              <label for="distance" class="col-sm-2 control-label">
                <small>
                  <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
                </small>
                Distance
              </label>            
              <div class="col-sm-10"> 
                <div class="input-group">
                  <input type="number" name="distance" class="form-control" step="any" min="0" placeholder="0">
                  <span class="input-group-addon"><small>Furlongs</small></span>
                </div> 
              </div> 
            </div><!--end distance-->

            <div class="form-group">
              <label for="surface" class="col-sm-2 control-label">
                <small>
                  <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
                </small>
                Surface</label>
                <div class="col-sm-10">             
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
              <label for="grade" class="col-sm-2 control-label">
                <small>
                  <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
                </small>
                Grade
              </label>
              <div class="col-sm-10">           
               @foreach ($domain['grades'] as $grade)    
               <label class="radio-inline">
                <input type="radio" name="grade" value="{{$grade['value']}}">
                {{$grade['description']}}
              </label>   
              @endforeach
            </div>
          </div><!--end grade-->     

          <div class="form-group">
            <label for="url" class="col-sm-2 control-label">               
              URL</label>            
              <div class="col-sm-10">    
                <div class="input-group">     
                <input type="text" name="url" class="form-control" value="" placeholder="www">
                  <span class="input-group-addon">
                    <small>
                      <i class="fa fa-link fa-color"></i>
                    </small>
                  </span>
                </div>
              </div> 
            </div><!--end url-->

            <div class="form-group">
              <label for="date" class="col-sm-2 control-label">                
               Date
             </label>
             <div class="col-sm-10">
              <div class="input-group date" data-provide="datepicker">
                <input type="text" name="ran_dt" class="datepicker form-control" data-date-format="yyyy/mm/dd" value="">
                <div class="input-group-addon">
                  <small>
                    <i class="fa fa-calendar fa-color"></i>
                  </small>
                </div>
              </div>
            </div>
          </div><!--end date-->

          <h2><small>Entry</small></h2>

          <div class="form-group">
            <label for="horse" class="col-sm-2 control-label">
              <small>
                <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
              </small>
              Name
            </label>
            <div class="col-sm-10">
              <select name="horse_id" class="form-control">
                <option></option>
                @foreach ($my_horses as $h)          
                <option value="{{$h['id']}}">{{$h['call_name']}}</option>
                @endforeach
              </select>           
            </div>        
          </div><!--end horse--> 

          <div class="form-group">
            <label for="distance" class="col-sm-2 control-label">
              <small>
                <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
              </small>
              Placing
            </label>            
            <div class="col-sm-10">     
              <input type="number" name="placing" class="form-control" placeholder="0">     
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
