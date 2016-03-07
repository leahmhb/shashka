@extends('layouts.master')

@section('title', 'Add Ancestory')

@section('content')
<div class="page-header"><h1>Add {{ $relationship }} <small>Extending the bloodlines</small></h1></div>
<form id="add-horse" class="form-horizontal" method="post">


  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-body">                       
          @if($validate == true)
          <div class="alert alert-success" role="alert">
            Successful addition!
          </div><!--end alert-->
          @endif
         If horses are not in list, <a class="btn-xs btn btn-primary" href="/add-horse/quick" target="_blank">Add</a>
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
          <select name="sire_id" class="form-control select">
            <option></option>
            @foreach ($domain['sires'] as $s)          
            <option value="{{$s['id']}}" @if($sire['id'] == $s['id']) selected @endif>{{$s['call_name']}}</option>
            @endforeach
          </select>           
        </div>        
      </div><!--end sire--> 

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
            @foreach ($domain['dams'] as $d)          
            <option value="{{$d['id']}}" @if($dam['id'] == $d['id']) selected @endif>{{$d['call_name']}}</option>
            @endforeach
          </select>           
        </div>        
      </div><!--end dam--> 
    </div>
  </div><!--end panel dam-->
</div><!--end col dam-->
</div><!--end row-->

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
          <select name="horse_id" class="form-control select">
            <option></option>
            @foreach ($domain['horses'] as $h)          
            <option value="{{$h['id']}}" @if($horse['id'] == $h['id']) selected @endif>{{$h['call_name']}}</option>
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