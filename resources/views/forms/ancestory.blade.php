@extends('layouts.master')

@section('title', 'Add Ancestory')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

      <form id="ancestory" class="form-horizontal" method="post">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">
              {{ $relationship }} Information
              <small class="pull-right">
              <a href="@if( $horse['id'] != 0)/remove-ancestory/{{ $horse['id'] }}@endif"><i class="fa fa-times text-danger"></i></a>
              </small>
            </h1>

          </div>
          <div class="panel-body">

            <div class="row">
              <div class="col-sm-12">          
                @if($validate == true)
                <div id="success "class="alert alert-success" role="alert">
                  Successful addition!
                </div><!--end alert-->
                @endif        
                <div id="rsvErrors" class="alert alert-danger"></div>    
              </div><!--end col-->
            </div><!--end row-->


            <div class="form-group">
              <label for="sire" class="col-sm-3 control-label">
                <small>
                  <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
                </small>
                Sire</label>
                <div class="col-sm-9">
                  <select name="sire_id" class="form-control">
                    <option></option>
                    @foreach ($options['sires'] as $s)          
                    <option value="{{$s['id']}}" @if($sire['id'] == $s['id']) selected @endif>{{$s['call_name']}}</option>
                    @endforeach        
                  </select>           
                </div>        
              </div><!--end sire--> 


              <div class="form-group">
                <label for="dam" class="col-sm-3 control-label">
                  <small>
                    <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
                  </small>
                  Dam</label>
                  <div class="col-sm-9">
                    <select name="dam_id" class="form-control">
                      <option></option>
                      @foreach ($options['dams'] as $d)          
                      <option value="{{$d['id']}}" @if($dam['id'] == $d['id']) selected @endif>{{$d['call_name']}}</option>
                      @endforeach
                    </select>           
                  </div>        
                </div><!--end dam--> 




                <div class="form-group">
                  <label for="horse" class="col-sm-3 control-label">
                    <small>
                      <i class="text-danger fa fa-asterisk" data-toggle="tooltip" data-placement="top" title="Required"></i>
                    </small>
                    Offpsring</label>
                    <div class="col-sm-9">
                      <select name="horse_id" class="form-control" >
                        <option></option>
                        @foreach ($options['horses'] as $h)          
                        <option value="{{$h['id']}}" @if($horse['id'] == $h['id']) selected @elseif($horse['id'] != $h['id'] and $horse['id']) disabled @endif>{{$h['call_name']}}</option>
                        @endforeach
                      </select>           
                    </div>
                  </div><!--end horse-->

                </div><!--end panel body-->


                @include('includes.form_controls')


              </div><!--end panel-->
            </form>

          </div><!--end col-->
        </div><!--end row-->
      </div><!--end container-->


      @endsection
