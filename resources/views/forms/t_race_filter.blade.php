<form id="race-filter" class="form-horizontal" method="post" action="/race-table">
 <div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">Filter</h3></div><!--end heading-->
      <div class="panel-body">

        <div class="col-sm-6">
          <div class="form-group">
            <label for="race" class="col-sm-2 control-label">Grade</label>
            <div class="col-sm-10">       
              <select name="grade" class="form-control" id="grade">
                <option value="0">All</option>        
                @foreach ($domain['grade'] as $g)          
                <option @if($grade == $g['id']) selected @endif value="{{$g['id']}}"> {{ $g['description'] }} </option>
                @endforeach         
              </select>
            </div><!--end col-->                
          </div><!--end grade-->
        </div><!--end col-->

        <div class="col-sm-6">
         <div class="form-group">
          <label for="surface" class="col-sm-2 control-label">Surface</label>
          <div class="col-sm-10">
            <select name="surface" class="form-control" id="surface">    
              <option value="0">All</option>        
              @foreach ($domain['surface'] as $s)          
              <option @if($surface == $s['id']) selected @endif value="{{$s['id']}}"> {{ $s['value'] }} </option>
              @endforeach    
            </select>
          </div><!--end col-->
        </div><!--end surface-->
      </div><!--end col-->

      <div class="col-sm-6">
       <div class="form-group">
         <label for="series" class="col-sm-2 control-label">Series</label>
         <div class="col-sm-10">
          <select name="series" class="form-control" id="series">
            <option value="0">All</option>
            @foreach ($domain['series'] as $s)          
            <option @if($series == $s['id']) selected @endif value="{{$s['id']}}">{{$s['description']}}</option>
            @endforeach
          </select>           
        </div><!--end col-->        
      </div><!--end series-->
    </div><!--end col-->

    <div class="col-sm-6">
      <div class="form-group">
        <label for="distance" class="col-sm-2 control-label">Distance</label>
        <div class="col-sm-10">       
          <select name="distance" class="form-control" id="distance">     
            @for ($i = 5; $i < 20; $i++)
              <option value="{{$i}}" @if($distance == $i) selected @endif>
                @if($i == 5)
                All
                @else
                {{ $i }}F
                @endif   
              </option>         
              @endfor      
          </select>
        </div><!--end col-->                
      </div><!--end distance-->
    </div><!--end col-->

  </div><!--end panel content-->    
  <div class="panel-footer">
    <div class="text-right"> 
      <button id="t_race_filter_reset" type="reset" class="btn btn-default btn-sm">Reset</button> 
      <button type="submit" class="btn btn-primary btn-sm">Save</button> 
    </div>
  </div><!--end footer-->

</div><!--end panel--> 
</div><!--end col-->
</div><!--end row-->
</form>