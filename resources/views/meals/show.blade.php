@extends('layouts.app')
@section('content')
<div class="container">
   

    <hr>
   
         <div class="container">
        	<div class="meal-info">
		<h2 class="meal-name">{{$meal->name}}</h2>

		<span class="meal-time">
			{{$meal->created_at->toDayDateTimeString()}}
		</span>

		<br>
         
		<span class="meal-data label label-pill label-primary">
			 {{(($meal->foods->sum('protein'))*4)+(($meal->foods->sum('carbohydrate'))*4)+(($meal->foods->sum('fat'))*9)}} kcal
		</span>
         

		<span class="meal-data label label-pill label-default">
			{{$meal->foods->sum('protein')}}g Proteins
		</span>

		<span class="meal-data label label-pill label-default">
			{{$meal->foods->sum('carbohydrate')}}g Carbohydrates
		</span>

		<span class="meal-data label label-pill label-default">
			{{$meal->foods->sum('fat')}}g Fat
		</span>
	</div>

	<hr>

	
	<hr>
@if(count($meal->foods)>=1)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Foods</h3> </div>
                
                <div class="panel-body">

<ul class = "list-group">
  
  @foreach($meal->foods as $food )
     <li class ="list-group-item"  >
   
        {{ $food->name }} 
      <span class="food-pcf pull-right">
		{{ $food->protein }}:{{ $food->carbohydrate }}:{{ $food->fat }}				
	  </span> 
      </li>
   @endforeach
  
 </ul>
 </div>
</div>
</div>
</div>
</div>
@else
<p> <h3>No foods listed </h3></p>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add New Food</h3> </div>
                
                <div class="panel-body">
 

	<form action="/meals/{{$meal->id}}/foods" method="POST">

 {{ csrf_field() }}
		

		<div class="form-group row">
			<label for="name" class="col-sm-2 form-control-label">Food Name</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="text" 
						name="name" 
						placeholder="Food Name"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<label for="protein" class="col-sm-2 form-control-label">Protein</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="number" 
						name="protein" 
						placeholder="Protein/g"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<label for="carbohydrate" class="col-sm-2 form-control-label">Carbohydrates</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="number" 
						name="carbohydrate" 
						placeholder="Carbohydrates/g"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<label for="fat" class="col-sm-2 form-control-label">Fat</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="number" 
						name="fat" 
						placeholder="Fat/g"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btn btn-primary" value="submit" type="submit">Submit</button>
			</div>
		</div>

	</form>
</div>
</div>
</div>
</div>
</div>
</div>
 </div>
@endsection

