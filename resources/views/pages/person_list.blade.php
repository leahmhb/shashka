@extends('layouts.master')

@section('title', 'Person List')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">    


      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">
          Person
        </h3>
      </div>
      <div class="panel-body">
      <table id="t_person" class="table table-hover">
        <thead>
          <tr>
            <th class="col-sm-2">Username</th>
            <th class="col-sm-3">Stable Name</th>
            <th class="col-sm-2">Stable Prefix</th>
            <th class="col-sm-3">Racing Colors</th>
            <th><i class="fa fa-pencil fa-lg text-info" aria-hidden="true"></i></th>
            <th><i class="fa fa-trash-o fa-lg text-danger" aria-hidden="true"></i></th>
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
              <a class="btn btn-info btn-sm" href="/person/{{ $p['id'] }}">
                <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
              </a>
            </td>
            <td>
              <a class="btn btn-danger btn-sm" href="/remove-person/{{ $p['id'] }}">
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