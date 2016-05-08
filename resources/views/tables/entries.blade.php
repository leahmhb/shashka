@extends('layouts.master', ['title' => 'Entries Table'])

@section('content')
<div class="container-fluid">
  @include('forms.t_entry_filter')
  <div class="row">
    <div class="col-sm-12"> 
      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">
          Entries
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
     <table id="t_entries" class="table table-hover">
      <thead>
        <tr>
         <th>Placing</th>
         <th>Horse</th>
         <th>Series</th>
         <th>Race</th>
         <th>Dist.</th>
         <th>Surf.</th>          
         <th>Grade</th> 
         <th>Ran Date</th>         
         <th></th>
       </tr>
     </thead>
     <tbody>  
      @foreach($entries as $p=>$e)      
      <tr>
        <td>
          @if($e['placing'] != 0) 
          {{ $e['placing'] }} 
          @else 
          TBA 
          @endif
        </td>  
        <td>{{ $e['horse_name'] }}</td> 
        <td>{{ $e['race_series'] }} </td>          
        <td>
          @if($e['url'] != '')
          <a class="icon-link" href="{{ $e['url'] }}" target="_blank"> 
            {{ $e['race_name'] }} 
          </a>
          @else
          {{ $e['race_name'] }} 
          @endif
        </td>
        <td>{{ $e['race_distance'] }}F</td>
        <td>{{ $e['race_surface'] }} </td>   
        <td>             
          {{ $e['race_grade'] }}               
        </td>           
        <td>
         @if(date('M-d-Y', strtotime($e['race_randt'])) == '1000-01-01') 
         TBA
         @elseif(date('M-d-Y', strtotime($e['race_randt'])) == '1111-11-11')
         Unknown
         @else 
         {{ date('M-d-Y', strtotime($e['race_randt']))}} 
         @endif
       </td> 
       <td align="right">         
        <a class="icon-link" href="{{ URL::route('entry', [$e['horse_id'], $e['id'] ]) }}"> 
          <i class="fa fa-pencil fa-lg text-info" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></i>
        </a>
        <a class="icon-link" href="{{ URL::route('remove_entry', $e['id']) }}">
         <i class="fa fa-trash-o fa-lg text-danger" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Remove"></i>
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