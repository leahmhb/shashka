@extends('layouts.master')

@section('title', 'Race List')

@section('content')
<div class="page-header"><h1>Race List</h1></div>  
<div class="row">


  <div class="col-sm-6">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        Open Level
      </h3>
    </div>
    <div class="panel-body">
      <ul>
        @foreach($races['Open Level'] as $r)
        <li><span class="text-capitalize">
          <a href="{{ $r['url'] }}" target="_blank">
            {{ $r['name'] }} 
          </a> 
          {{ $r['surface'] }} 
          {{ $r['distance'] }}F
          -          
         {{ $r['ran_dt'] }}           
        </span></li>     
        @endforeach
      </ul>
    </div><!--end panel content-->    
  </div><!--end panel-->   
</div><!--end col-->

<div class="col-sm-6">      
  <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">
      GIII
    </h3>
  </div>
  <div class="panel-body">
    <ul>
     @foreach($races['GIII'] as $r)
     <li><span class="text-capitalize">
      <a href="{{ $r['url'] }}" target="_blank">
        {{ $r['name'] }} 
      </a> 
      {{ $r['surface'] }} 
      {{ $r['distance'] }}F 
      -      
     {{ $r['ran_dt'] }}      
    </span></li>     
    @endforeach
  </ul>
</div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->

<div class="row">
  <div class="col-sm-6">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        GII
      </h3>
    </div>
    <div class="panel-body">
      <ul>
        @foreach($races['GII'] as $r)
        <li><span class="text-capitalize">
          <a href="{{ $r['url'] }}" target="_blank">
            {{ $r['name'] }} 
          </a> 
          {{ $r['surface'] }} 
          {{ $r['distance'] }}F 
          -          
         {{ $r['ran_dt'] }}          
        </span></li>     
        @endforeach  
      </ul>
    </div><!--end panel content-->    
  </div><!--end panel-->   
</div><!--end col-->

<div class="col-sm-6">      
  <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">
      GI
    </h3>
  </div>
  <div class="panel-body">
    <ul>
     @foreach($races['GI'] as $r)
     <li><span class="text-capitalize">
      <a href="{{ $r['url'] }}" target="_blank">
        {{ $r['name'] }} 
      </a> 
      {{ $r['surface'] }} 
      {{ $r['distance'] }}F       
      -
     {{ $r['ran_dt'] }}      
    </span></li>     
    @endforeach 
  </ul>
</div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->
@endsection