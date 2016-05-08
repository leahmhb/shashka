@extends('layouts.master', ['title' => 'Races Table'])

@section('content')
<div class="container-fluid">
 @include('forms.t_race_filter')
  <div class="row">
   <div class="col-sm-12">   
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        Races
      </h3>
    </div><!--end heading-->
    <div class="panel-body">
      <blockquote>
       <ul>
         <li>
           Click table headers to sort by column or use search box to find records.
         </li>       
       </ul>
     </blockquote>

     <table id="t_races" class="table table-hover">
      <thead>
        <tr>
          <th>Series</th>
          <th>Name</th>
          <th>Dist.</th>
          <th>Surf.</th>          
          <th>Grade</th>   
          <th class="col-sm-1">Date</th>            
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($races as $l=>$r)     
        <tr>
          <td>{{ $r['series'] }} </td>          
          <td>
            @if($r['url'] != '')
            <a class="icon-link" href="{{ $r['url'] }}" target="_blank"> 
              {{ $r['name'] }} 
            </a>
            @else 
            {{ $r['name'] }} 
            @endif
          </td>
          <td>{{ $r['distance'] }}F</td>
          <td>{{ $r['surface'] }} </td>   
          <td>             
            {{ $r['grade'] }}               
          </td>     
          <td>
            @if(date('M-d-Y', strtotime($r['ran_dt'])) == '1000-01-01') 
            TBA
            @elseif(date('M-d-Y', strtotime($r['ran_dt'])) == '1111-11-11')
            Unknown
            @else 
            {{ date('M-d-Y', strtotime($r['ran_dt']))}} 
            @endif
          </td>
          <td align="right">
            <div class="list_controls">          
             <a class="icon-link" href="{{ URL::route('race', $r['id']) }}">
              <i class="fa fa-pencil text-info" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Edit"></i>
            </a>
            <a class="icon-link" href="{{ URL::route('remove_race', $r['id']) }}">
              <i class="fa fa-trash-o text-danger" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Remove"></i>
            </a>
          </div>
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