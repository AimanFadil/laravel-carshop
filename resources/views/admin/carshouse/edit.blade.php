@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-12 form-group">
                @if ($errors->any())
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-12">
                <form action="{{ route('admin.carshouse.update', ['carshouse' => $carshouse->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="nome">Aggiungi il Nome</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                            class="form-control @error('nome') is-invalid @enderror" required>

                        @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="indirizzo">Aggiungi un indirizzo</label>
                        <input type="text" name="indirizzo" id="indirizzo" value="{{ old('indirizzo') }}"
                            class="form-control @error('indirizzo') is-invalid @enderror" required>

                        @error('indirizzo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="tel">Inserisci numero di telfono</label>
                        <input type="number" name="tel" id="tel" value="{{ old('tel') }}"
                            class="form-control @error('tel') is-invalid @enderror" required>

                        @error('tel')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="tipologia">Tipologia</label>
                        <input type="text" name="tipologia" id="tipologia" value="{{ old('tipologia') }}"
                            class="form-control @error('tipologia') is-invalid @enderror" required>

                        @error('tipologia')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="mail">Inserisci email</label>
                        <input type="email" name="mail" id="mail" value="{{ old('mail') }}"
                            class="form-control @error('mail') is-invalid @enderror" required>

                        @error('mail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="social">Social</label>
                        <input type="text" name="social" id="social" value="{{ old('social') }}"
                            class="form-control @error('social') is-invalid @enderror" required>

                        @error('social')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="logo">Aggiungi il logo</label>
                        <input type="file" name="logo" id="logo"
                            class="form-control @error('logo') is-invalid @enderror">

                        @error('logo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-sm btn-success">Salva</button>
                </form>
            </div>
        </div>
    @endsection
