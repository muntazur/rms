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
    <h1> Restaurant Management System </h1>
@endsection