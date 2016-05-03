@extends('layouts.master', ['title' => 'People Tables'])
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-body">
         <blockquote>
           <ul>
             <li>
               Click table headers to sort by column or use search box to find records.
             </li>
             <li>
              After you register your account and create your <a href="{{ URL::route('person') }}">Person information</a>, message Haubing for horse add/edit permissions.
            </li>
          </ul>
        </blockquote>
      </div><!--end panel body-->
    </div><!--end panel-->
  </div><!--end col-->
</div><!--end row-->

<div class="row">
  <div class="col-sm-9">
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        Person
      </h3>
    </div><!--end heading-->
    <div class="panel-body">

      <table id="t_person" class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th><small>Stable</small></br>Name</th>
            <th><small>Stable</small></br>Prefix</th>
            <th><small>Racing</small></br>Colors</th>            
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($person as $p)        
          <tr>
            <td>@if($p['user_id']) {{$p['user_id']}} @else N @endif</td>
            <td>{{$p['username']}}</td>
            <td>
              <a href="{{ URL::route('horse_table', $p['id']) }}">
                <small>{{$p['stable_name']}}</small>
              </a>
            </td>
            <td>{{$p['stable_prefix']}}</td>
            <td><small>{{$p['racing_colors']}}</small></td>            
            <td align="right">    
              <div class="list_controls">         
               <a class="icon-link" href="{{ URL::route('person', $p["id"]) }}">
                 <i class="fa fa-pencil text-info fa-lg" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Edit"></i>
               </a> 
               <a class="icon-link" href="{{ URL::route('remove_person', $p["id"]) }}">
                <i class="fa fa-trash-o text-danger fa-lg" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Remove"></i>
              </a>    
            </div>          
          </td>
        </tr>
        @endforeach   
      </tbody>
    </table>
  </div><!--end panel body-->    
</div><!--end panel--> 
</div><!--end col-->
<div class="col-sm-3">
  <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">
      Users
    </h3>
  </div><!--end heading-->
  <div class="panel-body">
   <table id="t_users" class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $i=>$u)     
      <tr>
       <td>{{ $u['id'] }} </td>
       <td>{{ $u['name'] }} </td>            
     </tr>         
     @endforeach
   </tbody>
 </table>
</div><!--end panel body-->    
</div><!--end panel--> 
</div><!--end col-->
</div><!--end row-->
</div><!--end container-->
@endsection