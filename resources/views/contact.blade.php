@extends('layouts.master')

@section('title', 'Contact')

@section('content')
<div class="page-header"><h1>Contact</h1></div>  
<div class="row">


  <div class="col-sm-12">      
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">
        Contact Info
      </h3>
    </div>
    <div class="panel-body">
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>

    {!! Form::open(array('route' => 'contact', 'class' => 'form')) !!}

    <div class="form-group">
      {!! Form::label('Your Name') !!}
      {!! Form::text('name', null, 
      array('required', 
      'class'=>'form-control', 
      'placeholder'=>'Your name')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('Your E-mail Address') !!}
      {!! Form::text('email', null, 
      array('required', 
      'class'=>'form-control', 
      'placeholder'=>'Your e-mail address')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('Your Message') !!}
      {!! Form::textarea('message', null, 
      array('required', 
      'class'=>'form-control', 
      'placeholder'=>'Your message')) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
  </div><!--end panel content-->    
</div><!--end panel-->   
</div><!--end col-->


</div><!--end row-->
@endsection