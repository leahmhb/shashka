@extends('layouts.master')

@section('title', 'Entry List')

@section('content')
<div class="page-header"><h1>Entry List</h1></div>  

@foreach($entries as $p=>$placings)


<div class="row accordian" id="accordian">

  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">

        <a role="button" data-toggle="collapse" data-parent="#accordion"        
        href="#{{$p}}" 
        aria-expanded="false" aria-controls="{{$p}}">
        {{$p}}
      </a>
    </h3>
  </div>
  <div 
  id="{{$p}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{$p}}">
  <div class="panel-body">

    <table class="table table-hover">
      <thead>
        <tr>
          <th class="col-sm-3">Name</th>
          @if($p == 'Other')
          <th class="col-sm-1">Placing</th>
          @endif
          <th class="col-sm-6">Race - Distance - Surface - Grade</th>
          
          <th class="col-sm-1">Link</th>
          <th class="col-sm-1">Update</th>
        </tr>
      </thead>
      <tbody>  
        @foreach($placings as $e)  
        <tr>
          <td>{{ $e['horse_name'] }}</td>
          @if($p == 'Other')
          <th class="col-sm-1">{{ $e['placing'] }}</th>
          @endif
          <td>{{ $e['race_name'] }} - {{ $e['race_distance'] }}F - {{ $e['race_surface'] }} - {{ $e['race_grade'] }}</td>
          
          <td><a class="btn btn-default btn-sm" href="{{ $e['url'] }}" target="_blank">Link</a></td>
          <td><a class="btn btn-info btn-sm" href="/update-race-entrant/{{ $e['id'] }}">Update</a></td>
        </tr>      
        @endforeach 
      </tbody>
    </table>
  </div>
</div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->
@endforeach

@endsection