@extends('layouts.app')
@section('content')
    <body>
       
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @if (!Auth::check()) 
                <div class="panel-heading"><h5>Hello Stranger ! Please login or register !</h5> </div>
            @endif
        </div>
        </div>
        </div>
        </div>
        </div>

    </body>

@endsection