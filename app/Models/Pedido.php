<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla
    protected $table = 'pedido';

    protected $fillable = [
        'nombre_pedido',
        'email_pedido',
        'telefono_pedido',
        'empresa_pedido',
        'cantidad',
        'tipo_fruta',
        'destino_pedido'
    ];
}
