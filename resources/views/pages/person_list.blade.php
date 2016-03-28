@extends('layouts.master')

@section('title', 'Person List')

@section('content')
<div class="page-header"><h1>Person List</h1></div>  
<div class="row">


  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        People
      </h3>
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="col-sm-2">Username</th>
            <th class="col-sm-3">Stable Name</th>
            <th class="col-sm-2">Stable Prefix</th>
            <th class="col-sm-3">Racing Colors</th>
            <th class="col-sm-1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
            <th class="col-sm-1"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
          </tr>
        </thead>
        <tbody>
          @foreach($domain['person'] as $p)
          <tr>
            <td>{{$p['username']}}</td>
            <td>{{$p['stable_name']}}</td>
            <td>{{$p['stable_prefix']}}</td>
            <td>{{$p['racing_colors']}}</td>
            <td>
              <a class="btn btn-primary btn-sm" href="/person/{{ $p['id'] }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
              </a>
            </td>
            <td>
              <a class="btn btn-danger btn-sm" href="/remove-person/{{ $p['id'] }}">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
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
@endsection