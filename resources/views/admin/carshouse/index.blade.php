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
                        @foreach ($carshouses as $carshouse)
                            <tr>
                                <td>{{ $carshouse->nome }}</td>
                                <td>{{ $carshouse->indirizzo }}</td>
                                <td>{{ $carshouse->tel }}</td>
                                <td>{{ $carshouse->tipologia }}</td>
                                <td>{{ $carshouse->mail }}</td>
                                <td>{{ $carshouse->social }}</td>
                                <td>{{ $carshouse->logo }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.carshouse.show', ['carshouse' => $carshouse->id]) }}"
                                            class="btn btn-sm btn-primary me-1"><i
                                                class="fa-solid fa-magnifying-glass"></i></a>

                                        <a href="{{ route('admin.carshouse.edit', ['carshouse' => $carshouse->id]) }}"
                                            class="btn btn-sm btn-warning me-1"><i
                                                class="fa-solid fa-pen-to-square"></i></a>

                                        <button type="button" class="btn_delete btn btn-sm btn-danger"
                                            data-bs-toggle="modal" data-bs-target="#modal_delete"
                                            data-carid="{{ $carshouse->id }}" data-carname="{{ $carshouse->nome }}"
                                            data-type="carshouse">
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
