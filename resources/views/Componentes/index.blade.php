@extends('layouts/template')

@section('title', 'Componentes | Stock')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado de Componentes</h2>


        <a href="{{url('componentes/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>
    </div>
</main>