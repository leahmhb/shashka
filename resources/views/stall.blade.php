@extends('layouts.master')

@section('title', 'Stall')

@section('content')
<div class="page-header">
  <div class="row">
    <div class="col-sm-12">  
  

       <h1>{{ $horse['call_name'] }} <small>{{ $prefix['stable_prefix'] }} {{ $horse['registered_name'] }}</small></h1> 

             <div id="stall-edit" class="btn-group btn-group-sm btn-group-justified">
        <a class="btn btn-default" href="/update-horse/{{ $horse['id'] }}">Update Stall Info</a>  
        <a class="btn btn-default" href="/add-ancestory/{{ $horse['id'] }}/{{ $horse['id'] }}">Update Lineage</a>
        <a class="btn btn-default" href="/add-race-entrant/{{ $horse['id'] }}">Add Race Entry</a>
        <a class="btn btn-default" href="/add-ancestory/{{ $horse['sex'] }}/{{ $horse['id'] }}">Add Progeny</a>
      </div><!--end btn group-->
    </div><!--end col-->
  </div><!--end row-->
</div><!--end page header-->
<div class="row">
  <div class="col-md-7">
    <div class="panel panel-default stall-panel">
      <div class="panel-heading"><h3 class="panel-title">
        <ul class="stall-info list-inline text-center"> 
          @if(count($parents) > 0)
          <li><b>Sire:</b> <a href="{{$parents['sire_link']}}">{{ $parents['sire_name'] }}</a></li>
          <li><b>Dam:</b> <a href="{{$parents['dam_link']}}">{{ $parents['dam_name'] }}</a></li>
          @else
          <li><b>Foundation {{ $horse['sex'] }}</b></li>
          @endif

        </ul>
      </h3>
    </div>
    <div class="panel-body">
      <img class="stall-pic img-responsive" src="{{ $horse['img_path'] }}">   

    </div><!--end panel content-->
    <div class="panel-footer">  
     <ul class="stall-info list-inline text-center">
       <li><b>Owner:</b> {{ $horse['owner'] }}</li>
       @if ($horse['breeder'] != '')
       <li><b>Breeder:</b> {{ $horse['breeder'] }}</li>
       @endif
       <li><b>Hexer:</b> {{ $horse['hexer'] }}</li>
     </br>
     <li><b>Color:</b> {{ $horse['color'] }} - {{ $horse['phenotype'] }}</li>
     <li><b>Grade:</b> {{ $horse['grade'] }}</li>
   </ul>
 </div><!--end panel footer-->
</div><!--end panel-->       
</div><!--end col-->

<div class="col-md-5">
  <div class="panel panel-default stall-panel">
    <div class="panel-heading"><h3 class="panel-title">
      <div class="stall-pills">
        <ul class="nav nav-pills" role="tablist">
          <li role="presentation" class="active"><a href="#racing" aria-controls="racing" role="tab" data-toggle="tab">Stats</a></li>
          <li role="presentation" class=""><a href="#records" aria-controls="records" role="tab" data-toggle="tab">Records</a></li>
          <li role="presentation" class=""><a href="#progeny" aria-controls="progeny" role="tab" data-toggle="tab">Progeny</a></li>
          <li role="presentation" class=""><a href="#entry-form" aria-controls="entry-form" role="tab" data-toggle="tab">Entry</a></li>
        </ul>
      </h3>
    </div>
    <div class="panel-body">
      <div class="tab-content">
       <div role="tabpanel" class="tab-pane active" id="racing">
         <h2>Racing Statistics</h2>
         <div class="row">

           <div class="col-sm-5">

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
            </ul> 
            
          </div><!--end col-->
          <div class="col-sm-7">
            <ul class="stall-info list-unstyled"> 
              <li><b>Distance:</b> {{ $horse['distance_min'] }} F to {{ $horse['distance_max'] }} F</li>
              <li><b>Leg Type:</b> <span class="text-capitalize">{{ $horse['leg_type'] }}</span></li>
              <li><b>Abilities:</b>
                <ul class="stall-info list-unstyled">
                  @foreach($abilities as $ability)
                  <li>                 
                    <b>@if($ability['type'] == 'positive') + @else - @endif</b>
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

        </div><!--end row-->
      </div><!--end racing-->

      <div role="tabpanel" class="tab-pane" id="records">
       <h2>Top Five Race Records </h2>
       
       <ol class="race-records">       
        <li>First Place</li>
        <ul>
          @foreach($race_records as $r)
          @if($r['placing'] == '1')
          <li>
            <span class="text-capitalize"><a href="{{ $r['race']['url'] }}" target="_blank">{{ $r['race']['name'] }}</a> 
              {{ $r['race']['surface'] }} 
              {{ $r['race']['distance'] }}F 
              {{ $r['race']['grade'] }} 
            </span>
          </li>
          @endif    
          @endforeach
        </ul>
        <li>Second Place</li>
        <ul>
          @foreach($race_records as $r)
          @if($r['placing'] == '2')
          <li>
            <span class="text-capitalize"><a href="{{ $r['race']['url'] }}" target="_blank">{{ $r['race']['name'] }}</a> 
              {{ $r['race']['surface'] }} 
              {{ $r['race']['distance'] }}F 
              {{ $r['race']['grade'] }} 
            </span>
          </li>
          @endif    
          @endforeach
        </ul>
        <li>Third Place</li>
        <ul>
          @foreach($race_records as $r)
          @if($r['placing'] == '3')
          <li>
            <span class="text-capitalize"><a href="{{ $r['race']['url'] }}" target="_blank">{{ $r['race']['name'] }}</a> 
              {{ $r['race']['surface'] }} 
              {{ $r['race']['distance'] }}F 
              {{ $r['race']['grade'] }} 
            </span>
          </li>
          @endif    
          @endforeach
        </ul>
        <li>Fourth Place</li>
        <ul>
          @foreach($race_records as $r)
          @if($r['placing'] == '4')
          <li>
            <span class="text-capitalize"><a href="{{ $r['race']['url'] }}" target="_blank">{{ $r['race']['name'] }}</a> 
              {{ $r['race']['surface'] }} 
              {{ $r['race']['distance'] }}F 
              {{ $r['race']['grade'] }} 
            </span>
          </li>
          @endif    
          @endforeach
        </ul>
        <li>Fifth Place</li>
        <ul>
          @foreach($race_records as $r)
          @if($r['placing'] == '5')
          <li>
            <span class="text-capitalize"><a href="{{ $r['race']['url'] }}" target="_blank">{{ $r['race']['name'] }}</a> 
              {{ $r['race']['surface'] }} 
              {{ $r['race']['distance'] }}F 
              {{ $r['race']['grade'] }} 
            </span>
          </li>
          @endif    
          @endforeach    
        </ul>
        <li>Other</li>
        <ul>
          @foreach($race_records as $r)
          @if($r['placing'] > '5')
          <li>
            <span class="text-capitalize"><a href="{{ $r['race']['url'] }}" target="_blank">{{ $r['race']['name'] }}</a> 
              {{ $r['race']['surface'] }} 
              {{ $r['race']['distance'] }}F 
              {{ $r['race']['grade'] }} 
            </span>
          </li>
        </ul>
        @endif    
        @endforeach
      </ol>
    </div><!--end records-->
    <div role="tabpanel" class="tab-pane" id="progeny">

      <h2>Progeny</h2>                          
      <ul>
       @forelse ($offspring as $a)
       <li><a href="{{ $a['horse_link'] }}">{{ $a['horse_name'] }}</a>

        @if($horse['sex'] == 'Stallion')
        out of <a href="{{ $a['dam_link'] }}">{{ $a['dam_name'] }}</a>
        @endif

        @if($horse['sex'] == 'Mare')
        by <a href="{{ $a['sire_link'] }}">{{ $a['sire_name'] }}</a>
        @endif
      </li>
      @empty
      No fillies yet!
      @endforelse      
    </ul>
  </div><!--end progeny-->

  <div role="tabpanel" class="tab-pane" id="entry-form">
    <h2>Race Entry Form</h2>
    <pre><code>[b]+++Form[/b]
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
[img]http://shashka-racers.nfshost.com/horses/race-pose/{{ strtolower($horse['call_name']) }}.png[/img]</code></pre>                         
 
</div><!--end race entry-->


</div><!--end tab content-->

</div><!--end tabs-->
 <div class="panel-footer">  </div>
</div><!--end panel body-->
</div><!--end panel-->  
</div><!--end col-->

</div><!--end row-->


@endsection