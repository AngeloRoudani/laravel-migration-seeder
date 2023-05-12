@extends('layouts.app')

@section('home-page', 'home')

@section('content')

<div class="row">
    @foreach ($trains as $train )
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$train->company}}</li>
                <li class="list-group-item">{{$train->started_station}}</li>
                <li class="list-group-item">{{$train->departed_hour}}</li>
                <li class="list-group-item">{{$train->arrival_hour}}</li>
                <li class="list-group-item">{{$train->code}}</li>
                <li class="list-group-item">{{$train->wagons}}</li>
                <li class="list-group-item">{{$train->delay}}</li>
                <li class="list-group-item">{{$train->cancelled}}</li>
            </ul>
        </div>
        
    @endforeach
    

</div>


@endsection