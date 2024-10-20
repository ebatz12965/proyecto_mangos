<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        // Obtener todos los pedidos
        $pedido = Pedido::all();

        // Retornar los pedidos como respuesta JSON
        return response()->json($pedido);
    }

    // Método para mostrar el formulario
    public function create()
    {
        return view('pedido.create'); // Apunta a una vista llamada 'create.blade.php'
    }

    // Método para manejar el envío del formulario
    public function store(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'nombre_pedido' => 'required',
            'email_pedido' => 'required|email',
            'telefono_pedido' => 'required',
            'empresa_pedido' => 'required',
            'cantidad' => 'required|integer',
            'tipo_fruta' => 'required',
            'destino_pedido' => 'required',
        ]);

        // Crear un nuevo pedido
        Pedido::create([
            'nombre_pedido' => $request->nombre_pedido,
            'email_pedido' => $request->email_pedido,
            'telefono_pedido' => $request->telefono_pedido,
            'empresa_pedido' => $request->empresa_pedido,
            'cantidad' => $request->cantidad,
            'tipo_fruta' => $request->tipo_fruta,
            'destino_pedido' => $request->destino_pedido,
        ]);

        // Redirigir después de guardar el pedido
        return redirect()->route('pedido.create')->with('success', 'Pedido creado exitosamente.');
    }
}
