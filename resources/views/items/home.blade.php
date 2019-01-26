@extends('layouts.app')


@section('content')
    @foreach($items as $item)
    <div align="" style="float:left;margin:10px">

        @if($item->amount==0)
            <img src="{{ asset('storage/'.$item->image) }}" />
            <h5>{{$item->name}}</h5>
            <h6 style="color:red" >Empty!</h6>
        @else
            <a href="order/{{$item->id}}"><img src="{{ asset('storage/'.$item->image) }}" /></a>
            <h5>{{$item->name}}</h5>
            <h6 style="color:green" >Available!</h6>
        @endif
        
    </div>
    
    @endforeach
@endsection



