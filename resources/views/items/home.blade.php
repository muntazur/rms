@extends('layouts.main')

@section('content')
    @foreach($items as $item)
    <div align="center">
        <img src="{{ asset('storage/'.$item->image) }}" />
        <h1>{{$item->name}}</h1>
    </div>
    @endforeach
@endsection