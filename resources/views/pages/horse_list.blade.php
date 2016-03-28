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
            <th class="col-sm-1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></th>
            <th class="col-sm-1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
            <th class="col-sm-1"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
          </tr>
        </thead>
        <tbody>
          @foreach($domain['horses'] as $h)
          <tr>
            <td>{{$h['call_name']}}</td>    
            <td>{{$h['sex']}}</td>
            <td>@if($h['grade'] != "Open Level") {{ $h['grade'] }} @else OL @endif</td> 
            <td>{{$h['owner']}}</td>
            <td>
              @if($h['stall_path'])
              <a class="btn btn-default btn-sm" href="{{$h['stall_path']}}" target="_blank">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
              </a>@endif
            </td>
            <td>
              <a class="btn btn-info btn-sm" href="/horse/{{ $h['id'] }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
              </a>
            </td>
            <td>
              <a class="btn btn-danger btn-sm" href="/remove-horse/{{ $h['id'] }}">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </a>
            </td>
          </tr>
          @endforeach   
        </tbody>
      </table>
    </div><!--end panel content-->    
  </div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->


@endsection