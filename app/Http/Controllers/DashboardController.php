<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Envio;
use App\Models\Empleado;
use App\Models\Notificacion;
use App\Models\Destino;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        $empleado = Empleado::where('nombre', Auth::user()->name)->first();

if (!$empleado) {
    $envios = collect(); // vacío si no existe
} else {
    $envios = $empleado->envios; // ← obtiene TODOS los envíos relacionados
}

$inicio2 = Carbon::today()->startOfDay();
    $fin2   = Carbon::today()->endOfDay();

  
    
    $notis = Notificacion::with('ruta')
        ->whereBetween('created_at', [$inicio2, $fin2])
        ->orderBy('created_at', 'desc')
        ->get();

        $noLeidas = Notificacion::where('leida', false)
    ->whereBetween('created_at', [$inicio2, $fin2])   // si querés solo hoy
    ->count();

    $destinos = Destino::with('ruta')
        
        ->orderBy('created_at', 'desc')
        ->get();

return view('pages.dashboards.index', compact('envios', 'notis', 'noLeidas', 'destinos'));


    }
}
