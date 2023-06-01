@extends('layouts/template')

@section('title', 'Registrar Componente | Stock')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Registrar Componente</h2>

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- FORMULARIO -->
        <form action="{{url('componentes')}}" method="post">

            @csrf

            <div class="mb-3 row">
                <label for="nº_de_Bastidor" class="col-sm-2 col-form-label">Nº de Bastidor:</label>
                <div class="col-sm-5">
                    <input type="text" clas="form-control" name="nº_de_Bastidor" id="nº_de_Bastidor" value="{{ old('nº_de_Bastidor') }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-5">
                    <input type="text" clas="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha de Adquicisión:</label>
                <div class="col-sm-5">
                    <input type="date" clas="form-control" name="fecha" id="fecha" value="{{ old('fecha') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-5">
                    <input type="text" clas="form-control" name="precio" id="precio" value="{{ old('precio') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="stock" class="col-sm-2 col-form-label">Stock:</label>
                <div class="col-sm-5">
                    <input type="text" clas="form-control" name="stock" id="stock" value="{{ old('stock') }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="marca" class="col-sm-2 col-form-label">Marca:</label>
                <div class="col-sm-5">

                    <select name="marca" id="marca" class="form-select" required>
                        <option value="">Seleccionar Marca</option>
                        @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <a href="{{ url('componentes')}}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
        <!-- FORMULARIO -->
    </div>
</main>