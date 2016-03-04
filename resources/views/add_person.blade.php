@extends('layouts.master')

@section('title', 'Add Person')

@section('content')
<div class="page-header"><h1>Add Person <small>Recording horse origins</small></h1></div>
<form id="add-horse" class="form-horizontal" method="post">

  <div class="row">

    <div class="col-sm-4">
      <div class="form-group">
        <label for="person_name" class="col-sm-3 control-label">Username</label>
        <div class="col-sm-9">
          <input name="person_name" class="form-control" id="person_name" placeholder="person">              
        </div>             
      </div><!--end username-->       
    </div><!--end col-->

    <div class="col-sm-4">
      <div class="form-group">
        <label for="person_name" class="col-sm-3 control-label">Stable Name</label>
        <div class="col-sm-9">       
          <input name="person_stable_name" class="form-control" id="person_stable_name" placeholder="stable name">  
          <input name="person_stable_prefix" class="form-control" id="person_stable_prefix" placeholder="stable prefix">   
        </div>             
      </div><!--end stable name--> 
    </div><!--end col-->

    <div class="col-sm-4">    
      <div class="form-group">
        <label for="person_name" class="col-sm-3 control-label">Stable Prefix</label>
        <div class="col-sm-9"> 
          <input name="person_stable_prefix" class="form-control" id="person_stable_prefix" placeholder="stable prefix">   
        </div>             
      </div><!--end stable prefix--> 
    </div><!--end col-->

  </div><!--end row-->


<div class="pull-right">
 <button type="submit" class="btn-lg btn btn-primary">Add</button>      
</div>
</form>
@endsection
