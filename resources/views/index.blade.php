@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
<h1>Welcome</h1>
<div class="row">

	<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">Updates</h4>
			</div>
			<div class="panel-body">
				<ul>
					<li>28Feb16: 
						<ul>
							<li>Neco is handling American Pharoah and Antebellum as of 28Dec15.</li>
						</li>
					</ul>
				</div>
			</div><!--end panel-->
		</div><!--end col-->

		<div class="col-sm-8">
			
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">
					Featured Horse: Sovenance
				</h3>
			</div>
			<div class="panel-body">
				<img class="stall-pic" src="{{ asset('img/welcome-horse.png') }}">  
			</div><!--end panel content-->
			<div class="panel-footer">  
				Bred by Neco@Hard Tack
			</div><!--end panel footer-->
			</div><!--end panel-->   
	</div><!--end col-->


</div><!--end row-->
@endsection