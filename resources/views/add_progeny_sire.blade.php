@extends('layouts.master')

@section('title', 'Add Progeny')

@section('content')
<div class="page-header"><h1>Add Progeny <small>Extending the bloodlines</small></h1></div>
<form id="add-horse" class="form-horizontal" method="post">
      @if($validate == true)
      <div class="alert alert-success" role="alert">
        Successful addition!
      </div><!--end alert-->
      @endif
  <div class="row">
    <div class="col-sm-6">
       <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">Sire</h4>
      </div>
      <div class="panel-body">

        <div class="form-group hidden">
          <label for="horse" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
            <input readonly name="sire_id" class="form-control" id="horse_id" placeholder="" value="{{ $horse['id'] }}">         
          </div>        
        </div><!--end horse--> 

        <div class="form-group">
          <label for="horse" class="col-sm-3 control-label">Call Name</label>
          <div class="col-sm-9">
            <input disabled name="" class="form-control" id="call_name" placeholder="" value="{{ $horse['call_name'] }}">         
          </div>        
        </div><!--end horse--> 

      </div>
    </div><!--end panel-->
   </div><!--end col-->

   <div class="col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">Dam</h4>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="dam" class="col-sm-3 control-label">Call Name</label>
          <div class="col-sm-9">
            <select name="dam_id" class="form-control select">
              <option></option>
              @foreach ($domain['dams'] as $dam)          
              <option value="{{$dam['id']}}">{{$dam['call_name']}}</option>
              @endforeach
            </select>           
          </div>        
        </div><!--end dam--> 

      </div>
    </div><!--end panel-->
  </div><!--end col-->
</div><!--end row-->

<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Foal</h4>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="horse" class="col-sm-3 control-label">Call Name</label>
        <div class="col-sm-9">
          <select name="horse_id" class="form-control select">
            <option></option>
            @foreach ($domain['horses'] as $horse)          
            <option value="{{$horse['id']}}">{{$horse['call_name']}}</option>
            @endforeach
          </select>           
        </div>        
      </div><!--end horse--> 

  
    </div>
  </div><!--end panel-->
</div><!--end col-->

</div><!--end row-->




<div class="pull-right"> 
  <button type="submit" class="btn-lg btn btn-primary">Add</button>    
</div>
</form>
@endsection
