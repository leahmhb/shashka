@extends('layouts.master')

@section('title', 'Add Horse')

@section('content')
<div class="page-header"><h1>Add Race <small>New Records</small></h1></div>

<form id="add-race" class="form-horizontal" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
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

<div class="form-group">
  <label for="horse" class="col-sm-3 control-label">Horse's Call Name</label>
  <div class="col-sm-9">
    <select name="horse_id" class="form-control chosen-select">
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
</div> 
</div><!--end placing-->

<div class="form-group">    
  <button type="submit" class="pull-right btn-lg btn btn-primary">+ Add Race</button>
</div>

</form>   


  <script>
   $(document).ready(function () {
     $(".chosen-select").chosen();
    /* {
      width: "95%",
      placeholder_text_single: "Select.."
      });//end chosen */

     $('.datepicker').datepicker({
      format = "dd/mm/yyyy",
      todayHightlight = true,
      todayBtn = true
    });
   });//end ready
 </script> 
@endsection
