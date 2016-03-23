@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
<div class="page-header"><h1>Welcome</h1></div>  
<div class="row">

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">Updates</h4>
			</div>
			<div class="panel-body">
				<ul>
					<li><b>28Feb16:</b> </br>
						Neco is handling American Pharoah and Antebellum as of 28Dec15.
          </li>
        </ul>					
      </div>
    </div><!--end panel-->

    <div class="panel panel-default">
     <div class="panel-heading">
      <h4 class="panel-title">Modal Form Testing</h4>
    </div>
    <div class="panel-body">
     <a href="/quick-person" type="button" class="btn btn-default btn-block" data-remote="false" data-toggle="modal" data-target="#quick-form" >
      Add Person 
    </a>
    <a href="/quick-horse" type="button" class="btn btn-default btn-block" data-remote="false" data-toggle="modal" data-target="#quick-form" >
      Add Horse 
    </a>
    <a href="/quick-race" type="button" class="btn btn-default btn-block" data-remote="false" data-toggle="modal" data-target="#quick-form" >
      Add Race 
    </a>
  </div>
</div><!--end panel-->
</div><!--end col-->

<div class="col-md-9">			
 <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title">
   Featured Horse: Sovenance - Bred by Neco@Hard Tack
 </h3>
</div>
<div class="panel-body">
  <img class="stall-pic img-responsive" src="{{ asset('img/welcome-horse.png') }}">  
</div><!--end panel content-->		
</div><!--end panel-->   
</div><!--end col-->


</div><!--end row-->


@endsection