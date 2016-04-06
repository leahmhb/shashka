@extends('layouts.master')

@section('title', 'Registration')

@section('content')
<div class="page-header">

  
<h1>Register</h1>

</div>

<?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
<?php 
foreach ($messages as $msg) 
{
  echo $msg;
}
?>
<?php echo Form::open() ?>
<?php echo Form::label('email', 'Email') ?>
<?php echo Form::text('email', Input::old('email')) ?>
<br>
<?php echo Form::label('name', 'Name') ?>
<?php echo Form::text('name', Input::old('name')) ?>
<br>
<?php echo Form::label('password', 'Password') ?>
<?php echo Form::password('password') ?>
<br>
<?php echo Form::label('password_confirm', 'Retype your Password') ?>
<?php echo Form::password('password_confirm') ?>
<br>
<?php echo Form::label('admin', 'Admin') ?>
<?php echo Form::checkbox('admin', 'true', Input::old('admin')) ?>
<br>
<?php echo Form::submit('Register!') ?>
<?php echo Form::close() ?>

@endsection