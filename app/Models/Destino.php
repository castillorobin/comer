<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    
    public function ruta()
{
    return $this->belongsTo(Rutas::class, 'punto'); // 'punto' = FK en notificaciones
}

public function getHoraLlegadaAmpmAttribute()
{
    return $this->hora_llegada
        ? \Carbon\Carbon::parse($this->hora_llegada)->format('g:i A')
        : null;
}

public function getHoraRetiradaAmpmAttribute()
{
    return $this->hora_retirada
        ? \Carbon\Carbon::parse($this->hora_retirada)->format('g:i A')
        : null;

}
}
