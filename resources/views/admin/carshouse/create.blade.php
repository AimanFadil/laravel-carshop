@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Aggiungi Una Casa Automobilistica</h2>
        </div>
    </div>
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
            <form action="{{ route('admin.carshouse.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="name">Aggiungi il Nome</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-contorl @error('name') is-invalid @enderror" required>
    
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="address">Aggiungi un indirizzo</label>
                    <input type="text" name="address" id="address" value="{{ old('address') }}" class="form-contorl @error('address') is-invalid @enderror" required>

                    @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="phone">Inserisci numero di telfono</label>
                    <input type="number" name="phone" id="phone" value="{{ old('phone') }}" class="form-contorl @error('phone') is-invalid @enderror" required>

                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="type">Tipologia</label>
                    <input type="text" name="type" id="type" value="{{ old('type') }}" class="form-contorl @error('type') is-invalid @enderror" required>

                    @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="mail">Inserisci email</label>
                    <input type="email" name="mail" id="mail" value="{{ old('mail') }}" class="form-contorl @error('mail') is-invalid @enderror" required>

                    @error('mail')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="social">Social</label>
                    <input type="text" name="social" id="social" value="{{ old('social') }}" class="form-contorl @error('social') is-invalid @enderror" required>

                    @error('social')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="logo">Aggiungi il logo</label>
                    <input type="file" name="logo" id="logo" class="form-contorl @error('logo') is-invalid @enderror" required>

                    @error('logo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-sm btn-success">Salva</button>
                </form>

                </div>
        </div>
    </div>