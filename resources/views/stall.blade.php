@extends('layouts.master')

@section('title', 'Stall')

@section('content')
<div class="page-header"
><h1>{{ $horse['call_name'] }} <small>{{ $prefix['stable_prefix'] }} {{ $horse['registered_name'] }}</small> <a class="btn-md btn btn-primary" href="/update-horse/{{ $horse['id'] }}">Update</a>  </h1>  

</div><!--end page header-->
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        <ul class="stall-info list-inline text-center"> 

         <li><b>Sire:</b> <a href="{{$parents['sire_link']}}">{{ $parents['sire'] }}</a></li>
         <li><b>Dam:</b> <a href="{{$parents['dam_link']}}">{{ $parents['dam'] }}</a></li>
         <li><a class="btn-xs btn btn-primary" href="/add-lineage/{{ $horse['id'] }}/lineage">Update</a></li> 
</br>
         <li><b>Color:</b> {{ $horse['color'] }} - {{ $horse['phenotype'] }}</li>
         <li><b>Grade:</b> {{ $horse['grade'] }}</li>
       </ul>
     </h3>
   </div>
   <div class="panel-body">
    <img class="stall-pic img-responsive" src="{{ asset($img_src) }}">   

  </div><!--end panel content-->
  <div class="panel-footer">  
   <ul class="stall-info list-inline text-center">
     <li><b>Owner:</b> {{ $horse['owner'] }}</li>
     @if ($horse['breeder'] != '')
     <li><b>Breeder:</b> {{ $horse['breeder'] }}</li>
     @endif
     <li><b>Hexer:</b> {{ $horse['hexer'] }}</li>
   </ul>
 </div><!--end panel footer-->
</div><!--end panel-->       
</div><!--end col-->

<div class="col-md-6">
  <div class="stall-pills">
    <ul class="nav nav-pills" role="tablist">
      <li role="presentation" class="active"><a href="#racing" aria-controls="racing" role="tab" data-toggle="tab">Racing Stats</a></li>
      <li role="presentation" class=""><a href="#records" aria-controls="records" role="tab" data-toggle="tab">Top 5 Records</a></li>
      <li role="presentation" class=""><a href="#progeny" aria-controls="progeny" role="tab" data-toggle="tab">Progeny</a></li>
    </ul>

    <div class="tab-content">
     <div role="tabpanel" class="tab-pane active" id="racing">
       <h2>Racing Statistics</h2>
       <div class="row">

         <div class="col-sm-3">
          <div class="panel panel-default">
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
          </div><!--end panel-->       
        </div><!--end col-->
        <div class="col-sm-8">
          <ul class="stall-info list-unstyled"> 
            <li><b>Distance:</b> {{ $horse['distance_min'] }} F to {{ $horse['distance_max'] }} F</li>
            <li><b>Leg Type:</b> <span class="text-capitalize">{{ $horse['leg_type'] }}</span></li>
            <li><b>Abilities:</b>
              <ul class="stall-info list-unstyled">
                @foreach($abilities as $ability)
                <li>
                  <b>
                    @if($ability['type'] == 'positive')
                    + 
                    @else
                    -
                    @endif
                    {{ $ability['ability'] }}  
                    <p class="text-lowercase">/ </b>
                   
                     {{ $ability['description'] }} 
                   </p>
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
     <h2>Top Five Race Records</h2>
     <ol>       
      <li>First Place</li>
      <ol>
       <li>
        <span class="text-capitalize"><a href="#">Race Name</a> Grade Distance Surface
        </span>
      </li>
    </ol>
    <li>Second Place</li>
    <ol>
     <li>
      <span class="text-capitalize"><a href="#">Race Name</a> Grade Distance Surface
      </span>
    </li>
  </ol>
  <li>Third Place</li>
  <ol>
   <li>
    <span class="text-capitalize"><a href="#">Race Name</a> Grade Distance Surface
    </span>
  </li>
</ol>
<li>Fourth Place</li>
<ol>
 <li>
  <span class="text-capitalize"><a href="#">Race Name</a> Grade Distance Surface
  </span>
</li>
</ol>
<li>Fifth Place</li>
<ol>
 <li>
  <span class="text-capitalize"><a href="#">Race Name</a> Grade Distance Surface
  </span>
</li>        
</ol>
</ol>
</div><!--end records-->
<div role="tabpanel" class="tab-pane" id="progeny">

  <h2>Progeny <a class="btn-xs btn btn-primary" href="/add-lineage/{{ $horse['id'] }}/progeny">Add</a></h2>                          
  <ol>
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
  No foals yet!
  @endforelse
</ol>
</div><!--end progeny-->


</div><!--end tab content-->

</div><!--end tabs-->


</div><!--end col-->

</div><!--end row-->
@endsection