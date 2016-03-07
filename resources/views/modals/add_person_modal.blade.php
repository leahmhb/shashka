@extends('layouts.modal')

@section('title', 'Add Person')

@section('content')
<div class="page-header"><h1>Add Person <small>Tracking owners, breeders, and hexers</small></h1></div>

<form id="add-person" class="form-horizontal" method="post">

  <div class="row">
    <div class="col-sm-12">

      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="col-sm-2">                
                @if($validate == true)
                <div class="alert alert-success" role="alert">
                  Successful addition!
                </div><!--end alert-->
                @endif
                <span class="text-danger">*</span> Required 
              </div><!--end col-->
              <div class="col-sm-6">
                <span class="text-info">!</span> Required if horse does not belong to Shashka Stables
              </div><!--end col--> 
            </div>
          </div><!--end panel-->
        </div><!--end col-->
      </div><!--end row-->

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Basic Info</h4>
        </div>

        <div class="panel-body">
          <div class="form-group">
            <label for="person_name" class="col-sm-3 control-label"><span class="text-danger">*</span>Username</label>
            <div class="col-sm-9">
              <input name="username" class="form-control" id="person_name" placeholder="Haubing">              
            </div>             
          </div><!--end username-->  

        </div><!--end panel-body-->
      </div><!--end panel--> 

      <div class="pull-right">
       <button type="submit" name="" class="btn-lg btn btn-primary">Add</button>      
     </div>

   </div><!--end col-->
 </div><!--end row-->

</form>
@endsection
