@extends('layouts/template')

@section('title', 'Componentes | Stock')

@section('contenido')

<header>
    <div class="logo">
        <img src="{{ asset('img/logoRH.png') }}" alt="Logo" width="60px">
    </div>
    <div class="nav-container">
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}">Inicio</a></li>
                <li><a href="{{ route('componentes.index') }}">Gestión</a></li>
                <li><a href="{{ route('Nosotros') }}">Rider's Hub</a></li>
                <li><a href="{{ route('Soporte') }}">Soporte Técnico</a></li>
            </ul>
        </nav>
        <div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    PERFIL
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Editar</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main>

    <div class="container py-4" style="background: white; padding: 4rem; margin: 0 auto; border-radius: 10px; height: fit-content;">
        <h2>Stock de Componentes</h2>


        <a href="{{url('componentes/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>
    
        <table class="table table-hover">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Nº de Bastidor</th>
                    <th>Nombre</th>
                    <th>Fecha de Adquicisión</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Marca</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($Componente as $Component)
                <tr>
                    <td>{{ $Component->id }}</td>
                    <td>{{ $Component->nº_de_Bastidor }}</td>
                    <td>{{ $Component->nombre }}</td>
                    <td>{{ $Component->fecha_adquicision }}</td>
                    <td>{{ $Component->precio }}</td>
                    <td>{{ $Component->stock }}</td>
                    <td>{{ $Component->marca->nombre }}</td>
                    <td><a href="{{ url('componentes/'.$Component->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ url('componentes/'.$Component->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('dashboard') }}" class="btn btn-primary mb-3">Volver al Inicio</a>

    </div>
</main>