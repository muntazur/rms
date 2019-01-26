@extends('layouts.main')

@section('content')
    @foreach($categories as $category)
            <a href="categories/{{$category->id}}">{{$category->name}}&nbsp;&nbsp;</a> 

    @endforeach
@endsection