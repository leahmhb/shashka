@extends('layouts.master')

@section('title', 'Race List')

@section('content')
<div class="container-fluid">
  <div class="row">
     <div class="col-md-10 col-md-offset-1">   

      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">
          Races
        </h3>
      </div>
      <div class="panel-body">
        <table id="t_races" class="table table-hover">
          <thead>
            <tr>
              <th class="col-sm-3">Series</th>
              <th class="col-sm-3">Name</th>
              <th class="col-sm-1">Distance</th>
              <th class="col-sm-1">Surface</th>          
              <th class="col-sm-1">Grade</th>   
              <th class="col-sm-2">Date</th>            
              <th><i class="fa fa-th-list fa-lg text-primary" aria-hidden="true"></i></th>
              <th><i class="fa fa-pencil fa-lg text-info" aria-hidden="true"></i></th>
              <th><i class="fa fa-trash-o fa-lg text-danger" aria-hidden="true"></i></th>
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
                 <i class="fa fa-th-list fa-lg" aria-hidden="true"></i>
                 </a
                 >@endif
               </td>
               <td>
                <a class="btn btn-info btn-sm" href="/race/{{ $r['id'] }}">
                  <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
                </a>
              </td>
              <td>
                <a class="btn btn-danger btn-sm" href="/remove-race/{{ $r['id'] }}">
                  <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
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
</div><!--end container-->

@endsection