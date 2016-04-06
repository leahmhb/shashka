@extends('layouts.master')

@section('title', 'Welcome')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
       <div class="panel-heading">
        <h1 class="panel-title">Welcome</h1>
      </div>
      <div class="panel-body">

        <h2>Updates</h2>
        <ul>
         <li><b>28Feb16:</b> </br>
          Neco is handling American Pharoah and Antebellum as of 28Dec15.
        </li>
      </ul>					
      {{-- 
      <h2>Testing</h2>
      <a href="/quick-person" type="button" class="btn btn-default btn-block" data-remote="false" data-toggle="modal" data-target="#quick-form">
        Add Person 
      </a>
      <a href="/quick-horse" type="button" class="btn btn-default btn-block" data-remote="false" data-toggle="modal" data-target="#quick-form">
        Add Horse 
      </a>
      <a href="/quick-race" type="button" class="btn btn-default btn-block" data-remote="false" data-toggle="modal" data-target="#quick-form">
        Add Race 
      </a> 
      --}}
      <h2>Featured Horse</h2>

      <img class="stall-pic img-responsive" src="{{ asset('img/welcome-horse.png') }}">  


    </div>
  </div>
</div>
@endsection