@extends('layouts.master')

@section('title', 'Horse List')

@section('content')
<div class="page-header"><h1>Horse List</h1></div>  
<div class="row">


  <div class="col-sm-12">      
    <div class="panel panel-default">

      <div class="panel-body">
       <table id="horses" class="table table-hover">
        <thead>
          <tr>
            <th class="col-sm-3">Call Name</th>          
            <th class="col-sm-1">Sex</th>
            <th class="col-sm-1">Grade</th>         
            <th class="col-sm-1">Owner</th>
            <th class="col-sm-1">Stall Page</th>
            <th class="col-sm-1">Update</th>
            <th class="col-sm-1">Remove</th>
          </tr>
        </thead>
        <tbody>
          @foreach($domain['horses'] as $h)
          <tr>
            <td>{{$h['call_name']}}</td>    
            <td>{{$h['sex']}}</td>
            <td>{{$h['grade']}}</td>
            <td>{{$h['owner']}}</td>
            <td><a class="btn btn-default btn-sm" href="{{$h['stall_path']}}" target="_blank">Stall Page</a></td>
            <td><a class="btn btn-info btn-sm" href="/horse/{{ $h['id'] }}">Update</a></td>
            <td><a class="btn btn-danger btn-sm" href="/remove-horse/{{ $h['id'] }}">Remove</a></td>
          </tr>
          @endforeach   
        </tbody>
      </table>
    </div><!--end panel content-->    
  </div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->


@endsection