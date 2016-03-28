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
              <th class="col-sm-1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></th>
              <th class="col-sm-1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
              <th class="col-sm-1"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
          </thead>
          <tbody>  
            @foreach($entries as $p=>$e)      
            <tr>
              <td>{{ $e['horse_name'] }}</td>        
              <th>
                @if($e['placing'] != 0) 
                {{ $e['placing'] }} 
                @else 
                TBA 
                @endif
              </th>    
              <td>{{ $e['race_series'] }} <strong>{{ $e['race_name'] }}</strong> {{ $e['race_distance'] }}F {{ $e['race_surface'] }} {{ $e['race_grade'] }}</td>          
              <td>
                <a class="btn btn-default btn-sm" href="{{ $e['url'] }}" target="_blank">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                </a>
              </td>
              <td>
                <a class="btn btn-info btn-sm" href="/race-entry/{{ $e['horse_id'] }}/{{ $e['id'] }}">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                </td>
                <td>
                  <a class="btn btn-danger btn-sm" href="/remove-entry/{{ $e['id'] }}">
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