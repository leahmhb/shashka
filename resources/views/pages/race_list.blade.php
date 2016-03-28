@extends('layouts.master')

@section('title', 'Race List')

@section('content')
<div class="page-header"><h1>Race List</h1></div>  

<div class="row">
  <div class="col-sm-12">      
    <div class="panel panel-default">


      <div class="panel-body">
        <table id="races" class="table table-hover">
          <thead>
            <tr>
              <th class="col-sm-2">Series</th>
              <th class="col-sm-2">Name</th>
              <th class="col-sm-1">Distance</th>
              <th class="col-sm-1">Surface</th>          
              <th class="col-sm-1">Grade</th>   
              <th class="col-sm-1">Date</th>            
              <th class="col-sm-1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></th>
              <th class="col-sm-1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
              <th class="col-sm-1"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
          </thead>
          <tbody>
            @foreach($races as $l=>$r)     
            <tr class="@if($r['id'] == $active_id) success @endif">
              <td>{{ $r['series'] }} </td>
              <td>{{ $r['name'] }} </td>
              <td>{{ $r['distance'] }}F</td>
              <td>{{ $r['surface'] }} </td>   
              <td>
                @if($r['grade'] != "Open Level") 
                {{ $r['grade'] }} 
                @else 
                OL 
                @endif
              </td>     
              <td>
                @if(date('Y-m-d', strtotime($r['ran_dt'])) == '1000-01-01') 
                TBA
                @else 
                {{ date('Y-m-d', strtotime($r['ran_dt']))}} 
                @endif
              </td>
              <td>
                @if($r['url'])
                <a class="btn btn-default btn-sm" href="{{ $r['url'] }}" target="_blank">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  </a
                  >@endif
                </td>
                <td>
                  <a class="btn btn-info btn-sm" href="/race/{{ $r['id'] }}">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                  </a>
                </td>
                <td>
                  <a class="btn btn-danger btn-sm" href="/remove-race/{{ $r['id'] }}">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                  </a>
                </td>
              </tr>         
              @endforeach
            </tbody>
          </table>
        </div><!--end panel content-->    
      </div>
    </div><!--end panel-->   
  </div><!--end col-->
</div><!--end row-->

@endsection