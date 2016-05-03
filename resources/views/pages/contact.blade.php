@extends('layouts.master', ['title' => 'Contact'])

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">     
      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">
          Haubing@Seeing Stars
        </h3>
      </div>
      <div class="panel-body">
       <p>Find me on <a href="http://seeingstars.boards.net/" target="_blank">Seeing Stars</a>. I am <a href="http://seeingstars.boards.net/user/8" target="_blank">Haubing</a>. 

       {{-- 
        <h2>Testing</h2>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
          <a href="/quick-person" role="button" class="btn btn-default" data-remote="false" data-toggle="modal" data-target="#quick-form">
            Add Person 
          </a>
          <a href="/quick-horse" role="button" class="btn btn-default" data-remote="false" data-toggle="modal" data-target="#quick-form">
            Add Horse 
          </a>

          <a href="/quick-lineage" role="button" class="btn btn-default" data-remote="false" data-toggle="modal" data-target="#quick-form">
            Add Lineage 
          </a> 

          <a href="/quick-race" role="button" class="btn btn-default" data-remote="false" data-toggle="modal" data-target="#quick-form">
            Add Race 
          </a> 
          <a href="/quick-entry" role="button" class="btn btn-default" data-remote="false" data-toggle="modal" data-target="#quick-form">
            Add Entry 
          </a> 
        </div>
        --}}
      </div><!--end panel content-->    
    </div><!--end panel-->   
  </div><!--end col-->
</div><!--end row-->
</div><!--end container-->

@endsection