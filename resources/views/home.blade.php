@extends('layouts.app')

@section('home-page', 'home')

@section('content')

<div class="row d-flex flex-wrap">
    @foreach ($trains as $train )
        <div class="card train">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Azienda: {{$train->company}}</li>
                <li class="list-group-item">Stazione di Partenza: {{$train->started_station}}</li>
                <li class="list-group-item">Partenza ore: {{$train->departed_hour}}</li>
                <li class="list-group-item">Arrivo alle: {{$train->arrival_hour}}</li>
                <li class="list-group-item">{{$train->code}}</li>
                <li class="list-group-item">Vagoni: {{$train->wagons}}</li>
                <li class="list-group-item">Ritardo: {{$train->delay}}</li>
                <li class="list-group-item">{{$train->cancelled}}</li>
            </ul>
        </div>
        
    @endforeach
    

</div>


@endsection