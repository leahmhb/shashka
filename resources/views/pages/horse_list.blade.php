@extends('layouts.master')

@section('title', 'Horse List')

@section('content')
<div class="page-header"><h1>Horse List</h1></div>  
<div class="row">


  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        Mine
      </h3>
    </div>
    <div class="panel-body">
     <table class="table table-hover">
      <thead>
        <tr>
          <th class="col-sm-3">Call Name</th>
          <th class="col-sm-3">Registered Name</th>
          <th class="col-sm-1">Sex</th>
          <th class="col-sm-2">Grade</th>
          <th class="col-sm-1">Stall Page</th>
          <th class="col-sm-1">Update</th>
        </tr>
      </thead>
      <tbody>
        @foreach($my_horses as $h)
        <tr>
          <td>{{$h['call_name']}}</td>
          <td>{{$h['registered_name']}}</td>
          <td>{{$h['sex']}}</td>
          <td>{{$h['grade']}}</td>
          <td><a class="btn btn-default btn-sm" href="{{$h['stall_path']}}" target="_blank">Stall Page</a></td>
          <td><a class="btn btn-info btn-sm" href="/horse/{{ $h['id'] }}">Update</a></td>
        </tr>
        @endforeach   
      </tbody>
    </table>
  </div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->

<div class="row">
  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        Others
      </h3>
    </div>
    <div class="panel-body">
     <table class="table table-hover">
      <thead>
        <tr>
         <th class="col-sm-3">Call Name</th>
         <th class="col-sm-3">Registered Name</th>
         <th class="col-sm-1">Sex</th>
         <th class="col-sm-2">Grade</th>
         <th class="col-sm-1">Stall Page</th>
         <th class="col-sm-1">Update</th>
       </tr>
     </thead>
     <tbody>
      @foreach($others_horses as $h)
      <tr>
        <td>{{$h['call_name']}}</td>
        <td>{{$h['registered_name']}}</td>
        <td>{{$h['sex']}}</td>
        <td>{{$h['grade']}}</td>
        <td><a class="btn btn-default btn-sm" href="{{$h['stall_path']}}">Stall Page</a></td>
        <td><a class="btn btn-info btn-sm" href="/update-horse/{{ $h['id'] }}">Update</a></td>
      </tr>
      @endforeach   
    </tbody>
  </table>
</div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->





</div><!--end row-->
@endsection