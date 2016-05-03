<form class="form-horizontal" method="post" action="/lineage-table">
 <div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">Filter</h3></div><!--end heading-->
      <div class="panel-body">

        <div class="col-sm-6">
         <div class="form-group">
           <label for="ancestors_of" class="col-sm-3 control-label">Ancestors of</label>
           <div class="col-sm-9">
            <select name="ancestors_of" class="form-control" id="ancestors_of">
              <option value="0">All</option>
              @foreach ($domain['horses'] as $h)          
              <option @if($ancestors_of == $h['id']) selected @endif value="{{$h['id']}}">{{$h['call_name']}}</option>
              @endforeach
            </select>           
          </div><!--end col-->        
        </div><!--end ancestors_of-->
      </div><!--end col-->

      <div class="col-sm-6">
       <div class="form-group">
         <label for="descendants_of" class="col-sm-3 control-label">Descendants of</label>
         <div class="col-sm-9">
          <select name="descendants_of" class="form-control" id="descendants_of">
            <option value="0">All</option>
            @foreach ($domain['horses'] as $h)          
            <option @if($descendants_of == $h['id']) selected @endif value="{{$h['id']}}">{{$h['call_name']}}</option>
            @endforeach
          </select>           
        </div><!--end col-->        
      </div><!--end descendants_of-->
    </div><!--end col-->

  </div><!--end panel content-->    
  <div class="panel-footer">
    <div class="text-right"> 
      <button type="reset" class="btn btn-default btn-sm">Reset</button> 
      <button type="submit" class="btn btn-primary btn-sm">Save</button> 
    </div>
  </div><!--end footer-->

</div><!--end panel--> 
</div><!--end col-->
</div><!--end row-->
</form>