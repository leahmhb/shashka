@extends('layouts.master')

@section('title', 'Add Horse')

@section('content')
<div class="page-header"><h1>Add Race <small>New Records</small></h1></div>

<form id="add-race" class="form-horizontal" method="post">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
       <div class="panel-heading">
        <h4 class="panel-title">Race</h4>
      </div>
      <div class="panel-body">
       <div class="form-group">
        <label for="race-name" class="col-sm-3 control-label">Race Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="race-name" id="race-name" placeholder="Belmont Stakes">
        </div>
      </div><!--end race-name-->

      <div class="form-group">
        <label for="date" class="col-sm-3 control-label">Date</label>
        <div class="col-sm-9">
          <div class="input-group date" data-provide="datepicker">
            <input type="text" class="datepicker form-control">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
        </div>
      </div><!--end date-->

      <div class="form-group">
        <label for="surface" class="col-sm-3 control-label">Surface</label>
        <div class="col-sm-9">             
          <label class="radio-inline">
            <input type="radio" name="surface" id="dirt" value="dirt">
            Dirt
          </label>
          <label class="radio-inline">
            <input type="radio" name="surface" id="turf" value="turf" checked>
            Turf
          </label>  
        </label>              
      </div>
    </div><!--end surface-->          

    <div class="form-group">
      <label for="distance" class="col-sm-3 control-label">Distance</label>            
      <div class="col-sm-9"> 
        <div class="input-group">
          <input type="text" name="distance" class="form-control" placeholder="12">
          <span class="input-group-addon">Furlongs</span>
        </div> 
      </div> 
    </div><!--end distance-->

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
        <label for="horse" class="col-sm-3 control-label">Horse's Call Name</label>
        <div class="col-sm-9">
          <select name="horse_id" class="form-control select">
            <option></option>
            @foreach ($domain['horses'] as $horse)          
            <option value="{{$horse['id']}}">{{$horse['call_name']}}</option>
            @endforeach
          </select>           
        </div>        
      </div><!--end horse--> 

      <div class="form-group">
        <label for="distance" class="col-sm-3 control-label">Placing</label>            
        <div class="col-sm-9">     
          <input type="text" name="distance" class="form-control" placeholder="1st">     
        </div> 
      </div><!--end placing-->

    </div><!--end panel-body-->
  </div><!--end panel-->

<div class="pull-right">    
 <button type="submit" class="btn-lg btn btn-primary">Add</button>      
</div>
</div><!--end col-->
</div><!--end row-->






</form>   



@endsection
