@extends('layouts.app')

@section('home-page', 'home')

@section('content')

<div class="row d-flex flex-wrap">
    @foreach ($trains as $train )
        <div class="card train">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Azienda: {{$train->company}}</li>
                <li class="list-group-item">Stazione di Partenza: {{$train->departure_station}}</li>
                <li class="list-group-item">Stazione di Arrivo: {{$train->arrival_station}}</li>
                <li class="list-group-item">Partenza ore: {{$train->departure_time}}</li>
                <li class="list-group-item">Arrivo alle: {{$train->arrival_time}}</li>
                <li class="list-group-item">{{$train->train_code}}</li>
                <li class="list-group-item">Vagoni: {{$train->wagons_number}}</li>
                <li class="list-group-item">Ritardo: {{$train->on_time}}</li>
                <li class="list-group-item">{{$train->cancelled}}</li>
            </ul>
        </div>
        
    @endforeach
    

</div>


@endsection