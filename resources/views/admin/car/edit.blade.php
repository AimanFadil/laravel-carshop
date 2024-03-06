@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">MODIFICA</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-warning" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                <form action="{{ route('admin.cars.update', $car) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="cars_house_id">Selziona casa automobilistica</label>
                        <select name="cars_house_id" id="cars_house_id"
                            class="form-select @error('cars_house_id') is-invalid @enderror" required>
                            <option value="">Casa automobilistica</option>
                            @foreach ($carsHouse as $carHouse)
                                <option value="{{ $carHouse->id }} @selected($carHouse->id == old('cars_house_id', $car->carHouse ? $car->carHouse->id : ''))">{{ $carHouse->nome }}
                                </option>
                            @endforeach
                            @error('cars_house_id')
                                <p class="text-danger fw-bold">{{ $message }}</p>
                            @enderror
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="modello">Modello</label>
                        <input type="text" name="modello" id="modello" value="{{ old('modello') ?? $car->modello }}"
                            class="form-control @error('modello') is-invalid @enderror" required>
                        @error('modello')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="prezzo">Prezzo</label>
                        <input type="text" name="prezzo" id="prezzo" value="{{ old('prezzo') ?? $car->prezzo }}"
                            class="form-control @error('prezzo') is-invalid @enderror" required>
                        @error('prezzo')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alimentazione">Alimentazione</label>
                        <input type="text" name="alimentazione" id="alimentazione"
                            value="{{ old('alimentazione') ?? $car->alimentazione }}"
                            class="form-control @error('alimentazione') is-invalid @enderror" required>
                        @error('alimentazione')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="anno">Anno</label>
                        <input type="text" name="anno" id="anno" value="{{ old('anno') ?? $car->anno }}"
                            class="form-control @error('anno') is-invalid @enderror" required>
                        @error('anno')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="descrizione">Descrizione</label>
                        <textarea name="descrizione" cols="30" rows="10" id="descrizione"
                            class="form-control @error('descrizione') is-invalid @enderror" required>{{ old('descrizione') ?? $car->descrizione }}</textarea>
                        @error('descrizione')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="numero_telaio">numero_telaio</label>
                        <input type="text" name="numero_telaio" id="numero telaio"
                            value="{{ old('numero_telaio') ?? $car->numero_telaio }}"
                            class="form-control @error('numero_telaio') is-invalid @enderror" required>
                        @error('numero_telaio')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="trazione">trazione</label>
                        <input type="text" name="trazione" id="trazione"
                            value="{{ old('trazione') ?? $car->trazione }}"
                            class="form-control @error('trazione') is-invalid @enderror" required>
                        @error('trazione')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="porte">porte</label>
                        <input type="text" name="porte" id="porte" value="{{ old('porte') ?? $car->porte }}"
                            class="form-control @error('porte') is-invalid @enderror" required>
                        @error('porte')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="carrozzeria">carrozzeria</label>
                        <input type="text" name="carrozzeria" id="carrozzeria"
                            value="{{ old('carrozzeria') ?? $car->carrozzeria }}"
                            class="form-control @error('carrozzeria') is-invalid @enderror" required>
                        @error('carrozzeria')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cavalli">cavalli</label>
                        <input type="text" name="cavalli" id="cavalli" value="{{ old('cavalli') ?? $car->cavalli }}"
                            class="form-control @error('cavalli') is-invalid @enderror" required>
                        @error('cavalli')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cilindrata">cilindrata</label>
                        <input type="text" name="cilindrata" id="cilindrata"
                            value="{{ old('cilindrata') ?? $car->cilindrata }}"
                            class="form-control @error('cilindrata') is-invalid @enderror" required>
                        @error('cilindrata')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label">Selziona optionals</label>
                        <div>
                            @foreach ($optionals as $optional)
                                <div class="form-check-inline">
                                    <input type="checkbox" name="optionals[]" id="optional-{{ $optional->id }}"
                                        class="form-check-input" value="{{ $optional->id }}"
                                        @checked(is_array(old('optionals')) && in_array($optional->id, old('optionals')))>
                                    <label for="" class="form-check-label">{{ $optional->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($car->image != null)
                            <div>
                                <img src="{{ asset('/storage/' . $car->image) }}" alt="">
                            </div>
                        @else
                            <h4>Immagine non presente</h4>
                        @endif

                        <label for="image">immagine</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror" required>
                        @error('image')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary my-3">SALVA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
