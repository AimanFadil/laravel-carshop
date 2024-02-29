@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Modifica</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.carshouse.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="my-3">
                        <label for="name">Aggiungi il Nome</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"
                            required>

                    </div>
                    <div class="my-3">
                        <label for="address">Aggiungi un indirizzo</label>
                        <input type="text" name="address" id="address" value="{{ old('address') }}"
                            class="form-control" required>

                    </div>
                    <div class="my-3">
                        <label for="phone">Inserisci numero di telfono</label>
                        <input type="number" name="phone" id="phone" value="{{ old('phone') }}" class="form-control"
                            required>

                    </div>
                    <div class="my-3">
                        <label for="type">Tipologia</label>
                        <input type="text" name="type" id="type" value="{{ old('type') }}" class="form-control"
                            required>

                    </div>
                    <div class="my-3">
                        <label for="mail">Inserisci email</label>
                        <input type="email" name="mail" id="mail" value="{{ old('mail') }}" class="form-control"
                            required>

                    </div>
                    <div class="my-3">
                        <label for="social">Social</label>
                        <input type="text" name="social" id="social" value="{{ old('social') }}" class="form-control"
                            required>

                    </div>
                    <div class="my-3">
                        <label for="logo">Aggiungi il logo</label>
                        <input type="file" name="logo" id="logo" class="form-control" required>

                    </div>

                    <button type="submit" class="btn btn-sm btn-success">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
