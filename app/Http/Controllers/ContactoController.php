<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Obtiene todos los registros de la tabla 'pruebas'
        $contacto = Contacto::all();

        // Devuelve los datos en formato JSON
        return response()->json($contacto);
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
        // Validación de todos los campos que necesitas
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'empresa' => 'nullable|string|max:255',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string|max:500',
        ]);

        // Crear una nueva instancia del modelo Contacto
        $contacto = new Contacto();
        $contacto->nombre = $validatedData['nombre'];
        $contacto->email = $validatedData['email'];
        $contacto->empresa = $validatedData['empresa'] ?? null;  // El campo empresa es opcional
        $contacto->asunto = $validatedData['asunto'];
        $contacto->mensaje = $validatedData['mensaje'];
        $contacto->save();

        // Retornar una respuesta exitosa
        return response()->json(['message' => 'Mensaje enviado correctamente'], 201);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto = Contacto::find($id);
        return response()->json($contacto);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto = Contacto::findOrFail($id);
        return response()->json($contacto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'empresa' => 'nullable|string|max:255',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        // Buscar el contacto por ID
        $contacto = Contacto::findOrFail($id);

        // Actualizar los datos del contacto
        $contacto->nombre = $validatedData['nombre'];
        $contacto->email = $validatedData['email'];
        $contacto->empresa = $validatedData['empresa'];
        $contacto->asunto = $validatedData['asunto'];
        $contacto->mensaje = $validatedData['mensaje'];
        $contacto->save();

        // Devolver una respuesta exitosa
        return response()->json(['message' => 'Contacto actualizado correctamente']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();
        return response()->json(['message' => 'Contacto eliminado correctamente']);
    }
}
