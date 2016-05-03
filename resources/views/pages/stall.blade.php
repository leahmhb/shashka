@extends('layouts.master', ['title' => 'Stall: ' . $horse["call_name"] ])

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading text-center">          
          @include('includes.stall_panel_heading')
        </div><!--end heading-->
        <div class="panel-body">
          @if($horse['stall_img'])
          <img class="stall-pic img-responsive" src="{{ $horse['stall_img'] }}">  
          @else
          <p class="text-center">No stall image.</p>
          @endif
        </div><!--end panel content-->
        <div class="panel-footer">
         <ul class="stall-info list-inline text-center"> 
           <a class="icon-link" href="{{ URL::route('lineage', [$horse['id'], $horse['id'] ]) }}">
             <i class='fa-gray fa fa-paperclip'></i>
           </a>
           @if(count($parents) > 0)
           <li><b>Sire:</b> <a class="icon-link" href="{{$parents['sire_link']}}">{{ $parents['sire_name'] }}</a></li>
           <li><b>Dam:</b> <a class="icon-link" href="{{$parents['dam_link']}}">{{ $parents['dam_name'] }}</a></li>
           @else
           <li><b>Foundation {{ $data['sex'] }}</b></li>
           @endif
         </ul>
       </div><!--end footer-->
     </div><!--end panel-->       
     <div class="panel panel-default">
       <div class="panel-heading text-center">
        @include('includes.stall_panel_heading')
      </div><!--end heading-->
      <div class="panel-body">
        <div class="row">      
          <div class="col-sm-3">
           <h2>
             <small>
               <a class="icon-link" href="{{ URL::route('horse', $horse['id']) }}">
                 <i class='fa-gray fa fa-paperclip'></i>
               </a>
             </small>
             Info
           </h2>
           <ul>
            <li>
              <b>Owner:</b> {{ $data['owner']['username'] }}
            </li>
            @if ($horse['breeder'])
            <li>
              <b>Breeder:</b> {{ $data['breeder'] }}
            </li>
            @endif
            @if($horse['hexer']) 
            <li>
              <b>Hexer:</b> {{ $data['hexer']['username'] }}
            </li>
            @endif    
            @if($horse['color']) 
            <li>
              <b>Color:</b> 
              {{ $horse['color'] }} 
              @if($horse['phenotype'])
              - {{ $horse['phenotype'] }}
              @endif        
            </li>
            @endif   
            <li>
              <b>Sex:</b> {{ $data['sex'] }}
            </li>    
            <li>
              <b>Grade:</b> {{ $data['grade'] }}
            </li>         
            <li>
              <b>Breeding Status:</b> 
              {{ $data['breeding_status'] }}             
            </li>  
          </ul>
        </div><!--end col-->
        <div class="col-sm-9">
          <h2>Notes</h2>
          <textarea class="form-control" rows="16" readonly>{{ $horse['notes'] }}</textarea>
        </div><!--end col-->    
      </div><!--end row-->
    </div><!--end panel body-->
  </div><!--end panel-->
  <div class="panel panel-default">
   <div class="panel-heading text-center">
    @include('includes.stall_panel_heading')
  </div><!--end heading-->
  <div class="panel-body">   
    <div class="row">
     <div class="col-sm-12">
       <h2>
         <small>
           <a class="icon-link" href="{{ URL::route('horse', $horse['id']) }}">
             <i class='fa-gray fa fa-paperclip'></i>
           </a>
         </small>
         Racing Statistics
       </h2>
     </div>
     <div class="col-sm-3">
       <ul class="stall-info list-unstyled"> 
        <li><b>Speed:</b> {{ $horse['speed'] }} </li>
        <li><b>Staying:</b> {{ $horse['staying'] }} </li> 
        <li><b>Stamina:</b> {{ $horse['stamina'] }} </li> 
        <li><b>Breaking:</b> {{ $horse['breaking'] }} </li> 
        <li><b>Power:</b> {{ $horse['power'] }} </li> 
        <li><b>Feel:</b> {{ $horse['feel'] }} </li> 
        <li><b>Fierce:</b> {{ $horse['fierce'] }} </li> 
        <li><b>Tenacity:</b> {{ $horse['tenacity'] }} </li> 
        <li><b>Courage:</b> {{ $horse['courage'] }} </li> 
        <li><b>Response:</b> {{ $horse['response'] }} </li> 
        <li><b>Surface:</b>
          <ul class="stall-info list-unstyled">
            <li><b>Dirt-</b> 
              <span class="text-capitalize">{{ $data['surface_dirt'] }}</span>
            </li>
            <li><b>Turf-</b> 
              <span class="text-capitalize">{{ $data['surface_turf'] }}</span>
            </li>
          </ul>
        </li>      
        <li><b>Neck Height:</b> 
          <span class="text-capitalize">{{ $data['neck_height'] }}</span>
        </li>
        <li><b>Run Style:</b> 
         <span class="text-capitalize">{{ $data['run_style'] }}</span>
       </li>
       <li><b>Equipment:</b>
        <ul class="stall-info list-unstyled">
          <li><b>Bandages</b> 
            <span class="text-capitalize">{{ $data['bandages'] }}</span>
          </li>
          <li><b>Hood</b> 
            <span class="text-capitalize">{{ $data['hood'] }}</span>
          </li>
          <li><b>Shadow Roll</b>           
           <span class="text-capitalize">{{ $data['shadow_roll'] }}</span>
         </li>
       </ul>
     </li>
   </ul> 
 </div><!--end col-->
 <div class="col-sm-5">
  <ul class="stall-info list-unstyled"> 
    <li><b>Distance:</b> {{ $horse['distance_min'] }}F to {{ $horse['distance_max'] }}F</li>
    <li>
      <b>Leg Type:</b> {{ $data['leg_type']['value'] }}
      <ul class="stall-info list-unstyled">
        <li>{{ $data['leg_type']['description'] }}</li>
      </ul>
    </li>
    <li>
      <b>Abilities:</b>
      <ul class="stall-info list-unstyled">
        @foreach($abilities as $ability)
        <li>                 
          <b>@if($ability['type'] == 'positive') 
            <i class="fa fa-plus text-success"></i>
            @else 
            <i class="fa fa-minus text-danger"></i>
            @endif
          </b>
          <span class="text-default">{{ $ability['ability'] }}:</span> 
          {{ $ability['description'] }}
        </li>
        @endforeach              
      </ul>
    </li>       
  </ul>
</div><!--end col-->
<div class="col-sm-4">      
  <textarea class="form-control" rows="20" readonly>
    [b]+++Form[/b]
    [b]++Stats:[/b]
    [b]Speed:[/b] {{ $horse['speed'] }}
    [b]Staying:[/b] {{ $horse['staying'] }}
    [b]Stamina:[/b] {{ $horse['stamina'] }}
    [b]Breaking:[/b] {{ $horse['breaking'] }}
    [b]Power:[/b] {{ $horse['power'] }}
    [b]Feel:[/b] {{ $horse['feel'] }}
    [b]Fierce:[/b] {{ $horse['fierce'] }}
    [b]Tenacity:[/b] {{ $horse['tenacity'] }}
    [b]Courage:[/b] {{ $horse['courage'] }}
    [b]Response:[/b] {{ $horse['response'] }}
    [b]Distance:[/b] {{ $horse['distance_min'] }}F - {{ $horse['distance_max'] }}F
    [b]Leg Type:[/b] {{ $data['leg_type']['value'] }}
    [b]Abilities:[/b][LIST]@foreach($abilities as $ability) 
    [b]@if($ability['type'] == 'positive') + @else - @endif {{ $ability['ability'] }}:[/b] {{ $ability['description'] }} @endforeach[/LIST][b]Dirt:[/b] {{ $data['surface_dirt'] }}
    [b]Turf:[/b] {{ $data['surface_turf'] }}
    [b]++Horse Info[/b]
    [b]Name:[/b] {{ $horse['call_name'] }}
    [b]Color:[/b] {{ $horse['color'] }}
    [b]Gender:[/b] {{ $data['sex'] }}
    [b]Bandages:[/b] {{ $data['bandages'] }}
    [b]Neck Height:[/b] {{ $data['neck_height'] }}
    [b]Run Style:[/b] {{ $data['run_style'] }}
    [b]Hood:[/b] {{ $data['hood'] }}
    [b]Shadow Roll:[/b] {{ $data['shadow_roll'] }}
    [b]Farm/stable name:[/b] {{ $data['owner']['stable_name'] }}
    [b]Racing Colors:[/b] {{ $data['owner']['racing_colors'] }}
    [img]{{ $horse['racing_img'] }}[/img]</textarea> 
  </div><!--end col-->
</div><!--end row-->
</div><!--end panel body-->
</div><!--end panel-->
<div class="panel panel-default">
 <div class="panel-heading text-center">
  @include('includes.stall_panel_heading')
</div><!--end heading-->
<div class="panel-body"> 
  <div class="row">
    <div class="col-sm-12">
      <h2>
        <small>
          <a class="icon-link" href="{{ URL::route('entry', [$horse['id']]) }}">
            <i class='fa-gray fa fa-paperclip'></i>
          </a>
        </small>
        Race Records
      </h2>
    </div>
    <?php $pos = 1?>
    @foreach($race_records as $i=>$races)     
    <div class="col-md-3">
      <h3>{{ $i }}</h3>
      <ul class="race-records"> 
       @foreach($races as $r)
       <li>
        <a class="icon-link" href="{{ URL::route('entry', [$horse['id'], $r['entry_id']]) }}">
          <i class='fa-gray fa fa-bookmark-o'></i>
        </a>      
        <a class="icon-link" href="{{ $r['race']['url'] }}" target="_blank">
         @if($r['race']['series'] != '') [{{ $r['race']['series'] }}] @endif  
         {{ $r['race']['name'] }} 
         {{ $r['race']['surface'] }} 
         {{ $r['race']['distance'] }}F 
         {{ $r['race']['grade'] }}
       </a>  
     </li>
     @endforeach
   </ul>
 </div><!--end col-->
 @if($pos % 4 == 0)
 <div class="clearfix"></div>
 @endif
 <?php $pos += 1; ?>
 @endforeach

</div><!--end row-->
</div><!--end panel body-->
</div><!--end panel-->
<div class="panel panel-default">
 <div class="panel-heading text-center">
  @include('includes.stall_panel_heading')
</div><!--end heading-->
<div class="panel-body">   
  <div class="row">    
    <div class="col-sm-12">   
      <h2>
        <small>
          <a class="icon-link" href="{{ URL::route('lineage', [$data['sex'], $horse['id'] ]) }}">
            <i class='fa-gray fa fa-paperclip'></i>
          </a>
        </small>
        Progeny
      </h2>                   
      <ul class="list-unstyled">
       @forelse ($offspring as $a)
       <li>
         <a class="icon-link" href="{{ URL::route('lineage', [$a['horse_id'], $a['horse_id'] ]) }}">
           <i class='fa-gray fa fa-bookmark-o'></i>
         </i>
       </a>
       <a class="icon-link" href="{{ URL::route('stall', $a['horse_id']) }}">{{ $a['horse_name'] }}</a>
       @if($a['horse_link'])
       <a class="icon-link" href="{{$a['horse_link']}}" target="_blank">
         <i class="fa fa-external-link  text-default" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="URL"></i>
       </a>
       @endif
       
       @if($data['sex'] == 'Stallion')
       out of <a class="icon-link" href="{{ URL::route('stall', $a['dam_id']) }}">{{ $a['dam_name'] }}</a>
       @if($a['dam_link'])
       <a class="icon-link" href="{{$a['dam_link']}}" target="_blank">
         <i class="fa fa-external-link  text-default" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="URL"></i>
       </a>
       @endif
       @endif
     
       @if($data['sex'] == 'Mare')
       by <a class="icon-link" href="{{ URL::route('stall', $a['sire_id']) }}">{{ $a['sire_name'] }}</a>
       @if($a['sire_link'])
       <a class="icon-link" href="{{$a['sire_link']}}" target="_blank">
         <i class="fa fa-external-link  text-default" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="URL"></i>
       </a>
       @endif
       @endif
     </li>
     @empty
     No foals yet!
     @endforelse      
   </ul>
 </div><!--end col-->
</div><!--end row-->
</div><!--end panel body-->
</div><!--end panel-->

<div class="panel panel-default"> 
  <div class="panel-heading text-center">
   @include('includes.stall_panel_heading')
 </div><!--end heading-->
 <div class="panel-body">
   @if($horse['racing_img'])
   <img class="stall-pic img-responsive" src="{{ $horse['racing_img'] }}">
   @else
   <p class="text-center">No racing image.</p>
   @endif
 </div>
</div><!--end panel-->

</div><!--end col-->
</div><!--end row-->




</div><!--end container-->


@endsection