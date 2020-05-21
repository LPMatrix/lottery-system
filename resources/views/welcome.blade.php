@extends('layouts.app')

@section('content')

    <div class="title m-b-md" style="margin-top: 20%;">
        The Lottery Machine!
    </div>

    <div class="links">
        <button class="btn btn-primary"><a style="color: #fff" href="{{route('lottery.create')}}">Create a lottery</a></button>
        <button class="btn btn-success"><a style="color: #fff" href="{{route('lottery.index')}}">See lotteries</a></button>
    </div>

@endsection