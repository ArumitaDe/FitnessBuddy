@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>All Meals</h3> </div>
                
                <div class="panel-body">
@if(!$meals->isEmpty())
<ul class = "list-group">
  @foreach($meals as $meal )
     <li class ="list-group-item"  >

        <a href =  "/meals/{{$meal->id}}">
        {{ $meal->name }} 
       </a>

        <span class="food-pcf pull-right">
		{{ $meal->created_at->toDayDateTimeString() }}				
	  </span> 
      </li>
   @endforeach
 </ul>
 @else
<h5>You have no meals<a href= "/meals/create"> Create One Now !!!</a></h5>
</div>
</div>
</div>
</div>
</div>
 @endif
@stop
