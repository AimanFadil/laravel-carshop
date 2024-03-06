@extends('layouts.app')

@section('content')
    <div class="card bg-info-subtle border border-info border border-5 rounded-4 my-4" style="width: 80vw;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}

        <h1 class="card-title m-2">{{ $car['modello'] }}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>PREZZO: {{ $car['prezzo'] }}€</h3>
                </li>
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>ALIMENTAZIONE: {{ $car['alimentazione'] }}</h3>
                </li>
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>ANNO: {{ $car['anno'] }}</h3>
                </li>
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>DESCRIZIONE: {{ $car['descrizione'] }}</h3>
                </li>
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>NUMERO TELAIO: {{ $car['numero_telaio'] }}</h3>
                </li>
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>TRAZIONE: {{ $car['trazione'] }}</h3>
                </li>
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>PORTE: {{ $car['porte'] }}</h3>
                </li>
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>CARROZZERIA: {{ $car['carrozzeria'] }}</h3>
                </li>
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>CAVALLI: {{ $car['cavalli'] }}</h3>
                </li>
                <li class="list-group-item bg-info-subtle border border-2 border-info">
                    <h3>CILINDRATA: {{ $car['cilindrata'] }}</h3>
                </li>
            </ul>
            <div>
                <img class="w-100"src="{{ $car->image !== null ? asset('/storage/' . $car->image) : '/storage/image/imgnull.jpg' }}"
                    alt="">
            </div>
    </div>
@endsection
