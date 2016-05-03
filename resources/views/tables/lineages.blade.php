@extends('layouts.master', ['title' => 'Lineages Table'])

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12"> 
      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">
          Lineages
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
       <table id="t_lineages" class="table table-hover">
        <thead>
          <tr>
            <th class="col-sm-3">Horse</th>   

            <th class="col-sm-3">Sire</th>     

            <th class="col-sm-3">Dam</th>

            <th class="col-sm-1"></th>
          </tr>
        </thead>
        <tbody>  
          @foreach($lineage as $i=>$l)   
          <tr>
            <td>
             <a class="icon-link" href="{{ URL::route('stall', $l['horse_id']) }}"> 
              {{ $l['horse_name'] }}
            </a>
            @if($l['horse_link'])
            <a class="icon-link" href="{{ $l['horse_link'] }}">
              <i class="fa fa-external-link text-default fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="URL"></i>
            </a>
            @endif            
          </td>   
          <td>
           <a class="icon-link" href="{{ URL::route('stall', $l['sire_id']) }}">
             {{ $l['sire_name'] }}
           </a> 
           @if($l['sire_link'])
           <a class="icon-link" href="{{ $l['sire_link'] }}">
            <i class="fa fa-external-link text-default fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="URL"></i>
          </a>
          @endif
        </td>  
        <td>
         <a class="icon-link" href="{{ URL::route('stall', $l['dam_id']) }}">
          {{ $l['dam_name'] }}
        </a>        
        @if($l['dam_link'])
        <a class="icon-link" href="{{ $l['dam_link'] }}">
          <i class="fa fa-external-link text-default fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="URL"></i>
        </a>
        @endif
      </td>       
      <td align="right">
        <a class="icon-link" href="{{ URL::route('lineage', [$l['horse_id'], $l['horse_id'] ]) }}"> 
          <i class="fa fa-pencil text-info fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></i>
        </a>            
        <a class="icon-link" href="{{ URL::route('remove_lineage', $l['horse_id']) }}">
         <i class="fa fa-trash-o text-danger fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Remove"></i>
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