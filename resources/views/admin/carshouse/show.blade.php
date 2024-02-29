@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <p>{{ $carshouse->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection