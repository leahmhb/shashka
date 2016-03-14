@extends('layouts.master')

@section('title', 'Add Ancestory')

@section('content')
<div class="page-header"><h1>Add {{ $relationship }}</h1><h2><small>Extending the bloodlines</small></h2></div>
<form id="add-ancestory" class="form-horizontal" method="post">

  <div class="row">
    <div class="col-sm-12">          
      @if($validate == true)
      <div id="success "class="alert alert-success" role="alert">
        Successful addition!
      </div><!--end alert-->
      @endif        
      <div id="rsvErrors" class="alert alert-danger"></div>
    </div><!--end col-->
  </div><!--end row-->

  <div class="row">
    <div class="col-sm-12">
     <div class="panel panel-default">
       <div class="panel-body">
         If horses are not in list,   <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#add-horse-quick">
         add
         </button>.
     </div>
   </div><!--end panel-->
 </div><!--end col-->
</div><!--end row-->

<div class="row">
  <div class="col-md-6">
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Sire</h4>
    </div>
    <div class="panel-body">

     <div class="form-group">
      <label for="sire" class="col-sm-3 control-label">
        <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="left" title="Required"></span></small>
        Name</label>
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

<div class="col-md-6">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Dam</h4>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="dam" class="col-sm-3 control-label">
          <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="left" title="Required"></span></small>
          Name</label>
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
  <div class="col-md-6 col-md-offset-3">
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Horse</h4>
    </div>
    <div class="panel-body">

      <div class="form-group">
        <label for="horse" class="col-sm-3 control-label">
          <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="left" title="Required"></span></small>
          Name</label>
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

<div class="row">
  <div class="col-sm-offset-4 col-sm-4">
    <div class="text-center form-group"> 
      <button type="submit" class="btn-lg btn  btn-block btn-default">Add</button>    
    </div>
  </div><!--end col-->
</div><!--end row-->

</form>


@endsection
