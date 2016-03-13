  <div class="modal fade" id="add-horse-quick" tabindex="-1" role="dialog" aria-labelledby="add-horse-quick_Label">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
         <div class="panel panel-default">
          <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="add-horse-quick_Label">Add Horse Quick</h4>
          </div>          
        </div>
        <div class="modal-body">
          <form id="add-horse" class="form" role="form">
            <div class="panel-body">
             <div class="form-group">
              <label for="call-name" class="control-label">
               <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
               Call Name</label>               
               <input type="text" class="form-control" name="call_name" id="call-name" placeholder="...">
             </div><!--end call-name-->

             <div class="form-group">
              <label for="registered-name" class="control-label">
               <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
               Reg'd Name</label>
               <input type="text" class="form-control" name="registered_name" id="registered-name" placeholder="...">
             </div><!--end registered-name-->   

             <div class="form-group">
              <label for="sex" class="control-label">
               <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
               Sex</label>
               <select name="sex" class="form-control select">
                <option></option>
                @foreach ($domain['sexes'] as $sex)          
                <option value="{{$sex['sex']}}">{{$sex['sex']}}</option>
                @endforeach
              </select>           
            </div><!--end sex-->   

            <div class="form-group">
              <label for="stall_path" class="control-label">
                <span class="text-info tooltip-overflow" data-toggle="tooltip" data-placement="left" title="Required">!</span>
                Stall Page</label>
                <input type="text" class="form-control" name="stall_path" id="stall page" placeholder="www">
              </div><!--end stall page-->

              <div class="form-group">
                <label for="owner-name" class="control-label">
                 <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                 Owner</label>
                 <select name="owner" class="form-control select">
                  <option></option>
                  @foreach ($domain['person'] as $person)          
                  <option value="{{$person['username']}}">{{$person['username']}}</option>
                  @endforeach
                </select>
              </div><!--end owner-name-->

            </div><!--end panel-body-->
          </div><!--end panel-->

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div><!--end add horse-->

<div class="modal fade" id="add-person-quick" tabindex="-1" role="dialog" aria-labelledby="add-person-quick_Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="panel panel-default">
          <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="add-person-quick_Label">Add Person Quick</h4>
          </div>
        </div>
        <div class="modal-body">
          <form id="add-person" class="form form-horizontal" role="form">
            <div class="panel-body">     

              <div class="form-group">
                <label for="person_name" class="col-sm-3 control-label">
                  <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                  Username</label>
                  <div class="col-sm-9">
                    <input name="username" class="form-control" id="person_name" placeholder="...">              
                  </div>             
                </div><!--end username-->       

                <div class="form-group">
                  <label for="person_name" class="col-sm-3 control-label">
                   <span class="text-info" data-toggle="tooltip" data-placement="left" title="Required">!</span>        
                   Stable Name</label>
                   <div class="col-sm-9">       
                    <input name="stable_name" class="form-control" id="person_stable_name" placeholder="...">         
                  </div>             
                </div><!--end stable name--> 

                <div class="form-group">
                  <label for="person_name" class="col-sm-3 control-label">
                   <span class="text-info" data-toggle="tooltip" data-placement="left" title="Required">!</span>        
                   Stable Prefix</label>
                   <div class="col-sm-9"> 
                    <input name="stable_prefix" class="form-control" id="person_stable_prefix" placeholder="...">   
                  </div>             
                </div><!--end stable prefix--> 

              </div><!--end panel-body-->
            </div><!--end panel--> 

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div><!--end add person-->


  <div class="modal fade" id="add-race-quick" tabindex="-1" role="dialog" aria-labelledby="add-race-quick_Label">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
         <div class="panel panel-default">
           <div class="panel-heading"> 
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="add-race-quick_Label">Add Race Quick</h4>
          </div>
        </div>
        <div class="modal-body">
          <form id="add-race" class="form form-horizontal" role="form">

            <div class="panel-body">               
              <div class="form-group">
                <label for="race-name" class="col-sm-3 control-label">
                  <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                  Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="name" placeholder="...">
                  </div>
                </div><!--end race-name-->


                <div class="form-group">
                  <label for="surface" class="col-sm-3 control-label">
                    <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                    Surface</label>
                    <div class="col-sm-9">             
                      <label class="radio-inline">
                        <input type="radio" name="surface" id="dirt" value="Dirt">
                        Dirt
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="surface" id="turf" value="Turf" checked>
                        Turf
                      </label>  
                    </label>              
                  </div>
                </div><!--end surface-->          

                <div class="form-group">
                  <label for="distance" class="col-sm-3 control-label">
                    <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                    Distance</label>            
                    <div class="col-sm-9"> 
                      <div class="input-group">
                        <input type="text" name="distance" class="form-control" placeholder="0">
                        <span class="input-group-addon">Furlongs</span>
                      </div> 
                    </div> 
                  </div><!--end distance-->


                  <div class="form-group">
                    <label for="grade" class="col-sm-3 control-label">
                      <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                      Grade</label>
                      <div class="col-sm-9">
                        <select name="grade" class="form-control select">
                          <option></option>
                          @foreach ($domain['grades'] as $grade)          
                          <option value="{{$grade['grade']}}">{{$grade['grade']}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!--end grade-->    


                    <div class="form-group">
                      <label for="url" class="col-sm-3 control-label">
                        <span class="text-danger" data-toggle="tooltip" data-placement="left" title="Required">*</span>
                        URL</label>            
                        <div class="col-sm-9">         
                          <input type="text" name="url" class="form-control" placeholder="www">
                        </div> 
                      </div><!--end url-->

                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
    </div><!--end add race-->