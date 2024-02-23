@extends('layouts.app');

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h2 class="fs-4 text-secondary text-uppercase">
                    cars list
                </h2>
                <a href="{{ route('admin.cars.create') }}" class="btn btn-sm btn-secondary"><i
                        class="fa-solid fa-pencil"></i></a>
            </div>
            <div class="col-12">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $car->modello }}</td>
                                <td>{{ $car->prezzo }}</td>
                                <td>{{ $car->alimentazione }}</td>
                                <td>{{ $car->anno }}</td>
                                <td>{{ $car->descrizione }}</td>
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

                                        <form action="{{ route('admin.cars.destroy', ['car' => $car->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Vuoi eliminare questo record??')"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
