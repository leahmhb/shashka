@include('includes.modal')

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="add-race-quick_Label">Add Race</h4>
  </div>
  
  <div class="modal-body">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
      <label for="race-name" class="control-label">
        <small>
          <span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span>
        </small>
        Name
      </label>
      <input type="text" class="form-control" name="name" placeholder="...">
    </div><!--end race-name-->


    <div class="form-group">
      <label for="distance" class="control-label">
        <small>
          <span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span>
        </small>
        Distance
      </label> 
      <div class="input-group">
        <input type="number" name="distance" class="form-control" placeholder="0" step="any" min="0">
        <span class="input-group-addon">Furlongs</span>
      </div> 
    </div><!--end distance-->

    <div class="form-group">
      <label for="surface" class="control-label">
        <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
        Surface
      </label>
      <br>
      <label class="radio-inline">
        <input type="radio" name="surface" value="Dirt">
        Dirt
      </label>
      <label class="radio-inline">
        <input type="radio" name="surface" value="Turf">
        Turf
      </label>  
    </div><!--end surface-->     

    <div class="form-group">
      <label for="grade" class="control-label">
        <small>
          <span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span>
        </small>
        Grade
      </label>
      <select name="grade" class="form-control">
        <option></option>
        @foreach ($domain['grades'] as $grade)          
        <option value="{{$grade['grade']}}">{{$grade['grade']}}</option>
        @endforeach
      </select>
    </div><!--end grade-->    

    <div class="form-group">
      <label for="url" class="control-label">URL</label>
      <input type="text" name="url" class="form-control" placeholder="www">
    </div><!--end url-->

  </div>

