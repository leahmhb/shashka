@extends('layouts.master', ['title' => 'Guide: Entry Form'])

@section('content') 
<div class="container-fluid">

  <div class="row">
    <div class="col-md-8 col-md-offset-2">    
      <form id="demo" class="form-horizontal" method="post" action="/guide_form">  
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              Racing Entry Form 
            </h3>
          </div><!--end heading-->
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-12">          
                <div id="rsvErrors" class="alert alert-danger"></div>
              </div><!--end col-->
            </div><!--end row-->
            @include('forms.demo_entry')
          </div><!--end panel body--> 
          <div class="panel-footer">
            <div class="text-center"> 
             <button class="btn btn-default" type="reset">Clear</button>
             <button class="btn btn-primary" type="submit">Create</button>
           </div>
         </div>   
       </div><!--end panel-->   
     </form>
   </div><!--end col-->
 </div><!--end row-->
</div><!--end container-->
@endsection

