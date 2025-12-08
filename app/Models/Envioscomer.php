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
  'tipo','direccion','fecha_entrega','nota','total','estado','usuario'
];
}
