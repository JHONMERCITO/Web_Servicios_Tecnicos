<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        return view('soy-cliente');
    }

    public function registrar(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:clientes,email',
        'telefono' => 'required|string|max:20',
    ]);

    Cliente::create($validatedData);

    return redirect()->route('soy-cliente')->with('success', 'Registro exitoso');
}
}