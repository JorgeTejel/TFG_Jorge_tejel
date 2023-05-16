@extends('layouts/template')

@section('title', 'Componentes | Stock')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>

        <a href="{{ url('componentes')}}" class="btn btn-secondary">Regresar</a>
    </div>
</main> 
        