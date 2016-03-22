@extends('layouts.master')

@section('title', 'Race List')

@section('content')
<div class="page-header"><h1>Race List</h1></div>  



@foreach($races as $l=>$races)

<div class="row accordian" id="accordian">
  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion"        
        href="#{{$l}}" 
        aria-expanded="false" aria-controls="{{$l}}">
        {{$l}}
      </a>
    </h3>
  </div>
  <div 
  id="{{$l}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{$l}}">
  <div class="panel-body">
    <table class="table table-hover">
      <thead>
        <tr>
          <th class="col-sm-5">Name</th>
          <th class="col-sm-3">Distance</th>
          <th class="col-sm-2">Surface</th>          
          <th class="col-sm-1">Ran Date</th>            
          <th class="col-sm-1">Link</th>
          <th class="col-sm-1">Update</th>
        </tr>
      </thead>
      <tbody>
       @foreach($races as $r)
       <tr>
        <td>{{ $r['name'] }} </td>
        <td>{{ $r['distance'] }}F</td>
        <td>{{ $r['surface'] }} </td>     
        <td>@if(date('Y-m-d', strtotime($r['ran_dt'])) == '1000-01-01') TBA @else {{ date('Y-m-d', strtotime($r['ran_dt']))}} @endif</td>
        <td><a class="btn btn-default btn-sm" href="{{ $r['url'] }}" target="_blank">Link</a></td>
        <td><a class="btn btn-info btn-sm" href="/update-race/{{ $r['id'] }}">Update</a></td>
      </tr>
      @endforeach   
    </tbody>
  </table>
</div><!--end panel content-->    
</div>
</div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->
@endforeach
@endsection