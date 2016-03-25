@extends('layouts.master')

@section('title', 'Entry List')

@section('content')
<div class="page-header"><h1>Entry List</h1></div>  

<div class="row">
  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-body">
        <table id="entries" class="table table-hover">
          <thead>
            <tr>
              <th class="col-sm-3">Name</th>         
              <th class="col-sm-1">Placing</th>     
              <th class="col-sm-6">Race - Distance - Surface - Grade</th>          
              <th class="col-sm-1">Link</th>
              <th class="col-sm-1">Update</th>
              <th class="col-sm-1">Remove</th>
            </tr>
          </thead>
          <tbody>  
            @foreach($entries as $p=>$e)      
            <tr>
              <td>{{ $e['horse_name'] }}</td>        
              <th class="col-sm-1">@if($e['placing'] != 0) {{ $e['placing'] }} @else TBA @endif</th>    
              <td>{{ $e['race_name'] }} - {{ $e['race_distance'] }}F - {{ $e['race_surface'] }} - {{ $e['race_grade'] }}</td>          
              <td><a class="btn btn-default btn-sm" href="{{ $e['url'] }}" target="_blank">Link</a></td>
              <td><a class="btn btn-info btn-sm" href="/race-entry/{{ $e['horse_id'] }}/{{ $e['id'] }}">Update</a></td>
              <td><a class="btn btn-danger btn-sm" href="/remove-entry/{{ $e['id'] }}">Remove</a></td>
            </tr>      
            @endforeach           
          </tbody>
        </table> 
      </div><!--end panel content-->    
    </div><!--end panel-->   
  </div><!--end col-->
</div><!--end row-->


@endsection