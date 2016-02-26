
<?php include_once("../includes/head.php"); ?>   




<div id="page-content" class="container">		
  <div class="page-header"><h1>Horse Name <small>Prefix - Registered Name</small></h1></div>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">
          <ul class="stall-info list-inline text-center">
           <li><b>Color:</b> txt - Phenotype</li>
           <li><b>Sire:</b> <a href="#">Name</a></li>
           <li><b>Dam:</b> <a href="#">Name</a></li>
           <li><b>Grade:</b> txt</li>
         </ul>
       </h3></div>
       <div class="panel-body">
        <img class="stall-pic" src="http://localhost/shashka_old/horses/Riparian.png">
      </div><!--end panel content-->
      <div class="panel-footer">  
       <ul class="stall-info list-inline text-center">
         <li><b>Owner:</b> Name</li>
         <li><b>Breeder:</b> Name</li>
         <li><b>Hexer:</b> Name</li>
       </ul>
     </div><!--end panel footer-->
   </div><!--end panel-->       
 </div><!--end col-->

 <div class="col-sm-6">
  <div class="stall-tabs">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#racing" aria-controls="racing" role="tab" data-toggle="tab">Racing Stats</a></li>
      <li role="presentation" class=""><a href="#records" aria-controls="records" role="tab" data-toggle="tab">Top 5 Records</a></li>
      <li role="presentation" class=""><a href="#progeny" aria-controls="progeny" role="tab" data-toggle="tab">Progeny</a></li>
    </ul>

    <div class="tab-content">
     <div role="tabpanel" class="tab-pane active" id="racing">
       <h2>Racing Statistics</h2>
       <div class="row">        
        <div class="col-sm-3">
          <ul class="stall-info list-unstyled"> 
            <li><b>Speed:</b> 00 </li>
            <li><b>Staying:</b> 00 </li> 
            <li><b>Stamina:</b> 00 </li> 
            <li><b>Breaking:</b> 00 </li> 
            <li><b>Power:</b> 00 </li> 
            <li><b>Feel:</b> 00 </li> 
            <li><b>Fierce:</b> 00 </li> 
            <li><b>Tenacity:</b> 00 </li> 
            <li><b>Courage:</b> 00 </li> 
            <li><b>Response:</b> 00 </li> 
          </ul>
        </div><!--end col-->
        <div class="col-sm-9">
          <ul class="stall-info list-unstyled"> 
            <li><b>Distance:</b> Min F to Max F</li>
            <li><b>Leg Type:</b> <span class="text-capitalize">txt</span></li>
            <li><b>Abilities:</b>
              <ul class="stall-info list-unstyled">
                <li><b>+ Ability / </b><span class="text-lowercase">txt</span></li>         
                <li><b>- Ability / </b><span class="text-lowercase">txt</span></li>
              </ul>
            </li>
            <li><b>Surface:</b>
              <ul class="stall-info list-unstyled">
                <li><b>Dirt-</b> <span class="text-capitalize">txt</span></li>
                <li><b>Turf-</b> <span class="text-capitalize">txt</span></li>
              </ul>
            </li>      
            <li><b>Neck Height:</b><span class="text-capitalize">txt</span></li>
            <li><b>Run Style:</b><span class="text-capitalize">txt</span></li>
            <li><b>Equipment:</b>
              <ul class="stall-info list-unstyled">
                <li><b>Bandages-</b> <span class="text-capitalize">txt</span></li>
                <li><b>Hood-</b> <span class="text-capitalize">txt</span></li>
                <li><b>Shadow Roll-</b> <span class="text-capitalize">txt</span></li>
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

  <h2>Progeny</h2>                          
  <ol>
    <li><a href="#">Name</a> - Sex - <a href="#">Dam/Sire</a></li>
  </ol>
</div><!--end progeny-->


</div><!--end tab content-->

</div><!--end tabs-->


</div><!--end col-->

</div><!--end row-->

</div> <!-- /container -->
<?php include_once("../includes/foot.php"); ?>      
