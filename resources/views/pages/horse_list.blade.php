@extends('layouts.master')

@section('title', 'Horse List')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">    


      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">
          Horses
        </h3>
      </div>
      <div class="panel-body">
      <table id="t_horses" class="table table-hover">
        <thead>
          <tr>
            <th class="col-sm-3">Call Name</th>      
            <th class="col-sm-3">Registered Name</th>
            <th class="col-sm-1">Sex</th>
            <th class="col-sm-1">Grade</th>         
            <th class="col-sm-1">Owner</th>
            <th><i class="fa fa-th-list fa-lg text-primary" aria-hidden="true"></i></th>
            <th><i class="fa fa-pencil fa-lg text-info" aria-hidden="true"></i></th>
            <th><i class="fa fa-trash-o fa-lg text-danger" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          @foreach($horses as $h)
          <tr>
            <td>{{$h['call_name']}}</td>    
            <td>{{$h['registered_name']}}</td>    
            <td>{{$h['sex']}}</td>
            <td>@if($h['grade'] != "Open Level") {{ $h['grade'] }} @else OL @endif</td> 
            <td>{{$h['owner']}}</td>
            <td>
              @if($h['stall_path'])
              <a class="btn btn-default btn-sm" href="{{$h['stall_path']}}" target="_blank">
                <i class="fa fa-th-list fa-lg" aria-hidden="true"></i>
              </a>@endif
            </td>
            <td>
              <a class="btn btn-info btn-sm" href="/horse/{{ $h['id'] }}">
                <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
              </a>
            </td>
            <td>
              <a class="btn btn-danger btn-sm" href="/remove-horse/{{ $h['id'] }}">
                <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
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
</div><!--end container-->

@endsection