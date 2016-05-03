  <input type="text" readonly class="form-control hidden" name="id" id="id"  value="{{ $horse['id'] }}">
  
  <h2><small>Basics</small></h2>

  <div class="form-group">
   <label for="call-name" class="col-sm-2 control-label">
     <small>
       <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
     </small>
     Call Name          
   </label>
   <div class="col-sm-10">
    <input type="text" class="form-control" name="call_name" id="call-name" placeholder="..." value="{{ $horse['call_name'] }}" />
  </div>
</div><!--end call-name-->

<div class="form-group">
  <label for="registered-name" class="col-sm-2 control-label">
   Reg'd Name
 </label>
 <div class="col-sm-10">
  <input type="text" class="form-control" name="registered_name" id="registered-name" placeholder="..." value="{{ $horse['registered_name'] }}" />
</div>
</div><!--end registered-name-->   

<div class="form-group">
  <label for="sex" class="col-sm-2 control-label">
   <small>
     <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
   </small>
   Sex
 </label>
 <div class="col-sm-10">
  <select name="sex" class="form-control">
    <option></option>
    @foreach ($domain['sexes'] as $sex)          
    <option @if( $horse['sex'] == $sex['id']) selected @endif value="{{$sex['id']}}">{{$sex['value']}}</option>
    @endforeach
  </select>           
</div>        
</div><!--end sex-->   

<div class="form-group">
  <label for="color-name" class="col-sm-2 control-label">Color</label>
  <div class="col-sm-10">       
    <input type="text" name="color" class="form-control" placeholder="..." value="{{ $horse['color'] }}" />
  </div>                
</div><!--end color-name-->

<div class="form-group">
  <label for="phenotype-name" class="col-sm-2 control-label">Phenotype</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="phenotype" id="phenotype" placeholder="..." value="{{ $horse['phenotype'] }}" />
  </div>
</div><!--end phenotype-name-->


<div class="form-group">
  <label for="grade" class="col-sm-2 control-label">
   <small>
     <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
   </small>
   Breeding Status
 </label>
 <div class="col-sm-10">   
   @foreach ($domain['breeding_status'] as $breeding_status) 
   <label class="radio-inline">
     <input type="radio" name="breeding_status" value="{{$breeding_status['id']}}" @if($horse['breeding_status'] == $breeding_status['id']) checked @endif>
     {{ $breeding_status['value'] }}
   </label>          
   @endforeach
 </div>
</div><!--end breeding_status-->


<div class="form-group">
  <label for="grade" class="col-sm-2 control-label">
   <small>
     <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
   </small>
   Grade
 </label>
 <div class="col-sm-10">
   @foreach ($domain['grades'] as $grade)           
   <label class="radio-inline">
    <input type="radio" name="grade" value="{{$grade['id']}}" @if($horse['grade'] == $grade['id']) checked @endif>
    {{$grade['description']}}
  </label>            
  @endforeach
</div>
</div><!--end grade-->

<div class="form-group">
  <label for="stall_img" class="col-sm-2 control-label">
    Stall Image
  </label>
  <div class="col-sm-10">
   <div class="input-group">
     <input type="text" class="form-control" name="stall_img" id="stall_img" placeholder="img" value="{{$horse['stall_img']}}" />
     <span class="input-group-addon">
      <small>
        <i class="fa fa-picture-o fa-color"></i>
      </small>
    </span>
  </div> 
</div>
</div><!--end stall img-->  

<div class="form-group">
  <label for="racing_img" class="col-sm-2 control-label">
    Racing Image
  </label>
  <div class="col-sm-10">
   <div class="input-group">
     <input type="text" class="form-control" name="racing_img" id="racing_img" placeholder="img" value="{{$horse['racing_img']}}" />
     <span class="input-group-addon">
      <small>
        <i class="fa fa-picture-o fa-color"></i>
      </small>
    </span>
  </div> 
</div>
</div><!--end racing img-->     

<div class="form-group">
  <label for="stall_path" class="col-sm-2 control-label">
    Stall Page</label>
    <div class="col-sm-10">
      <div class="input-group">
        <input type="text" class="form-control" name="stall_path" id="stall page" placeholder="leave blank if saving to database" value="{{$horse['stall_path']}}" />
        <span class="input-group-addon">
          <small>
            <i class="fa fa-link fa-color"></i>
          </small>
        </span>
      </div>
    </div>
  </div><!--end stall page-->


  <div class="form-group">
    <label for="owner-name" class="col-sm-2 control-label">
     <small>
       <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
     </small>
     Owner
   </label>
   <div class="col-sm-10">       
    <select name="owner" class="form-control">

      @if($owner)
      <option value ="{{$owner['id']}}">{{$owner['username']}}</option>
      @else 
      <option></option>
      @foreach ($domain['person'] as $person)          
      <option @if( $horse['owner'] == $person['id']) selected @endif value="{{$person['id']}}">{{$person['username']}}</option>
      @endforeach
      @endif
    </select>
  </div>                
</div><!--end owner-name-->

<div class="form-group">
  <label for="breeder-name" class="col-sm-2 control-label">

   Breeder
 </label>
 <div class="col-sm-10">
   <select name="breeder" class="form-control">
    <option></option>
    @foreach ($domain['person'] as $person)          
    <option @if( $horse['breeder'] == $person['id']) selected @endif value="{{$person['id']}}">{{$person['username']}}</option>
    @endforeach
  </select>
</div>
</div><!--end breeder-name-->

<div class="form-group">
  <label for="hexer-name" class="col-sm-2 control-label">

   Hexer
 </label>
 <div class="col-sm-10">
  <select name="hexer" class="form-control">
    <option></option>
    @foreach ($domain['person'] as $person)          
    <option @if( $horse['hexer'] == $person['id']) selected @endif value="{{$person['id']}}">{{$person['username']}}</option>
    @endforeach
  </select>
</div>
</div><!--end hexer-name-->

<div class="form-group">
  <label for="hexer-name" class="col-sm-2 control-label">Notes</label>
  <div class="col-sm-10">
   <textarea class="form-control" name="notes" rows="5">{{ $horse['notes'] }}</textarea>
 </div>
</div><!--end hexer-name-->


<h2><small>Abilities</small></h2>

<div class="form-group">
  <label for="pos-ability-1" class="col-sm-2 control-label">

   <i class="fa fa-plus text-success"></i>
 </label>
 <div class="col-sm-10">
  <select name="pos_ability_1" class="form-control">
    <option></option>
    @foreach ($domain['pos_abilities'] as $pos)          
    <option @if( $horse['pos_ability_1'] == $pos['id']) selected @endif value="{{$pos['id']}}">{{$pos['ability']}}: {{$pos['description']}}</option>
    @endforeach     
  </select>           
</div>  
</div><!--end pos_ability_1-->  

<div class="form-group">
  <label for="pos-ability-2" class="col-sm-2 control-label">

   <i class="fa fa-plus text-success"></i>
 </label>
 <div class="col-sm-10">
  <select name="pos_ability_2" class="form-control">
    <option></option>
    @foreach ($domain['pos_abilities'] as $pos)          
    <option @if( $horse['pos_ability_2'] == $pos['id']) selected @endif value="{{$pos['id']}}">{{$pos['ability']}}: {{$pos['description']}}</option>
    @endforeach   
  </select>           
</div>  
</div><!--end pos_ability_2-->

<div class="form-group">
  <label for="neg-ability-1" class="col-sm-2 control-label">

   <i class="fa fa-minus text-danger"></i>
 </label>
 <div class="col-sm-10">
  <select name="neg_ability_1" class="form-control">
    <option></option>
    @foreach ($domain['neg_abilities'] as $neg)          
    <option @if( $horse['neg_ability_1'] == $neg['id']) selected @endif value="{{$neg['id']}}">{{$neg['ability']}}: {{$neg['description']}}</option>
    @endforeach   
  </select>           
</div>  
</div><!--end neg_ability_1-->

<h2><small>Distance</small></h2>

<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="distance-min" class="col-sm-4 control-label">Min</label>    
      <div class="col-sm-8">
        <div class="input-group">
          <input type="number" name="distance_min" class="form-control" placeholder="0" value="{{ $horse['distance_min'] }}" step="any" min="0">
          <span class="input-group-addon"><small>Furlongs</small></span>
        </div>
      </div>
    </div><!--end distance--> 
  </div><!--end col-->
  <div class="col-sm-6">
    <div class="form-group">
      <label for="distance-min" class="col-sm-4 control-label">Max</label>    
      <div class="col-sm-8">
        <div class="input-group">
          <input type="number" name="distance_max" class="form-control" placeholder="0" value="{{ $horse['distance_max'] }}" step="any" min="0">
          <span class="input-group-addon"><small>Furlongs</small></span>
        </div>
      </div>
    </div> <!--end distance--> 
  </div><!--end col-->
</div><!--end row-->

<div class="row">
  <div class="col-sm-4">
    <h2><small>Stats</small></h2>

    <div class="form-group">
      <label for="speed" class="col-sm-6 control-label">Speed</label>
      <div class="col-sm-6">       
        <input type="number" name="speed" class="form-control" placeholder="0" value="{{ $horse['speed'] }}" />
      </div>                
    </div><!--end speed-->

    <div class="form-group">
      <label for="staying" class="col-sm-6 control-label">Staying</label>
      <div class="col-sm-6">       
        <input type="number" name="staying" class="form-control" placeholder="0" value="{{ $horse['staying'] }}" />
      </div>                
    </div><!--end staying-->

    <div class="form-group">
      <label for="stamina" class="col-sm-6 control-label">Stamina</label>
      <div class="col-sm-6">       
        <input type="number" name="stamina" class="form-control" placeholder="0" value="{{ $horse['stamina'] }}" />
      </div>                
    </div><!--end stamina-->

    <div class="form-group">
      <label for="breaking" class="col-sm-6 control-label">Breaking</label>
      <div class="col-sm-6">       
        <input type="number" name="breaking" class="form-control" placeholder="0" value="{{ $horse['breaking'] }}" />
      </div>                
    </div><!--end breaking-->

    <div class="form-group">
      <label for="power" class="col-sm-6 control-label">Power</label>
      <div class="col-sm-6">       
        <input type="number" name="power" class="form-control" placeholder="0" value="{{ $horse['power'] }}" />
      </div>                
    </div><!--end power-->

    <div class="form-group">
      <label for="feel" class="col-sm-6 control-label">Feel</label>
      <div class="col-sm-6">       
        <input type="number" name="feel" class="form-control" placeholder="0" value="{{ $horse['feel'] }}" />
      </div>                
    </div><!--end feel-->

    <div class="form-group">
      <label for="fierce" class="col-sm-6 control-label">Fierce</label>
      <div class="col-sm-6">       
        <input type="number" name="fierce" class="form-control" placeholder="0" value="{{ $horse['fierce'] }}" />
      </div>                
    </div><!--end fierce-->

    <div class="form-group">
      <label for="tenacity" class="col-sm-6 control-label">Tenacity</label>
      <div class="col-sm-6">       
        <input type="number" name="tenacity" class="form-control" placeholder="0" value="{{ $horse['tenacity'] }}" />
      </div>                
    </div><!--end tenacity-->

    <div class="form-group">
      <label for="courage" class="col-sm-6 control-label">Courage</label>
      <div class="col-sm-6">       
        <input type="number" name="courage" class="form-control" placeholder="0" value="{{ $horse['courage'] }}" />
      </div>                
    </div><!--end courage-->

    <div class="form-group">
      <label for="response" class="col-sm-6 control-label">Response</label>
      <div class="col-sm-6">       
        <input type="number" name="response" class="form-control" placeholder="0" value="{{ $horse['response'] }}" />
      </div>                
    </div><!--end response-->
  </div><!--end col-->

  <div class="col-sm-8">
    <h2><small>Surface</small></h2>

    <div class="form-group">
      <label for="surface-dirt" class="col-sm-3 control-label">

       Dirt
     </label>
     <div class="col-sm-9">         
       @foreach ($domain['surface_pref'] as $surface)    
       <label class="radio-inline">
        <input type="radio" name="surface_dirt" value="{{$surface['id']}}" 
        @if($horse['surface_dirt'] == $surface['id']) checked @endif>
        {{$surface['value']}}
      </label>   
      @endforeach
    </div>  
  </div><!--end surface-dirt--> 

  <div class="form-group">
    <label for="surface-turf" class="col-sm-3 control-label">

     Turf
   </label>
   <div class="col-sm-9">        
     @foreach ($domain['surface_pref'] as $surface)      
     <label class="radio-inline">
      <input type="radio" name="surface_turf" value="{{$surface['id']}}" 
      @if($horse['surface_turf'] == $surface['id']) checked @endif>
      {{$surface['value']}}
    </label>
    @endforeach               
  </div>
</div><!--end surface-turf--> 

<h2><small>Other</small></h2>

<div class="form-group">
  <label for="leg-type" class="col-sm-3 control-label">

   Leg Type
 </label>
 <div class="col-sm-9">
   @foreach ($domain['leg_types'] as $leg_types) 
   <input type="radio" name="leg_type" value="{{$leg_types['id']}}" 
   @if($horse['leg_type'] == $leg_types['id']) checked @endif>
   {{$leg_types['value']}}
   <br>
   @endforeach  
 </div>
</div><!--end leg-type-->

<div class="form-group">
  <label for="neck-height" class="col-sm-3 control-label">

   Neck Height
 </label>
 <div class="col-sm-9"> 
   @foreach ($domain['neck_height'] as $neck_height)  
   <label class="radio-inline">
    <input type="radio" name="neck_height" value="{{$neck_height['id']}}" 
    @if($horse['neck_height'] == $neck_height['id']) checked @endif>
    {{$neck_height['value']}}
  </label>   
  @endforeach   
</div>
</div><!--end neck-height-->

<div class="form-group">
  <label for="run-style" class="col-sm-3 control-label">

   Run Style
 </label>
 <div class="col-sm-9">
   @foreach ($domain['run_style'] as $run_style)   
   <label class="radio-inline">
    <input type="radio" name="run_style" value="{{$run_style['id']}}" 
    @if($horse['run_style'] == $run_style['id']) checked @endif>
    {{$run_style['value']}}
  </label>   
  @endforeach  
</div>
</div><!--end run-style-->

<h2><small>Equipment</small></h2>

<div class="form-group">
  <label for="bandages" class="col-sm-3 control-label">

   Bandages
 </label>
 <div class="col-sm-9"> 
   @foreach ($domain['bandages'] as $bandages) 
   <label class="radio-inline">
    <input type="radio" name="bandages" value="{{$bandages['id']}}" 
    @if($horse['bandages'] == $bandages['id']) checked @endif>
    {{$bandages['value']}}
  </label>    
  @endforeach  
</div>
</div><!--end bandages-->  

<div class="form-group">
  <label for="hood" class="col-sm-3 control-label">

   Hood
 </label>
 <div class="col-sm-9">             
  @foreach ($domain['hood'] as $hood)
  <label class="radio-inline">
    <input type="radio" name="hood" value="{{$hood['id']}}" 
    @if($horse['hood'] == $hood['id']) checked @endif>
    {{$hood['value']}}
  </label> 
  @endforeach             
</div>
</div><!--end hood-->

<div class="form-group">
  <label for="shadow-roll" class="col-sm-3 control-label">

   Shadow Roll
 </label>
 <div class="col-sm-9">             
   @foreach ($domain['shadow_roll'] as $shadow_roll) 
   <label class="radio-inline">
    <input type="radio" name="shadow_roll" value="{{$shadow_roll['id']}}" @if($horse['shadow_roll'] == $shadow_roll['id']) checked @endif>
    {{$shadow_roll['value']}}
  </label>   
  @endforeach          
</div>
</div><!--end shadow-roll-->
</div><!--end col-->


</div><!--end row-->
