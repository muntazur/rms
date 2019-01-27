@extends('layouts.main')

@section('navigation')
    <div style="">
        {!! menu('main') !!}
    </div>
    <div style="">
        {!! menu('logout') !!}
    </div>
@endsection

@section('content')
    <div align="center">
        @foreach($categories as $category)
        
            <li><a href="categories/{{$category->id}}">{{$category->name}}&nbsp;&nbsp;</a> </li>
        
        @endforeach
    </div>
@endsection