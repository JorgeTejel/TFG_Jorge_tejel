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
        $Componente = componente::all();
        return view('Componentes.index', ['Componente' => $Componente]);   //Este Componentes viene de las views
        
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
            'nº_de_Bastidor' => 'required|unique:Componentes|max:10',
            'nombre' => 'required|max:255',
            'fecha' => 'required|date',
            'precio' => 'required',
            'stock' => 'nullable|max:255',
            'marca' => 'required',
        ]);

        $Componente = new componente();
        $Componente->nº_de_Bastidor = $request->input('nº_de_Bastidor');
        $Componente->nombre = $request->input('nombre');
        $Componente->fecha_adquicision = $request->input('fecha');
        $Componente->precio = $request->input('precio');
        $Componente->stock = $request->input('stock');
        $Componente->marca_id = $request->input('marca');
        $Componente->save();

        return view("Componentes.message", ['msg' => "Registro guardado"]);

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
    public function edit($id)
    {
        $componente = Componente::find($id);
        return view('Componentes.edit', ['componente' => $componente, 'marcas' => Marca::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nº_de_Bastidor' => 'required|max:10|unique:Componentes,nº_de_Bastidor,'.$id,
            'nombre' => 'required|max:255',
            'fecha' => 'required|date',
            'precio' => 'required',
            'stock' => 'nullable|max:255',
            'marca' => 'required',
        ]);
        
        $Componente = componente::find($id);
        $Componente->nº_de_Bastidor = $request->input('nº_de_Bastidor');
        $Componente->nombre = $request->input('nombre');
        $Componente->fecha_adquicision = $request->input('fecha');
        $Componente->precio = $request->input('precio');
        $Componente->stock = $request->input('stock');
        $Componente->marca_id = $request->input('marca');
        $Componente->save();

        return view("Componentes.message", ['msg' => "Registro modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Componente = Componente::find($id);
        $Componente->delete();

        return redirect("componentes");
    }
}
