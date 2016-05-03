
<input type="text" readonly class="form-control hidden" name="id" id="id" placeholder="" value="{{ $entry['id'] }}">

<h2><small>Race</small></h2>

<div class="form-group">     
  <label for="race" class="col-sm-3 control-label">
    <small>
      <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
    </small>
    Name
  </label>
  <div class="col-sm-9">
    <select name="race_id" class="form-control">
      <option></option>
      @foreach ($options['races'] as $race)          
      <option @if($race['id'] == $entry['race_id']) selected @endif value="{{$race['id']}}"> 
        {{ $race['series']['description'] }}  
        {{ $race['name'] }}
        {{ $race['surface']['value'] }} 
        {{ $race['distance'] }}F 
        {{ $race['grade']['value'] }} 
      </option>
      @endforeach
    </select>             
  </div>        
</div><!--end race--> 

<h2><small>Entry</small></h2>

<div class="form-group">
  <label for="horse" class="col-sm-3 control-label">
    <small>
      <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
    </small>
    Name
  </label>
  <div class="col-sm-9">
    <select name="horse_id" class="form-control">
      <option></option>
      @foreach ($options['my_horses'] as $h)          
      <option value="{{$h['id']}}" @if($entry['horse_id'] == $h['id']) selected @endif>{{$h['call_name']}}</option>
      @endforeach
    </select>           
  </div>        
</div><!--end horse--> 

<div class="form-group">
  <label for="distance" class="col-sm-3 control-label">
    <small>
      <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
    </small>
    Placing
  </label>            
  <div class="col-sm-9">     
    <input type="number" name="placing" class="form-control" value="{{ $entry['placing'] }}"  placeholder="0" />       
  </div> 
  <span class="form_notes">0 for Unran Races</span>
</div><!--end placing-->
