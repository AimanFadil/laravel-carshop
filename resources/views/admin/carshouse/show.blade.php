@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="">
                        <p>{{ $carshouse->nome }}</p>
                        <p>{{ $carshouse->tel }}</p>
                        <p>{{ $carshouse->indirizzo }}</p>
                        <p>{{ $carshouse->tipologia }}</p>
                        {{-- {{ dd($carsHouse->nome) }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
