@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add Another Meal</h3> </div>
                
                <div class="panel-body">

    <form action="/users/{{$user->id}}/meals" method="POST">

        {{ csrf_field() }}


       
        <div class="form-group row">
            <label for="name" class="col-sm-2 form-control-label">Meal Name</label>
            <div class="col-sm-10">
                <input name="name" type="text" class="form-control" placeholder="Meal Name" required="">
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

@endsection
