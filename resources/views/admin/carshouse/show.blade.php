@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="">
                        {{-- <p>{{ $carsHouse->nome }}</p>
                        <p>{{ $carsHouse->tel }}</p>
                        <p>{{ $carsHouse->indirizzo }}</p>
                        <p>{{ $carsHouse->tipologia }}</p> --}}
                        {{ dd($carsHouse->nome) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
