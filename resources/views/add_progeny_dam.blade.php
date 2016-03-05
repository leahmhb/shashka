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
          <div class="form-group">
            <label for="sire" class="col-sm-3 control-label">Call Name</label>
            <div class="col-sm-9">
              <select name="sire_id" class="form-control select">
                <option></option>
                @foreach ($domain['sires'] as $sire)          
                <option value="{{$sire['id']}}">{{$sire['call_name']}}</option>
                @endforeach
              </select>           
            </div>        
          </div><!--end sire--> 
          <div class="text-right">If not in list, <a class="btn-xs btn btn-primary" href="/add-other-horse" target="_blank">Other</a> <a class="btn-xs btn btn-primary" href="/add-horse" target="_blank">Mine</a></div>
        </div>
      </div><!--end panel-->
    </div><!--end col-->

    <div class="col-sm-6">
     <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">Dam</h4>
      </div>
      <div class="panel-body">

        <div class="form-group hidden">
          <label for="horse" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
            <input readonly name="dam_id" class="form-control" id="horse_id" placeholder="" value="{{ $horse['id'] }}">         
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
        <div class="text-right">If not in list, <a class="btn-xs btn btn-primary" href="/add-other-horse" target="_blank">Other</a> <a class="btn-xs btn btn-primary" href="/add-horse" target="_blank">Mine</a></div>
    </div>
  </div><!--end panel-->
</div><!--end col-->

</div><!--end row-->



<div class="pull-right">    

  <button type="submit" class="btn-lg btn btn-primary">Add</button>    
  
</div>
</form>
@endsection
