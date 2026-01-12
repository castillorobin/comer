<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Envio;
use App\Models\Rutas;
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



        // Capturamos la fecha de hoy
    $hoy = \Carbon\Carbon::now()->format('Y-m-d');

    //dd($hoy);

    // Consulta base para los envíos de hoy del comercio autenticado
    $queryHoy = Envio::where('comercio', Auth::user()->name)
                     ->whereDate('fecha_entrega', $hoy);

    // 1. Totales para los widgets superiores
    $totales = [
        'todos'         => (clone $queryHoy)->count(),
        'entregados'    => (clone $queryHoy)->where('estado', 'Entregado')->count(),
        'no_entregados' => (clone $queryHoy)->where('estado', 'No entregado')->count(),
        'en_ruta'       => (clone $queryHoy)->where('estado', 'En ruta')->count(),
    ];

    $queryLista = (clone $queryHoy)->with('rutaPunto');

    // 2. Listados para las pestañas (Tabs)
    $enviosEntregados   = (clone $queryLista)->where('estado', 'Entregado')->get();
    $enviosNoEntregados = (clone $queryLista)->where('estado', 'No entregado')->get();
    $enviosEnRuta       = (clone $queryLista)->where('estado', 'En ruta')->get();

return view('pages.dashboards.index', compact('envios', 'notis', 'noLeidas', 'destinos', 'totales', 'enviosEntregados', 'enviosNoEntregados', 'enviosEnRuta'));


    }
}
