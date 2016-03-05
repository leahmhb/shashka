@extends('layouts.master')

@section('title', 'Add Race Entrant')

@section('content')
<div class="page-header"><h1>Add Race Entrant <small>Record Entries and Placings</small></h1></div>

<form id="add-race" class="form-horizontal" method="post">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
       <div class="panel-heading">
        <h4 class="panel-title">Race</h4>
      </div>
      <div class="panel-body">
   <select name="horse_id" class="form-control select">
            <option></option>
            @foreach ($domain['races'] as $race)          
            <option value="{{$race['id']}}">{{$race['name']}}</option>
            @endforeach
          </select>    

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
            @foreach ($domain['horses'] as $h)          
            <option @if($horse['id'] === $h['id']) selected @endif value="{{$h['id']}}">{{$h['call_name']}}</option>
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
