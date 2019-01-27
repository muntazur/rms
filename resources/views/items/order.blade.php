@extends('layouts.main')

@section('content')
    <h2 align="center"> {{$item_name}} </h2>
    <h6 align="center" style="color:green"> order now </h6>
{!! Form::open(['class'=>'form-horizontal','method'=>'post','action'=>'CategoryController@storeOrder','enctype'=>'multipart/form-data']) !!}
    @csrf
    {!! Form::hidden('item_id',$item_id) !!}
    <br>
    {!! Form::hidden('item_name',$item_name) !!}
    <br>
    {!! Form:: label('quantity', 'Quantity') !!}
    {!! Form::text('quantity',$value=null,$attribue=['placeholder'=>'Enter quantity','name'=>'quantity','class'=>'form-control'])!!}
    <br>
    {!! Form:: label('name', 'Name')!!}
    {!! Form::text('name',$value=null,$attribue=['placeholder'=>'Enter your name','name'=>'name','class'=>'form-control'])!!}
    <br>
    {!! Form:: label('email', 'Email')!!}
    {!! Form::text('email',$value=null,$attribue=['placeholder'=>'Enter your email','name'=>'email','class'=>'form-control'])!!}         
    
    <br>
    {!! Form:: label('phone','Phone') !!}
    {!! Form::text('phone',$value=null,$attribue=['placeholder'=>'Enter your phone','name'=>'phone','class'=>'form-control'])!!}
    <br>
    {!! Form:: label('address','Address') !!}
    {!! Form::text('address',$value=null,$attribue=['placeholder'=>'Where to ship','name'=>'address','class'=>'form-control'])!!}
    <br>
    {!! Form::label('date','Date') !!}
    {!! Form::date('date', \Carbon\Carbon::now()) !!}
    {!! Form::submit('Submit',$attribue=['class'=>'button','name'=>'submit']) !!}

{!! Form::close() !!}
     
@endsection

