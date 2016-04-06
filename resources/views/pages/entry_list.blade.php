@extends('layouts.master')

@section('title', 'Entry List')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">    


      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">
          Entries
        </h3>
      </div>

      <div class="panel-body">
        <table id="t_entries" class="table table-hover">
          <thead>
            <tr>
              <th class="col-sm-3">Name</th>         
              <th class="col-sm-1">Placing</th>     
              <th class="col-sm-6">Race - Distance - Surface - Grade</th>          
              <th><i class="fa fa-th-list fa-lg text-primary" aria-hidden="true"></i></th>
              <th><i class="fa fa-pencil fa-lg text-info" aria-hidden="true"></i></th>
              <th><i class="fa fa-trash-o fa-lg text-danger" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody>  
            @foreach($entries as $p=>$e)      
            <tr>
              <td>{{ $e['horse_name'] }}</td>        
              <th>
                @if($e['placing'] != 0) 
                {{ $e['placing'] }} 
                @else 
                TBA 
                @endif
              </th>    
              <td>{{ $e['race_series'] }} <strong>{{ $e['race_name'] }}</strong> {{ $e['race_distance'] }}F {{ $e['race_surface'] }} {{ $e['race_grade'] }}</td>          
              <td>
                <a class="btn btn-default btn-sm" href="{{ $e['url'] }}" target="_blank">
                  <i class="fa fa-th-list fa-lg" aria-hidden="true"></i>
                </a>
              </td>
              <td>
                <a class="btn btn-info btn-sm" href="/race-entry/{{ $e['horse_id'] }}/{{ $e['id'] }}">
                  <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
                </a>
              </td>
              <td>
                <a class="btn btn-danger btn-sm" href="/remove-entry/{{ $e['id'] }}">
                 <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
               </a>
             </td>
           </tr>      
           @endforeach           
         </tbody>
       </table> 
     </div><!--end panel content-->    
   </div><!--end panel-->   

 </div><!--end col-->
</div><!--end row-->
</div><!--end container-->


@endsection