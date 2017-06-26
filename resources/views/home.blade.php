@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Welcome {{ Auth::user()->name }}! </h3> </div>
                
                <div class="panel-body">
@if(!$meals->isEmpty())
<h4> Your Meals for today </h4>
<ul class = "list-group">
  @foreach($meals as $meal )

   @if($meal->created_at)
     <li class ="list-group-item"  >
        
        <a href =  "/meals/{{$meal->id}}">
        {{ $meal->name }} 
       </a>

        <span class="food-pcf pull-right">
        {{ $meal->created_at->toDayDateTimeString() }}              
      </span> 
      </li>
      @endif
   @endforeach
 </ul>
 @else
<h5>Looks like have no meals today. Change that ! <a href= "/meals/create"> Create One Now !!!</a></h5>
@endif
</div>
</div>
</div>
</div>
</div>
@endsection
