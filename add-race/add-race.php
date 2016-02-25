
 <?php include_once("../includes/head.php"); ?>  
    


  <div id="page-content" class="container">   
    <div class="page-header"><h1>Add Race <small>New Records</small></h1></div>

    <form id="add-race" class="form-horizontal" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="form-group">
        <label for="race-name" class="col-sm-3 control-label">Race Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="race-name" id="race-name" placeholder="Belmont Stakes">
        </div>
      </div><!--end race-name-->

      <div class="form-group">
        <label for="date" class="col-sm-3 control-label">Date</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" name="date" id="date" placeholder="2016-03-05">
        </div>
      </div><!--end date-->

      <div class="form-group">
        <label for="distance" class="col-sm-3 control-label">Prize Money</label>            
        <div class="col-sm-9"> 
          <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" name="prize-money" class="form-control" placeholder="10000">        
          </div> 
        </div> 
      </div> <!--end prize-money-->

      <div class="form-group">
        <label for="surface" class="col-sm-3 control-label">Surface</label>
        <div class="col-sm-9">             
          <label class="radio-inline">
            <input type="radio" name="surface" id="dirt" value="dirt">
            Dirt
          </label>
          <label class="radio-inline">
            <input type="radio" name="surface" id="turf" value="turf" checked>
            Turf
          </label>  
        </label>              
      </div>
    </div><!--end surface-->          

    <div class="form-group">
      <label for="distance" class="col-sm-3 control-label">Distance</label>            
      <div class="col-sm-9"> 
        <div class="input-group">
          <input type="text" name="distance" class="form-control" placeholder="12">
          <span class="input-group-addon">Furlongs</span>
        </div> 
      </div> 
    </div> <!--end distance-->

    <div class="form-group">
      <label for="entry-one" class="col-sm-3 control-label">Entry 1</label>            
      <div class="col-sm-9">
        <div class="row">
          <div class="col-xs-4">            
            <input type="number" name="entry-one_placement" class="form-control" placeholder="1st">        
          </div> 
          <div class="col-xs-4">         
            <input type="number" name="entry-one_horse-id" class="form-control" placeholder="Horse ID">        
          </div> 
        </div>              
      </div> 
    </div> <!--end entry-one-->

    <div class="form-group">
      <label for="entry-two" class="col-sm-3 control-label">Entry 2</label>            
      <div class="col-sm-9">
        <div class="row">
          <div class="col-xs-4">            
            <input type="number" name="entry-two_placement" class="form-control" placeholder="2nd">        
          </div> 
          <div class="col-xs-4">         
            <input type="number" name="entry-two_horse-id" class="form-control" placeholder="Horse ID">        
          </div> 
        </div>              
      </div> 
    </div> <!--end entry-two-->

    <div class="form-group">
      <label for="entry-three" class="col-sm-3 control-label">Entry 3</label>            
      <div class="col-sm-9">
        <div class="row">
          <div class="col-xs-4">            
            <input type="number" name="entry-three_placement" class="form-control" placeholder="3rd">        
          </div> 
          <div class="col-xs-4">         
            <input type="number" name="entry-three_horse-id" class="form-control" placeholder="Horse ID">        
          </div> 
        </div>              
      </div> 
    </div> <!--end entry-three-->

    <div class="form-group">
      <label for="entry-four" class="col-sm-3 control-label">Entry 4</label>            
      <div class="col-sm-9">
        <div class="row">
          <div class="col-xs-4">            
            <input type="number" name="entry-four_placement" class="form-control" placeholder="4th">        
          </div> 
          <div class="col-xs-4">         
            <input type="number" name="entry-four_horse-id" class="form-control" placeholder="Horse ID">        
          </div> 
        </div>              
      </div> 
    </div> <!--end entry-four-->

    <div class="form-group">
      <label for="entry-five" class="col-sm-3 control-label">Entry 5</label>            
      <div class="col-sm-9">
        <div class="row">
          <div class="col-xs-4">            
            <input type="number" name="entry-five_placement" class="form-control" placeholder="5th">        
          </div> 
          <div class="col-xs-4">         
            <input type="number" name="entry-five_horse-id" class="form-control" placeholder="Horse ID">        
          </div> 
        </div>              
      </div> 
    </div> <!--end entry-five-->


    <div class="form-group">    
      <button type="submit" name="add" class="pull-right btn-lg btn btn-primary">+ Add Race</button>

    </div>
  </form>    

</div> <!-- /container -->


<?php include_once("../includes/foot.php"); ?>      

