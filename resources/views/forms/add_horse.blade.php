@extends('layouts.master')

@section('title', 'Add Horse')

@section('content')

<div class="page-header"><h1>Add Horse <small>New Additions</small></h1></div>

<form id="add-horse" class="form-horizontal" method="post">

  <div class="row">
    <div class="col-sm-12">          
      @if($validate == true)
      <div id="success "class="alert alert-success" role="alert">
        Successful addition!
      </div><!--end alert-->
      @endif        
      <div id="rsvErrors" class="alert alert-danger"></div>
    </div><!--end col-->
  </div><!--end row-->

  
  <div class="row">  
    <div class="col-md-9">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Basic Info</h4>
        </div>
        <div class="panel-body">
         <div class="form-group">
          <label for="call-name" class="col-sm-2 control-label">        
            <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
            Call Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="call_name" id="call-name" placeholder="...">
            </div>
          </div><!--end call-name-->

          <div class="form-group">
            <label for="registered-name" class="col-sm-2 control-label">
              <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
              Reg'd Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="registered_name" id="registered-name" placeholder="...">
              </div>
            </div><!--end registered-name-->   

            <div class="form-group">
              <label for="sex" class="col-sm-2 control-label">
                <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                Sex</label>
                <div class="col-sm-10">
                  <select name="sex" class="form-control select">
                    <option></option>
                    @foreach ($domain['sexes'] as $sex)          
                    <option value="{{$sex['sex']}}">{{$sex['sex']}}</option>
                    @endforeach
                  </select>           
                </div>        
              </div><!--end sex-->   

              <div class="form-group">
                <label for="color-name" class="col-sm-2 control-label">Color</label>
                <div class="col-sm-10">       
                  <input type="text" name="color" class="form-control" placeholder="...">
                </div>                
              </div><!--end color-name-->

              <div class="form-group">
                <label for="phenotype-name" class="col-sm-2 control-label">Phenotype</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="phenotype" id="phenotype" placeholder="...">
                </div>
              </div><!--end phenotype-name-->

              <div class="form-group">
                <label for="grade" class="col-sm-2 control-label">Grade</label>
                <div class="col-sm-10">
                  <select name="grade" class="form-control select">
                    <option></option>
                    @foreach ($domain['grades'] as $grade)          
                    <option value="{{$grade['grade']}}">{{$grade['grade']}}</option>
                    @endforeach
                  </select>
                </div>
              </div><!--end grade-->

              <div class="form-group">
                <label for="stall_path" class="col-sm-2 control-label">
                 <span class="text-info" data-toggle="tooltip" data-placement="left" title="Required">!</span>             
                 Stall Page</label>
                 <div class="col-sm-10">
                  <input type="text" class="form-control" name="stall_path" id="stall page" placeholder="www">
                </div>
              </div><!--end stall page-->

            </div><!--end panel-body-->
          </div><!--end panel-->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">People</h4>
            </div>
            <div class="panel-body">

              <div class="form-group">
                <label for="owner-name" class="col-sm-2 control-label">
                  <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                  Owner</label>
                  <div class="col-sm-10">       
                    <select name="owner" class="form-control select">
                      <option></option>
                      @foreach ($domain['person'] as $person)          
                      <option value="{{$person['username']}}">{{$person['username']}}</option>
                      @endforeach
                    </select>
                  </div>                
                </div><!--end owner-name-->

                <div class="form-group">
                  <label for="breeder-name" class="col-sm-2 control-label">Breeder</label>
                  <div class="col-sm-10">
                   <select name="breeder" class="form-control select">
                    <option></option>
                    @foreach ($domain['person'] as $person)          
                    <option value="{{$person['username']}}">{{$person['username']}}</option>
                    @endforeach
                  </select>
                </div>
              </div><!--end breeder-name-->

              <div class="form-group">
                <label for="hexer-name" class="col-sm-2 control-label">Hexer</label>
                <div class="col-sm-10">
                  <select name="hexer" class="form-control select">
                    <option></option>
                    @foreach ($domain['person'] as $person)          
                    <option value="{{$person['username']}}">{{$person['username']}}</option>
                    @endforeach
                  </select>
                </div>
              </div><!--end hexer-name-->
              <div class="text-right">If person not in list, 
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#add-person-quick">
                 Add
               </button>
             </div>
           </div><!--end panel-body-->
         </div><!--end panel-->

         <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Abilities</h4>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="pos-ability-1" class="col-sm-2 control-label">+</label>
              <div class="col-sm-10">
                <select name="pos_ability_1" class="form-control select">
                 <option></option>
                 @foreach ($domain['pos_abilities'] as $pos)          
                 <option value="{{$pos['ability']}}">{{$pos['ability']}}: {{$pos['description']}}</option>
                 @endforeach     
               </select>           
             </div>  
           </div><!--end pos_ability_1-->  

           <div class="form-group">
            <label for="pos-ability-2" class="col-sm-2 control-label">+</label>
            <div class="col-sm-10">
              <select name="pos_ability_2" class="form-control select">
               <option></option>
               @foreach ($domain['pos_abilities'] as $pos)          
               <option value="{{$pos['ability']}}">{{$pos['ability']}}: {{$pos['description']}}</option>
               @endforeach   
             </select>           
           </div>  
         </div><!--end pos_ability_2-->  

         <div class="form-group">
          <label for="neg-ability-1" class="col-sm-2 control-label">-</label>
          <div class="col-sm-10">
            <select name="neg_ability_1" class="form-control select">
             <option></option>
             @foreach ($domain['neg_abilities'] as $neg)          
             <option value="{{$neg['ability']}}">{{$neg['ability']}}: {{$neg['description']}}</option>
             @endforeach   
           </select>           
         </div>  
       </div><!--end neg_ability_1-->  


     </div><!--end panel-body-->
   </div><!--end panel-->

   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Distance (furlongs)</h4>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-8">
          <div class="form-group">
            <label for="distance-min" class="col-sm-3 control-label">Min</label>    
            <div class="col-sm-9">
              <input type="text" name="distance_min" class="form-control" placeholder="0">
            </div>
          </div><!--end distance--> 

          <div class="form-group">
            <label for="distance-min" class="col-sm-3 control-label">Max</label>    
            <div class="col-sm-9">
              <input type="text" name="distance_max" class="form-control" placeholder="0">
            </div>
          </div> <!--end distance--> 
        </div><!--end col-->

        <div class="col-sm-4">
          <ul>
           <li><b>5 – 7.5:</b> Sprinter</li>
           <li><b>7.5 – 9.5:</b> Middle / Common </li>
           <li><b>10 – 12:</b> Classic </li>
           <li><b>12 – 16:</b> Router / Marathoner</li>
         </ul>
         
       </div><!--end col-->
     </div><!--end row-->


   </div><!--end panel-body-->
 </div><!--end panel-->

 
 <div class="row">
  <div class="col-sm-offset-4 col-sm-4">
    <div class="text-center form-group"> 
      <button type="submit" class="btn-lg btn-block btn btn-default">Add</button>    
    </div>
  </div><!--end col-->
</div><!--end row-->

</div><!--end col-->

<div class="col-md-3">

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Stats</h4>
    </div>
    <div class="panel-body">

      <div class="form-group">
        <label for="speed" class="col-sm-2 col-md-6 control-label">Speed</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="speed" class="form-control" placeholder="0">
        </div>                
      </div><!--end speed-->

      <div class="form-group">
        <label for="staying" class="col-sm-2 col-md-6 control-label">Staying</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="staying" class="form-control" placeholder="0">
        </div>                
      </div><!--end staying-->

      <div class="form-group">
        <label for="stamina" class="col-sm-2 col-md-6 control-label">Stamina</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="stamina" class="form-control" placeholder="0">
        </div>                
      </div><!--end stamina-->

      <div class="form-group">
        <label for="breaking" class="col-sm-2 col-md-6 control-label">Breaking</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="breaking" class="form-control" placeholder="0">
        </div>                
      </div><!--end breaking-->

      <div class="form-group">
        <label for="power" class="col-sm-2 col-md-6 control-label">Power</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="power" class="form-control" placeholder="0">
        </div>                
      </div><!--end power-->

      <div class="form-group">
        <label for="feel" class="col-sm-2 col-md-6 control-label">Feel</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="feel" class="form-control" placeholder="0">
        </div>                
      </div><!--end feel-->

      <div class="form-group">
        <label for="fierce" class="col-sm-2 col-md-6 control-label">Fierce</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="fierce" class="form-control" placeholder="0">
        </div>                
      </div><!--end fierce-->

      <div class="form-group">
        <label for="tenacity" class="col-sm-2 col-md-6 control-label">Tenacity</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="tenacity" class="form-control" placeholder="0">
        </div>                
      </div><!--end tenacity-->

      <div class="form-group">
        <label for="courage" class="col-sm-2 col-md-6 control-label">Courage</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="courage" class="form-control" placeholder="0">
        </div>                
      </div><!--end courage-->

      <div class="form-group">
        <label for="response" class="col-sm-2 col-md-6 control-label">Response</label>
        <div class="col-sm-10 col-md-6">       
          <input type="text" name="response" class="form-control" placeholder="0">
        </div>                
      </div><!--end response-->

    </div><!--end panel-body-->
  </div><!--end panel-->


  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Surface Preferences</h4>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="surface-dirt" class="col-sm-2 control-label">Dirt</label>
        <div class="col-sm-10">
          <select name="surface_dirt" class="form-control select">
           <option></option>
           <option value="Okay">Okay</option>
           <option value="Good">Good</option>
           <option value="Great">Great</option>
         </select>           
       </div>  
     </div><!--end surface-dirt--> 

     <div class="form-group">
      <label for="surface-turf" class="col-sm-2 control-label">Turf</label>
      <div class="col-sm-10">             
        <select name="surface_turf" class="form-control select">
         <option></option>
         <option value="Okay">Okay</option>
         <option value="Good">Good</option>
         <option value="Great">Great</option>
       </select>              
     </div>
   </div><!--end surface-turf-->  
 </div><!--end panel-body-->
</div><!--end panel-->

<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">Other</h4>
  </div>
  <div class="panel-body">

    <div class="form-group">
      <label for="leg-type" class="col-sm-2 col-md-6 control-label">Leg Type</label>
      <div class="col-sm-10 col-md-6">
        <select name="leg_type" class="form-control select">
         <option></option>
         @foreach ($domain['leg_types'] as $leg)          
         <option value="{{$leg['type']}}">{{$leg['type']}}</option>
         @endforeach
       </select>
     </div>
   </div><!--end leg-type-->

   <div class="form-group">
    <label for="neck-height" class="col-sm-2 col-md-6 control-label">Neck Height</label>
    <div class="col-sm-10 col-md-6">             
      <select name="neck_height" class="form-control select">
       <option></option>
       <option value="Normal">Normal</option>
       <option value="High">High</option>
     </select>              
   </div>
 </div><!--end neck-height-->

 <div class="form-group">
  <label for="run-style" class="col-sm-2 col-md-6 control-label">Run Style</label>
  <div class="col-sm-10 col-md-6">             
    <select name="run_style" class="form-control select">
     <option></option>
     <option value="Normal">Normal</option>
     <option value="Leg Lift">Leg Lift</option>
   </select>              
 </div>
</div><!--end run-style-->

<div class="form-group">
  <label for="bandages" class="col-sm-2 col-md-6 control-label">Bandages</label>
  <div class="col-sm-10 col-md-6">             
    <select name="bandages" class="form-control select">
     <option></option>
     <option value="Both">Both</option>
     <option value="Front">Front</option>
     <option value="Back">Back</option>
     <option value="None">None</option>
   </select>              
 </div>
</div><!--end bandages-->  

<div class="form-group">
  <label for="hood" class="col-sm-2 col-md-6 control-label">Hood</label>
  <div class="col-sm-10 col-md-6">             
    <select name="hood" class="form-control select">
      <option></option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>              
  </div>
</div><!--end hood-->

<div class="form-group">
  <label for="shadow-roll" class="col-sm-2 col-md-6 control-label">Shadow Roll</label>
  <div class="col-sm-10 col-md-6">             
    <select name="shadow_roll" class="form-control select">
     <option></option>
     <option value="Yes">Yes</option>
     <option value="No">No</option>
   </select>              
 </div>
</div><!--end shadow-roll-->
</div><!--end panel-body-->
</div><!--end panel-->

</div><!--end col-->
</div><!--end row-->



</form>

@endsection