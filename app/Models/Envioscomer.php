<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envioscomer extends Model
{
    use HasFactory;
     protected $table = 'envioscomer';
      protected $fillable = [
  'comercio','dircomercio','destinatario','telefono','whatsapp',
  'tipo','direccion','fecha_entrega','nota','total','estado','usuario', 'estadoco','guia'
];

// Si el campo "direccion" guarda el ID de rutas cuando es Punto fijo:
    public function rutaPunto()
    {
        return $this->belongsTo(Rutas::class, 'direccion'); // direccion = rutas.id
    }

    public function getDireccionMostrarAttribute()
    {
        // si es Punto fijo => mostrar el nombre del punto en rutas
        if ($this->tipo === 'Punto fijo') {
            return optional($this->rutaPunto)->punto ?? $this->direccion; // fallback
        }

        // si es personalizado => mostrar tal cual
        return $this->direccion;
    }
}
