<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $fillable = [
    'tipo',
    'placa',
    'color',
    'tipocarro',
    'punto',
    'nota',
    'horallegada',
    'horasalida',
    'foto1',
    'foto2',
    'foto3',
    'leida','leida_at',
];

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

public function getHorasalidaHmAttribute()
{
    return $this->horasalida
        ? \Carbon\Carbon::createFromFormat('H:i:s', $this->horasalida)->format('H:i')
        : null;
}

}
