@extends('layouts.master')

@section('title', 'Create Lineage')

@section('content')
<div class="page-header"><h1>Create Lineage <small>Extending the bloodlines</small></h1></div>
<form id="add-horse" class="form-horizontal" method="post">

 <div class="row">
  <div class="col-sm-6 col-sm-offset-3">
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Horse</h4>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="horse" class="col-sm-3 control-label">Call Name</label>
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
        <label for="horse_name" class="col-sm-3 control-label">...or</label>
        <div class="col-sm-4">
          <input name="horse_name" class="form-control" id="horse_name" placeholder="call name">   
        </div>
        <div class="col-sm-5">
          <input name="horse_link" class="form-control" id="horse_link" placeholder="stall page url">   
        </div>             
      </div><!--end other horse--> 
    </div>
  </div><!--end panel-->
</div><!--end col-->

</div><!--end row-->

<div class="row">
  <div class="col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">Sire</h4>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="sire" class="col-sm-3 control-label">Call Name</label>
          <div class="col-sm-9">
            <select name="sire_id" class="form-control chosen-select">
              <option></option>
              @foreach ($domain['sires'] as $sire)          
              <option value="{{$sire['id']}}">{{$sire['call_name']}}</option>
              @endforeach
            </select>           
          </div>        
        </div><!--end sire--> 

        <div class="form-group">
          <label for="sire_name" class="col-sm-3 control-label">...or</label>
          <div class="col-sm-4">
            <input name="sire_name" class="form-control" id="sire_name" placeholder="call name">   
          </div>
          <div class="col-sm-5">
            <input name="sire_link" class="form-control" id="sire_link" placeholder="stall page url">   
          </div>             
        </div><!--end other sire--> 

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
            <select name="dam_id" class="form-control chosen-select">
              <option></option>
              @foreach ($domain['dams'] as $dam)          
              <option value="{{$dam['id']}}">{{$dam['call_name']}}</option>
              @endforeach
            </select>           
          </div>        
        </div><!--end dam--> 

        <div class="form-group">
          <label for="dam_name" class="col-sm-3 control-label">...or</label>
          <div class="col-sm-4">
            <input name="dam_name" class="form-control" id="dam_name" placeholder="call name">   
          </div>
          <div class="col-sm-5">
            <input name="dam_link" class="form-control" id="dam_link" placeholder="stall page url">   
          </div>             
        </div><!--end other dam--> 
      </div>
    </div><!--end panel-->
  </div><!--end col-->
</div><!--end row-->


<div class="form-group">    
<button name="submit" type="submit" class="pull-right btn-lg btn btn-primary">+ Add Lineage</button>
</div>
</form>
@endsection