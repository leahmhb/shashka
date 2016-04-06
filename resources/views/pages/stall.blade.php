@extends('layouts.master')

@section('title', 'Stall')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <h1 class="panel-title">                
            {{ $horse['call_name'] }}
            <span class="text-muted">{{ $prefix['stable_prefix'] }}'s' {{ $horse['registered_name'] }}</span> 
            
          </h1> 
        </div><!--end heading-->

        <div class="panel-body">
          <img class="stall-pic img-responsive" src="{{ $horse['stall_img'] }}">   
        </div><!--end panel content-->

        <div class="panel-footer">
         <ul class="stall-info list-inline text-center"> 
           <a href="/ancestory/{{$horse['id']}}/{{$horse['id']}}"><i class='fa-color fa fa-paperclip'></i></a>
           @if(count($parents) > 0)
           <li><b>Sire:</b> <a href="{{$parents['sire_link']}}">{{ $parents['sire_name'] }}</a></li>
           <li><b>Dam:</b> <a href="{{$parents['dam_link']}}">{{ $parents['dam_name'] }}</a></li>
           @else
           <li><b>Foundation {{ $horse['sex'] }}</b></li>
           @endif
         </ul>
       </div><!--end footer-->
     </div><!--end panel-->       

     <div class="panel panel-default">
      <div class="panel-body">
       <div class="row">      
        <div class="col-sm-4">
         <h2>
           <small><a href="/horse/{{$horse['id']}}"><i class='fa-color fa fa-paperclip'></i></a></small>
           Info
         </h2>
         <ul>
          <li>
            <b>Owner:</b> {{ $horse['owner'] }}
          </li>
          @if ($horse['breeder'])
          <li>
            <b>Breeder:</b> {{ $horse['breeder'] }}
          </li>
          @endif
          @if($horse['hexer']) 
          <li>
            <b>Hexer:</b> {{ $horse['hexer'] }}
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
          @if($horse['grade']) 
          <li>
            <b>Grade:</b> {{ $horse['grade'] }}
          </li>
          @endif    
        </ul>
      </div><!--end col-->

      <div class="col-sm-4">
        <h2>Notes</h2>
        <textarea class="form-control" rows="16" readonly>
         {{ $horse['notes'] }}
       </textarea>
     </div><!--end col-->

     <div class="col-sm-4">
       <h2>Current Races</h2>
       <ul class="race-records"> 
        @foreach($race_records as $r)     
        @if($r['placing'] == 0)  
        <li>
          <a href="/race-entry/{{$horse['id']}}/{{$r['entry_id']}}"><i class='fa-color fa fa-bookmark-o'></i></a>
          <b>{{ $r['placing'] }}</b>          
          <span class="tooltip-overflow text-capitalize" data-toggle="tooltip" data-placement="top" 
          title="
          {{ $r['race']['series'] }} 
          {{ $r['race']['surface'] }} 
          {{ $r['race']['distance'] }}F 
          {{ $r['race']['grade'] }}"
          >
          <a href="{{ $r['race']['url'] }}" target="_blank">
            {{ $r['race']['name'] }} 
          </a>            
        </span>
      </li> 
      @endif
      @endforeach
    </ul>      
  </div><!--end col-->
</div><!--end row-->
</div><!--end panel body-->
</div><!--end panel-->
<div class="panel panel-default">
  <div class="panel-body">

    <div class="row">
     <div class="col-sm-12">
       <h2>
         <small><a href="/horse/{{$horse['id']}}"><i class='fa-color fa fa-paperclip'></i></a></small>
         Racing Statistics
       </h2>
     </div>
     <div class="col-sm-3">
      <ul class="stall-info list-unstyled stats" > 
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
      </ul> 
    </div><!--end col-->

    <div class="col-sm-3">
      <ul class="stall-info list-unstyled"> 
        <li><b>Distance:</b> {{ $horse['distance_min'] }}F to {{ $horse['distance_max'] }}F</li>
        <li><b>Leg Type:</b>
          <span class="tooltip-overflow text-capitalize" data-toggle="tooltip" data-placement="right" title="{{ $leg_type['description'] }}">{{ $horse['leg_type'] }}</span>
        </li>
        <li><b>Abilities:</b>
          <ul class="stall-info list-unstyled">
            @foreach($abilities as $ability)
            <li>                 
              <b>@if($ability['type'] == 'positive') 
                <i class="fa fa-plus text-success"></i>
                @else 
                <i class="fa fa-minus text-danger"></i>
                @endif
              </b>
              <span class="tooltip-overflow" data-toggle="tooltip" data-placement="right" title="{{ $ability['description'] }}">{{ $ability['ability'] }}</span>
            </li>
            @endforeach              
          </ul>
        </li>
        <li><b>Surface:</b>
          <ul class="stall-info list-unstyled">
            <li><b>Dirt-</b> <span class="text-capitalize">{{ $horse['surface_dirt'] }}</span></li>
            <li><b>Turf-</b> <span class="text-capitalize">{{ $horse['surface_turf'] }}</span></li>
          </ul>
        </li>      
        <li><b>Neck Height:</b> <span class="text-capitalize">{{ $horse['neck_height'] }}</span></li>
        <li><b>Run Style:</b> <span class="text-capitalize">{{ $horse['run_style'] }}</span></li>
        <li><b>Equipment:</b>
          <ul class="stall-info list-unstyled">
            <li><b>Bandages-</b> <span class="text-capitalize">{{ $horse['bandages'] }}</span></li>
            <li><b>Hood-</b> <span class="text-capitalize">{{ $horse['hood'] }}</span></li>
            <li><b>Shadow Roll-</b> <span class="text-capitalize">{{ $horse['shadow_roll'] }}</span></li>
          </ul>
        </li>
      </ul>
    </div><!--end col-->
    <div class="col-sm-6">      
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
        [b]Leg Type:[/b] {{ $horse['leg_type'] }}
        [b]Abilities:[/b][LIST]
        [b]+ {{ $horse['pos_ability_1'] }}[/b]  
        [b]+ {{ $horse['pos_ability_2'] }}[/b] 
        [b]- {{ $horse['neg_ability_1'] }}[/b]
        [/LIST][b]Dirt:[/b] {{ $horse['surface_dirt'] }}
        [b]Turf:[/b] {{ $horse['surface_turf'] }}

        [b]++Horse Info[/b]
        [b]Name:[/b] {{ $horse['call_name'] }}
        [b]Color:[/b] {{ $horse['color'] }}
        [b]Gender:[/b] {{ $horse['sex'] }}
        [b]Bandages:[/b] {{ $horse['bandages'] }}
        [b]Neck Height:[/b] {{ $horse['neck_height'] }}
        [b]Run Style:[/b] {{ $horse['run_style'] }}
        [b]Hood:[/b] {{ $horse['hood'] }}
        [b]Shadow Roll:[/b] {{ $horse['shadow_roll'] }}

        [b]Farm/stable name:[/b] {{ $entry['stable_name'] }}
        [b]Racing Colors:[/b] {{ $entry['racing_colors'] }}
        [img]{{ $horse['racing_img'] }}[/img]
      </textarea> 
    </div><!--end col-->
  </div><!--end row-->
</div><!--end panel body-->
</div><!--end panel-->
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-12">
        <h2>
          <small><a href="/race-entry/{{$horse['id']}}"><i class='fa-color fa fa-paperclip'></i></a></small>
          Race Records
        </h2>
      </div>

      <div class="col-md-3">
       <h3>First Place</h3>
       <ul class="race-records"> 
        @foreach($race_records as $r)     
        @if($r['placing'] == 1)  
        <li>
          <a href="/race-entry/{{$horse['id']}}/{{$r['entry_id']}}"><i class='fa-color fa fa-bookmark-o'></i></a>
          <span class="tooltip-overflow text-capitalize" data-toggle="tooltip" data-placement="top" 
          title="{{ $r['race']['surface'] }} 
          {{ $r['race']['distance'] }}F 
          {{ $r['race']['grade'] }}">
          <a href="{{ $r['race']['url'] }}" target="_blank">
            {{ $r['race']['name'] }} 
          </a>            
        </span>
      </li> 
      @endif    
      @endforeach
    </ul>
  </div><!--end col-->

  <div class="col-md-3">
   <h3>Second Place</h3>
   <ul class="race-records"> 
    @foreach($race_records as $r)     
    @if($r['placing'] == 2)  
    <li>
      <a href="/race-entry/{{$horse['id']}}/{{$r['entry_id']}}"><i class='fa-color fa fa-bookmark-o'></i></a>
      <span class="tooltip-overflow text-capitalize" data-toggle="tooltip" data-placement="top" 
      title="
      {{ $r['race']['series'] }} 
      {{ $r['race']['surface'] }} 
      {{ $r['race']['distance'] }}F 
      {{ $r['race']['grade'] }}"
      >
      <a href="{{ $r['race']['url'] }}" target="_blank">
        {{ $r['race']['name'] }} 
      </a>            
    </span>
  </li> 
  @endif    
  @endforeach
</ul>
</div><!--end col-->

<div class="col-md-3">
 <h3>Third Place</h3>
 <ul class="race-records"> 
  @foreach($race_records as $r)     
  @if($r['placing'] == 3)  
  <li>            
    <a href="/race-entry/{{$horse['id']}}/{{$r['entry_id']}}"><i class='fa-color fa fa-bookmark-o'></i></a>
    <span class="tooltip-overflow text-capitalize" data-toggle="tooltip" data-placement="top" 
    title="
    {{ $r['race']['series'] }} 
    {{ $r['race']['surface'] }} 
    {{ $r['race']['distance'] }}F 
    {{ $r['race']['grade'] }}"
    >
    <a href="{{ $r['race']['url'] }}" target="_blank">
      {{ $r['race']['name'] }} 
    </a>            
  </span>
</li>
@endif    
@endforeach
</ul>
</div><!--end col-->

<div class="col-md-3">
 <h3>Other</h3>
 <ul class="race-records"> 
  @foreach($race_records as $r)     
  @if($r['placing'] > 3)  
  <li>              
    <a href="/race-entry/{{$horse['id']}}/{{$r['entry_id']}}"><i class='fa-color fa fa-bookmark-o'></i></a>
    <b>{{ $r['placing'] }}</b>          
    <span class="tooltip-overflow text-capitalize" data-toggle="tooltip" data-placement="top" 
    title="
    {{ $r['race']['series'] }} 
    {{ $r['race']['surface'] }} 
    {{ $r['race']['distance'] }}F 
    {{ $r['race']['grade'] }}"
    >
    <a href="{{ $r['race']['url'] }}" target="_blank">
      {{ $r['race']['name'] }} 
    </a>            
  </span>
</li> 
@endif    
@endforeach
</ul>
</div><!--end col-->
</div><!--end row-->
</div><!--end panel body-->
</div><!--end panel-->
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">    
      <div class="col-sm-12">   
        <h2>
          <small><a href="/ancestory/{{$horse['sex']}}/{{$horse['id']}}"><i class='fa-color fa fa-paperclip'></i></a></small>
          Progeny
        </h2>                   
        <ul class="list-unstyled">
         @forelse ($offspring as $a)
         <li>
          
           <a href="/ancestory/{{$a['horse_id']}}/{{$a['horse_id']}}"><i class='fa-color fa fa-bookmark-o'></i></i></a>
           <a href="{{ $a['horse_link'] }}">{{ $a['horse_name'] }}</a>

           @if($horse['sex'] == 'Stallion')
           out of <a href="{{ $a['dam_link'] }}">{{ $a['dam_name'] }}</a>
           @endif

           @if($horse['sex'] == 'Mare')
           by <a href="{{ $a['sire_link'] }}">{{ $a['sire_name'] }}</a>
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

</div><!--end col-->
</div><!--end row-->
</div><!--end container-->


@endsection