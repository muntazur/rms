@extends('layouts.main')

@section('navigation')
    <div style="">
        {!! menu('home') !!}
    </div>
    <div style="">
        {!! menu('user') !!}
    </div>
@endsection

@section('content')
<h6 align="center" class="container bg-danger" style="width:300px;color:white">
  <?php
    if($session = Session::get('mismatch')){
       echo ($session);
       Session::put('mismatch',null);
    }
   ?>
</h6>

    
    
    {!! Form::open(['action'=>'UserController@storeRegisterInformation','enctype'=>'multiple/form-data','class'=>'form-horizontal']) !!}
        
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',$value=null,$attribute=['class'=>'form-control','placeholder'=>'Enter your full-name..','name'=>'name','required'=>'required']) !!}
        <br>
        {!! Form::label('email','Email') !!}
        {!! Form::text('email',$value=null,$attribute=['class'=>'form-control','placeholder'=>'Enter Email..','name'=>'email','required'=>'required']) !!}
        <br>
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control awesome','required'=>'required']) !!}
        <br>
        {!! Form::label('password','Confirm-password') !!}
        {!! Form::password('conf_password',['class'=>'form-control awesome','required'=>'required']) !!}
        <br>
        {!! Form::submit('Submit',$attribue=['class'=>'btn btn-primary','name'=>'submit']) !!}
    
    {!! Form::close() !!}

@endsection