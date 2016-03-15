@extends('layouts.master')

@section('title', 'Race List')

@section('content')
<div class="page-header"><h1>Race List</h1></div>  
<div class="row">


  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        Open Level
      </h3>
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="col-sm-3">Name</th>
            <th class="col-sm-2">Surface</th>
            <th class="col-sm-3">Distance</th>
            <th class="col-sm-2">Ran Date</th>
            <th class="col-sm-1">Link</th>
            <th class="col-sm-1">Update</th>
          </tr>
        </thead>
        <tbody>
         @foreach($races['Open Level'] as $r)
         <tr>
          <td>{{ $r['name'] }} </td>
          <td>{{ $r['surface'] }} </td>
          <td>{{ $r['distance'] }}F</td>
          <td>{{ $r['ran_dt'] }}</td>
          <td><a class="btn btn-primary btn-sm" href="{{ $r['url'] }}" target="_blank">Link</a></td>
          <td><a class="btn btn-primary btn-sm" href="/update-race/{{ $r['id'] }}">Update</a></td>
        </tr>
        @endforeach   
      </tbody>
    </table>
  </div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->

<div class="row">
  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        GIII
      </h3>
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="col-sm-3">Name</th>
            <th class="col-sm-2">Surface</th>
            <th class="col-sm-3">Distance</th>
            <th class="col-sm-2">Ran Date</th>
            <th class="col-sm-1">Link</th>
            <th class="col-sm-1">Update</th>
          </tr>
        </thead>
        <tbody>
         @foreach($races['GIII'] as $r)
         <tr>
          <td>{{ $r['name'] }} </td>
          <td>{{ $r['surface'] }} </td>
          <td>{{ $r['distance'] }}F</td>
          <td>{{ $r['ran_dt'] }}</td>
          <td><a class="btn btn-primary btn-sm" href="{{ $r['url'] }}" target="_blank">Link</a></td>
          <td><a class="btn btn-primary btn-sm" href="/update-race/{{ $r['id'] }}">Update</a></td>
        </tr>
        @endforeach   
      </tbody>
    </table>
  </div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->

<div class="row">
  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        GII
      </h3>
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="col-sm-3">Name</th>
            <th class="col-sm-2">Surface</th>
            <th class="col-sm-3">Distance</th>
            <th class="col-sm-2">Ran Date</th>
            <th class="col-sm-1">Link</th>
            <th class="col-sm-1">Update</th>
          </tr>
        </thead>
        <tbody>
         @foreach($races['GII'] as $r)
         <tr>
          <td>{{ $r['name'] }} </td>
          <td>{{ $r['surface'] }} </td>
          <td>{{ $r['distance'] }}F</td>
          <td>{{ $r['ran_dt'] }}</td>
          <td><a class="btn btn-primary btn-sm" href="{{ $r['url'] }}" target="_blank">Link</a></td>
          <td><a class="btn btn-primary btn-sm" href="/update-race/{{ $r['id'] }}">Update</a></td>
        </tr>
        @endforeach   
      </tbody>
    </table>
  </div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->

<div class="row">
  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        GI
      </h3>
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <tr>
           <th class="col-sm-3">Name</th>
           <th class="col-sm-2">Surface</th>
           <th class="col-sm-3">Distance</th>
           <th class="col-sm-2">Ran Date</th>
           <th class="col-sm-1">Link</th>
           <th class="col-sm-1">Update</th>
         </tr>
       </thead>
       <tbody>
         @foreach($races['GI'] as $r)
         <tr>
          <td>{{ $r['name'] }} </td>
          <td>{{ $r['surface'] }} </td>
          <td>{{ $r['distance'] }}F</td>
          <td>{{ $r['ran_dt'] }}</td>
          <td><a class="btn btn-primary btn-sm" href="{{ $r['url'] }}" target="_blank">Link</a></td>
          <td><a class="btn btn-primary btn-sm" href="/update-race/{{ $r['id'] }}">Update</a></td>
        </tr>
        @endforeach   
      </tbody>
    </table>
  </div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->
</div><!--end row-->
@endsection