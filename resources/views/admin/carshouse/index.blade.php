@extends('layouts.app');

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h2 class="fs-4 text-secondary text-uppercase">
                    Cars House List
                </h2>
                <a href="{{ route('admin.carshouse.create') }}" class="btn btn-sm btn-secondary"><i
                        class="fa-solid fa-pencil"></i>
                </a>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Indirizzo</th>
                            <th>Numero di Telefono</th>
                            <th>Tipologia</th>
                            <th>Mail</th>
                            <th>Social</th>
                            <th>Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carshouse as $house)
                            <tr>
                                <td>{{ $house->name }}</td>
                                <td>{{ $house->address }}</td>
                                <td>{{ $house->phone }}</td>
                                <td>{{ $house->type }}</td>
                                <td>{{ $house->mail }}</td>
                                <td>{{ $house->social }}</td>
                                <td>{{ $house->logo }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-sm btn-primary me-1"><i class="fa-solid fa-magnifying-glass"></i></a>

                                        <a href="#" class="btn btn-sm btn-warning me-1"><i class="fa-solid fa-pen-to-square"></i></a>

                                        <form action="#" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Vuoi eliminare questo record??')"><i class="fa-solid fa-trash"></i></button>
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
