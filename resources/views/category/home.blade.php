@extends('layouts.main')

@section('content')
    <div align="center">
        @foreach($categories as $category)
        
            <li><a href="categories/{{$category->id}}">{{$category->name}}&nbsp;&nbsp;</a> </li>
        
        @endforeach
    </div>
@endsection