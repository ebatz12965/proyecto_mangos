<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Obtiene todos los registros de la tabla 'pruebas'
        $pruebas = Prueba::all();

        // Devuelve los datos en formato JSON
        return response()->json($pruebas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombrePrueba' => 'required|string|max:20',
        ]);

        $prueba = new Prueba();
        $prueba->nombrePrueba = $validatedData['nombrePrueba'];
        $prueba->save();

        return response()->json(['message' => 'Pedido creado correctamente'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prueba = Prueba::find($id);
        return response()->json($prueba);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prueba = Prueba::findOrFail($id);
        return response()->json($prueba);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombrePrueba' => 'required|string|max:255',
        ]);

        $prueba = Prueba::findOrFail($id);
        $prueba->nombrePrueba = $request->nombrePrueba;
        $prueba->save();

        return response()->json(['message' => 'Prueba actualizada con éxito']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prueba = Prueba::findOrFail($id);
        $prueba->delete();
        return response()->json(['message' => 'Registro eliminado con éxito.']);
    }
}
