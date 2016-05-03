  <div class="form-group">
    <label for="sire" class="col-sm-3 control-label">
      <small>
        <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
      </small>
      Sire
    </label>
    <div class="col-sm-9">
      <select name="sire_id" class="form-control">
        <option></option>
        @foreach ($options['sires'] as $s)          
        <option value="{{$s['id']}}" @if($sire['id'] == $s['id']) selected @endif>{{$s['call_name']}}</option>
        @endforeach        
      </select>           
    </div>        
  </div><!--end sire--> 

  <div class="form-group">
    <label for="dam" class="col-sm-3 control-label">
      <small>
        <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
      </small>
      Dam
    </label>
    <div class="col-sm-9">
      <select name="dam_id" class="form-control">
        <option></option>
        @foreach ($options['dams'] as $d)          
        <option value="{{$d['id']}}" @if($dam['id'] == $d['id']) selected @endif>{{$d['call_name']}}</option>
        @endforeach
      </select>           
    </div>        
  </div><!--end dam--> 

  <div class="form-group">
    <label for="horse" class="col-sm-3 control-label">
      <small>
        <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
      </small>
      Offpsring
    </label>
    <div class="col-sm-9">
      <select name="horse_id" class="form-control" >
        <option></option>
        @foreach ($options['horses'] as $h)          
        <option value="{{$h['id']}}" @if($horse['id'] == $h['id']) selected @elseif($horse['id'] != $h['id'] and $horse['id']) disabled @endif>{{$h['call_name']}}</option>
        @endforeach
      </select>           
    </div>
  </div><!--end horse-->
