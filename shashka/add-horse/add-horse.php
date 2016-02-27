
<?php include_once("../includes/head.php"); ?>   

<div id="page-content" class="container">   
  <div class="page-header"><h1>Add Horse <small>New Additions</small></h1></div>
  <form id="add-horse" class="form-horizontal" method="post">

    <div class="col-sm-3">

      <div class="form-group">
        <label for="call-name" class="col-sm-3 control-label">Call Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control chosen-select" name="call-name" id="call-name" placeholder="Riparian">
        </div>
      </div><!--end call-name-->

      <div class="form-group">
        <label for="registered-name" class="col-sm-3 control-label">Registered Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control chosen-select" name="registered-name" id="registered-name" placeholder="Lesson's Learned">
        </div>
      </div><!--end registered-name-->

      <div class="form-group">
        <label for="owner-name" class="col-sm-3 control-label">Owner</label>
        <div class="col-sm-9">       
          <input type="text" name="owner" class="form-control chosen-select" placeholder="Haubing">
        </div>                
      </div><!--end owner-name-->

      <div class="form-group">
        <label for="breeder-name" class="col-sm-3 control-label">Breeder</label>
        <div class="col-sm-9">
          <input type="text" class="form-control chosen-select" name="breeder" id="breeder" placeholder="Neco">
        </div>
      </div><!--end breeder-name-->

      <div class="form-group">
        <label for="hexer-name" class="col-sm-3 control-label">Hexer</label>
        <div class="col-sm-9">
          <input type="text" class="form-control chosen-select" name="hexer" id="hexer" placeholder="Neco">
        </div>
      </div><!--end hexer-name-->

      <div class="form-group">
        <label for="sex" class="col-sm-3 control-label">Sex</label>
        <div class="col-sm-9">
          <select name="sex" class="form-control chosen-select">
           <option></option>
           <option value="stallion">Stallion</option>
           <option value="mare">Mare</option>
           <option value="gelding">Gelding</option>
         </select>           
       </div>        
     </div><!--end sex-->   

     <div class="form-group">
      <label for="grade" class="col-sm-3 control-label">Grade</label>
      <div class="col-sm-9">
        <select name="grade" class="form-control chosen-select">
          <option></option>
          <option value="open-level">Open Level</option>
          <option value="giii">GIII</option>
          <option value="gii">GII</option>
          <option value="gi">GI</option>
        </select>
      </div>
    </div><!--end grade-->
  </div><!--end col-->

  <div class="col-sm-2">
    <div class="form-group">
      <label for="speed" class="col-sm-6 control-label">Speed</label>
      <div class="col-sm-6">       
        <input type="text" name="speed" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end speed-->

    <div class="form-group">
      <label for="staying" class="col-sm-6 control-label">Staying</label>
      <div class="col-sm-6">       
        <input type="text" name="staying" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end staying-->

    <div class="form-group">
      <label for="stamina" class="col-sm-6 control-label">Stamina</label>
      <div class="col-sm-6">       
        <input type="text" name="stamina" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end stamina-->

    <div class="form-group">
      <label for="breaking" class="col-sm-6 control-label">Breaking</label>
      <div class="col-sm-6">       
        <input type="text" name="breaking" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end breaking-->

    <div class="form-group">
      <label for="power" class="col-sm-6 control-label">Power</label>
      <div class="col-sm-6">       
        <input type="text" name="power" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end power-->

    <div class="form-group">
      <label for="feel" class="col-sm-6 control-label">Feel</label>
      <div class="col-sm-6">       
        <input type="text" name="feel" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end feel-->

    <div class="form-group">
      <label for="fierce" class="col-sm-6 control-label">Fierce</label>
      <div class="col-sm-6">       
        <input type="text" name="fierce" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end fierce-->

    <div class="form-group">
      <label for="tenacity" class="col-sm-6 control-label">Tenacity</label>
      <div class="col-sm-6">       
        <input type="text" name="tenacity" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end tenacity-->

    <div class="form-group">
      <label for="courage" class="col-sm-6 control-label">Courage</label>
      <div class="col-sm-6">       
        <input type="text" name="courage" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end courage-->

    <div class="form-group">
      <label for="response" class="col-sm-6 control-label">Response</label>
      <div class="col-sm-6">       
        <input type="text" name="response" class="form-control chosen-select" placeholder="50">
      </div>                
    </div><!--end response-->
  </div><!--end col-->

  <div class="col-sm-4">
    <div class="form-group">
      <label for="distance-min" class="col-sm-3 control-label">Min Distance</label>    
      <div class="input-group">
        <input type="text" name="distance-min" class="form-control chosen-select" placeholder="8">
        <span class="input-group-addon">F</span>
      </div>
    </div><!--end distance--> 

    <div class="form-group">
      <label for="distance-min" class="col-sm-3 control-label">Max Distance</label>    
      <div class="input-group">
        <input type="text" name="distance-max" class="form-control chosen-select" placeholder="12">
        <span class="input-group-addon">F</span>
      </div>
    </div> <!--end distance--> 

    <div class="form-group">
      <label for="leg-type" class="col-sm-3 control-label">Leg Type</label>
      <div class="col-sm-9">
        <select name="leg-type" class="form-control chosen-select">
         <option></option>
         <option value="front-runner">Front Runner</option>
         <option value="stalker">Stalker</option>
         <option value="follower">Follower</option>
         <option value="closer">Closer</option>
       </select>
     </div>
   </div><!--end leg-type-->


   <div class="form-group">
    <label for="pos_ability_1" class="col-sm-3 control-label">Positive Ability 1</label>
    <div class="col-sm-9">
      <select name="pos_ability_1" class="form-control chosen-select">
       <option></option>
       <option value="ok">Ability Name - Description</option>         
     </select>           
   </div>  
 </div><!--end pos_ability_1-->  

 <div class="form-group">
  <label for="pos_ability_2" class="col-sm-3 control-label">Positive Ability 2</label>
  <div class="col-sm-9">
    <select name="pos_ability_2" class="form-control chosen-select">
     <option></option>
     <option value="ok">Ability Name - Description</option>         
   </select>           
 </div>  
</div><!--end pos_ability_2-->  


<div class="form-group">
  <label for="neg_ability_1" class="col-sm-3 control-label">Negative Ability 1</label>
  <div class="col-sm-9">
    <select name="neg_ability_1" class="form-control chosen-select">
     <option></option>
     <option value="ok">Ability Name - Description</option>         
   </select>           
 </div>  
</div><!--end neg_ability_1-->  
</div><!--end col-->

<div class="col-sm-3">
  <div class="form-group">
    <label for="surface-dirt" class="col-sm-3 control-label">Dirt Surface</label>
    <div class="col-sm-9">
      <select name="surface-dirt" class="form-control chosen-select">
       <option></option>
       <option value="ok">Okay</option>
       <option value="good">Good</option>
       <option value="great">Great</option>
     </select>           
   </div>  
 </div><!--end surface-dirt-->   

 <div class="form-group">
  <label for="surface-turf" class="col-sm-3 control-label">Turf Surface</label>
  <div class="col-sm-9">             
    <select name="surface-turf" class="form-control chosen-select">
     <option></option>
     <option value="ok">Okay</option>
     <option value="good">Good</option>
     <option value="great">Great</option>
   </select>              
 </div>
</div><!--end surface-turf-->  

<div class="form-group">
  <label for="neck-height" class="col-sm-3 control-label">Neck Height</label>
  <div class="col-sm-9">             
    <select name="neck-height" class="form-control chosen-select">
     <option></option>
     <option value="normal">Normal</option>
     <option value="high">High</option>
   </select>              
 </div>
</div><!--end neck-height-->

<div class="form-group">
  <label for="run-style" class="col-sm-3 control-label">Run Style</label>
  <div class="col-sm-9">             
    <select name="run-style" class="form-control chosen-select">
     <option></option>
     <option value="normal">Normal</option>
     <option value="leg-lift">Leg Lift</option>
   </select>              
 </div>
</div><!--end run-style-->

<div class="form-group">
  <label for="bandages" class="col-sm-3 control-label">Bandages</label>
  <div class="col-sm-9">             
    <select name="bandages" class="form-control chosen-select">
     <option></option>
     <option value="front">Front</option>
     <option value="back">Back</option>
     <option value="both">Both</option>
     <option value="none">None</option>
   </select>              
 </div>
</div><!--end bandages-->  

<div class="form-group">
  <label for="hood" class="col-sm-3 control-label">Hood</label>
  <div class="col-sm-9">             
    <select name="hood" class="form-control chosen-select">
      <option></option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>              
  </div>
</div><!--end hood-->

<div class="form-group">
  <label for="shadow-roll" class="col-sm-3 control-label">Shadow Roll</label>
  <div class="col-sm-9">             
    <select name="shadow-roll" class="form-control chosen-select">
     <option></option>
     <option value="yes">Yes</option>
     <option value="no">No</option>
   </select>              
 </div>
</div><!--end shadow-roll-->
</div><!--end col-->

<div class="form-group">    
  <button name="add" type="submit" class="pull-right btn-lg btn btn-primary">+ Add Horse</button>      
</div>
</form>

</div> <!-- /container -->
<?php include_once("../includes/foot.php"); ?>      
    <script>
     $(document).ready(function () {
       $(".chosen-select").chosen({
        width: "95%",
        placeholder_text_single: "Select.."
      });//end chosen 
   });//end ready
 </script>