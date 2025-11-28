<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Envio;
use App\Models\Empleado;

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
 
return view('pages.dashboards.index', compact('envios'));


    }
}
