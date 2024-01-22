@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($destinos as $destino)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/'.$destino->imagen) }}" alt="{{ $destino->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $destino->nombre }}</h5>
                    <a href="#" class="btn btn-primary">Ver Detalle</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection