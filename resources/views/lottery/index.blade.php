@extends('layouts.app')
@section('content')
    <h2>Hi {{\Auth::user()->name}}</h2>
    <h3>Here are your lotteries</h3>

    <table class="table" style="text-align: left;">
	  <thead>
	    <tr>
	      <th scope="col">Lottery</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($lotteries as $lottery)
	    <tr>
	      <td>{{$lottery->name}}</td>
	      <td><a class="btn btn-primary flex-list__last" href="{{$lottery->path()}}"><i class="glyphicon glyphicon-eye-open"></i> View</a></td>
	      <td><a class="btn btn-danger flex-list__last" href="{{$lottery->path()}}"><i class="glyphicon glyphicon-eye-open"></i> Delete</a></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection