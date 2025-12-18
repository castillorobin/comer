<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    public function ruta()
{
    return $this->belongsTo(Rutas::class, 'punto'); // 'punto' = FK en notificaciones
}

public function getHorallegadaHmAttribute()
{
    return $this->horallegada
        ? \Carbon\Carbon::createFromFormat('H:i:s', $this->horallegada)->format('H:i')
        : null;
}

}
