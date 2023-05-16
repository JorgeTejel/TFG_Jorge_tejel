<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use App\Models\Marca;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {               
        return view('Componentes.index');   //Este Componentes viene de las views
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('componentes.create', ['marcas' => Marca::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nº_de_Bastidor' => 'required|unique:alumnos|max:10',
            'nombre' => 'required|max:255',
            'fecha' => 'required|date',
            'precio' => 'required',
            'stock' => 'nullable|max:255',
            'marca' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Componente $componente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Componente $componente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Componente $componente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Componente $componente)
    {
        //
    }
}
