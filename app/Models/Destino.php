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

public function getHoraLlegadaHmAttribute()
{
    return $this->hora_llegada
        ? \Carbon\Carbon::createFromFormat('H:i:s', $this->hora_llegada)->format('H:i')
        : null;
}

public function getHoraRetiradaHmAttribute()
{
    return $this->hora_retirada
        ? \Carbon\Carbon::createFromFormat('H:i:s', $this->hora_retirada)->format('H:i')
        : null;

}
}
