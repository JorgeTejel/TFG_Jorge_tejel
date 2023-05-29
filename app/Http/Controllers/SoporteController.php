<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoporteTecnico;

class SoporteController extends Controller
{
    public function index()
    {
        return view('Soporte');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'fecha' => 'required|date',
            'error' => 'required',
        ]);

        SoporteTecnico::create($data);

        return redirect('/formulario')->with('success', 'Datos guardados correctamente.');
    }
}
