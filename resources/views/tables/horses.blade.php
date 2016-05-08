@extends('layouts.master', ['title' => 'Horses Table'])


@section('content')
<div class="container-fluid">
  @include('forms.t_horse_filter')
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">
          Horses
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

     <table id="t_horses" class="table table-hover">
      <thead>
        <tr>
          <th><small>Call</small><br>Name</th>      
          <th>Sex</th>

          <th><small>Breeding</small><br>Status</th>
          <th>Grade</th>
          <th>Abilities</th>
          <th><span class="fa-brown">Dirt</span>/<span class="fa-green">Turf</span></th>
          <th>Distance</th>
          <th>Max Stat</th>
          <th>Owner</th>              
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($horses as $h)
        <tr>
          <td>
            <a class="icon-link" href="{{ URL::route('stall', $h['id']) }}" target="_blank">
              {{$h['call_name']}}
            </a> 
            @if($h['stall_path'])
            <a class="icon-link" href="{{$h['stall_path']}}" target="_blank">
             <i class="fa fa-external-link text-default fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="URL"></i>
           </a>
           @endif
         </td> 
         <td>


          @if($h['sex'] == 'Mare')
          <i class="fa-pink fa fa-venus fa-lg"></i>
          @elseif($h['sex'] == 'Stallion')
          <i class="fa-blue fa fa-mars fa-lg"></i>
          @else
          <i class="fa-color fa fa-neuter fa-lg"></i>
          @endif

        </td>

        <td>
         @if($h['breeding_status'] == 'Unavailable')
         <i class="fa fa-heart-o fa-lg text-danger fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Unavailable"></i>
         @elseif(   $h['breeding_status']  == 'Available')
         <i class="fa fa-heart fa-lg text-danger fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Available"></i>
         @endif
       </td>
       <td>{{$h['grade'] }} </td> 
       <td>
         <small><i class="fa fa-plus text-success"></i> {{$h['pos_ability_1']}}</small><br>
         <small><i class="fa fa-plus text-success"></i> {{$h['pos_ability_2']}}</small><br>
         <small><i class="fa fa-minus text-danger"></i> {{$h['neg_ability_1']}}</small>
       </td>

       <td>
         @if($h['surface_dirt'] == 'Great')
         <i class="fa fa-circle fa-brown fa-lg" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Great"></i>
         @elseif($h['surface_dirt'] == 'Good')
         <i class="fa fa-dot-circle-o fa-brown fa-lg" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Good"></i>
         @elseif($h['surface_dirt'] == 'Okay')
         <i class="fa fa-circle-o fa-brown fa-lg" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Okay"></i>
         @endif

         @if($h['surface_turf'] == 'Great')
         <i class="fa fa-circle fa-green fa-lg" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Great"></i>
         @elseif($h['surface_turf'] == 'Good')
         <i class="fa fa-dot-circle-o fa-green fa-lg" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Good"></i>
         @elseif($h['surface_turf'] == 'Okay')
         <i class="fa fa-circle-o fa-green fa-lg" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Okay"></i>
         @endif
       </td>

       <td> 
         {{ $h['distance_min'] }} - {{ $h['distance_max'] }}F
       </td>

       <td>
       <span class="text-capitalize">{{ $h['max_stat'] }}</span>
       </td>

       <td>{{$h['owner']}}</td>
       <td align="right"> 
         <div class="list_controls">
           <a class="icon-link" href="{{ URL::route('horse', $h['id']) }}">
             <i class="fa fa-pencil text-info fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></i>
           </a>
           <a class="icon-link" href="{{ URL::route('remove_horse', $h['id']) }}">
            <i class="fa fa-trash-o text-danger fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Remove"></i>
          </a>
        </div>
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