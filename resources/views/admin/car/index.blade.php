@extends('layouts.app');

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column m-2">
                <h2 class="fs-4 text-secondary text-uppercase">
                    cars list
                </h2>
                <div class="d-flex">
                    <h2 class="fs-4 text-secondary text-uppercase">AGGIUNGI NUOVA AUTOMOBILE</h2>
                    <a href="{{ route('admin.cars.create') }}" class="btn btn-sm btn-secondary mx-2 my-1 py-2"><i
                            class="fa-solid fa-pencil"></i></a>
                </div>
            </div>
            <div class="col-12 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Modello</th>
                            <th>Prezzo</th>
                            <th>Alimentazione</th>
                            <th>Anno</th>
                            <th>Descrizione</th>
                            <th>Numero Telaio</th>
                            <th>Trazione</th>
                            <th>Porte</th>
                            <th>Carrozzeria</th>
                            <th>Cilindrata</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $car->modello }}</td>
                                <td>€{{ number_format($car->prezzo, 2) }}</td>
                                <td>{{ $car->alimentazione }}</td>
                                <td>{{ $car->anno }}</td>
                                <td>{{ substr($car->descrizione, 0, 10) }}...</td>
                                <td>{{ $car->numero_telaio }}</td>
                                <td>{{ $car->trazione }}</td>
                                <td>{{ $car->porte }}</td>
                                <td>{{ $car->carrozzeria }}</td>
                                <td>{{ $car->cilindrata }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.cars.show', ['car' => $car->id]) }}"
                                            class="btn btn-sm btn-primary me-1"><i
                                                class="fa-solid fa-magnifying-glass"></i></a>

                                        <a href="{{ route('admin.cars.edit', ['car' => $car->id]) }}"
                                            class="btn btn-sm btn-warning me-1"><i class="fa-solid fa-pencil"></i></a>

                                        <button type="button" class="btn_delete btn btn-sm btn-danger"
                                            data-bs-toggle="modal" data-bs-target="#modal_delete"
                                            data-carid="{{ $car->id }}" data-carname="{{ $car->modello }}"
                                            data-type="cars">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>


                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.car.modal_delete')
@endsection
