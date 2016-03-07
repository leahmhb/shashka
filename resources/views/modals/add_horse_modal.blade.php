@extends('layouts.modal')
@section('title', 'Add Horse')
@section('content')

<div class="page-header"><h1>Add Horse <small>New Additions</small></h1></div>

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
          <div class="col-sm-2">
            <span class="text-danger">*</span> Required 
          </div><!--end col-->
          <div class="col-sm-6">
            <span class="text-info">!</span> Required if horse does not belong to Shashka Stables
          </div><!--end col--> 
        </div>
      </div><!--end panel-->
    </div><!--end col-->
  </div><!--end row-->

  <div class="row">  
    <div class="col-sm-12">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Basic Info</h4>
        </div>
        <div class="panel-body">
         <div class="form-group">
          <label for="call-name" class="col-sm-2 control-label"><span class="text-danger">*</span>Call Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="call_name" id="call-name" placeholder="Riparian">
          </div>
        </div><!--end call-name-->

        <div class="form-group">
          <label for="registered-name" class="col-sm-2 control-label"><span class="text-danger">*</span>Reg'd Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="registered_name" id="registered-name" placeholder="Lesson's Learned">
          </div>
        </div><!--end registered-name-->   

        <div class="form-group">
          <label for="sex" class="col-sm-2 control-label"><span class="text-danger">*</span>Sex</label>
          <div class="col-sm-10">
            <select name="sex" class="form-control select">
              <option></option>
              @foreach ($domain['sexes'] as $sex)          
              <option value="{{$sex['sex']}}">{{$sex['sex']}}</option>
              @endforeach
            </select>           
          </div>        
        </div><!--end sex-->   

        <div class="form-group">
          <label for="stall_path" class="col-sm-2 control-label"><span class="text-info">!</span>Stall Page</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="stall_path" id="stall page" placeholder="stall page url">
          </div>
        </div><!--end stall page-->

      </div><!--end panel-body-->
    </div><!--end panel-->

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">People</h4>
      </div>
      <div class="panel-body">

        <div class="form-group">
          <label for="owner-name" class="col-sm-2 control-label"><span class="text-danger">*</span>Owner</label>
          <div class="col-sm-10">       
            <select name="owner" class="form-control select">
              <option></option>
              @foreach ($domain['person'] as $person)          
              <option value="{{$person['username']}}">{{$person['username']}}</option>
              @endforeach
            </select>
          </div>                
        </div><!--end owner-name-->



        <div class="pull-right">    
         <button type="submit" class="btn-lg btn btn-primary">Add</button>      
       </div>

     </div><!--end col-->






   </div><!--end row-->

 </form>


 @endsection