<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'tipo_lugar',
        'lugar',
        'fecha_cobro',
        'nota',
        // 'user_id', // Descoméntalo si decides usarlo después
    ];
}
