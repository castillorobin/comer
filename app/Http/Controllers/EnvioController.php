<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Envio;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Ticktpago;
use App\Models\Entrega;
use Illuminate\Support\Facades\Auth;
use PDF; 
use Carbon\Carbon;
use App\Models\Hestado;

class EnvioController extends Controller
{

    public function inicio()
    {
        return view('guias.crearguia');
    }

    public function cambiarEstado(Request $request)
    { 
        $request->validate([
            'guia' => 'required|string|exists:envios,guia', 
            'estado' => 'required|string',
            'nota' => 'nullable|string',
            'nota_repartidor' => 'nullable|string',
            'fecha_reprogramado' => 'nullable|date_format:Y-m-d'
        ]);

        $envio = Envio::where('guia', $request->guia)->firstOrFail(); 
        $envio->estado = $request->estado;
        $envio->nota = $request->nota;
        $envio->nota_repartidor = $request->nota_repartidor;

        if ($request->filled('fecha_reprogramado')) {
            $envio->fecha_reprogramado = $request->fecha_reprogramado;
        } else {
            $envio->fecha_reprogramado = null;
        }

        $envio->save();

        return response()->json(['success' => true, 'message' => 'Estado actualizado correctamente']);
    }

    public function entregarenvio()
    {
        return view('entregar.entregar');
    }

    public function noentregados()
    {
         $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('envios.noentregados', compact('empleado'));
      
    }

    public function buscar(Request $request)
{
    $codigo = $request->get('codigo');
    //dd( $codigo);
    $envio = Envio::where('guia', $codigo)->get();
    


    if ($envio->isEmpty()) {
        return redirect()->back()->with('error', 'Guia ingresada no existe.');
    }
    $comercio = \DB::table('comercios')->where('comercio', $envio[0]->comercio)->first();
    $empleado = Empleado::where('nombre', Auth::user()->name)->get();

    return view('entregar.detalle', compact('envio', 'comercio', 'empleado'));
}
public function guardandocambio(Request $request)
{


$guia = $request->input('guia'); // o el nombre que uses para identificar el envío

    if ($request->filled('foto_entrega')) {
        $imageData = $request->input('foto_entrega');
        $image = str_replace('data:image/png;base64,', '', $imageData);
        $image = str_replace(' ', '+', $image);
        $imageName = 'entrega_' . $guia . '_' . time() . '.png';

        \Storage::disk('public')->put('fotos/' . $imageName, base64_decode($image));

        \DB::table('envios')->where('guia', $guia)->update([
            'fotocambio' => $imageName,
            'updated_at' => now()
        ]);
    }

    // resto de la lógica de entrega...
    //return redirect()->back()->with('success', 'Entrega completada correctamente.');
    return view('entregar.entregar');
    }

    public function guardarCambio(Request $request)
{
    $guia = $request->input('guia');
    $guiacambio = $request->input('guiacambio');

    $fotoBase64 = $request->input('foto_cambio');

    if (!$guia) {
        return back()->with('error', 'Debe escanear una guía antes de guardar.');
    }

    $updateData = ['updated_at' => now()];

    if ($fotoBase64) {
        $image = str_replace('data:image/png;base64,', '', $fotoBase64);
        $image = str_replace(' ', '+', $image);
        $imageName = 'cambio_' . time() . '.png';
        \Storage::disk('public')->put('fotos/' . $imageName, base64_decode($image));

        $updateData['fotocambio'] = $imageName;
        $updateData['guiacambio'] = $guia;
    }

    // Actualiza el registro
    \DB::table('envios')->where('guia', $guiacambio)->update($updateData);

    //return view('entregar.entregar');
    return redirect()->back()->with('success', 'Cambio completado correctamente.');
}

public function guardarEntrega(Request $request)
{
    $guia = $request->input('guiaentrega');
    $total = $request->input('tota');
    $subtotal = $request->input('stota');
    $descuento = $request->input('descuento');
    $metodo = $request->input('metodo');
    $nota = $request->input('nota');
    $recibido = $request->input('recibido');
    $cambio = $request->input('cambio');
    $agencia = $request->input('agencia');

    $fotoBase64 = $request->input('foto_entrega');


    if (!$guia) {
        return back()->with('error', 'No se recibió la guía del envío.');
    }

    // Buscar el envío
    $envios = \DB::table('envios')->where('guia', $guia)->first();

    if (!$envios) {
        return back()->with('error', 'No se encontró el envío con la guía proporcionada.');
    }

/*    
   
    $ticketact = new Ticktpago();
        $ticketact->userpago = Auth::user()->name;
        $ticketact->cajero = Auth::user()->name;
        $ticketact->fechapago = Carbon::now();
        $ticketact->estado = "Pagado";
        $ticketact->metodo = $metodo;
        $ticketact->subtotal = $subtotal;
        $ticketact->descuento = $descuento;
        $ticketact->total = $total;
        $ticketact->nota = $nota;
        $ticketact->entrega = $recibido;
        $ticketact->cambio = $cambio;
        $ticketact->agencia = $agencia;
        $ticketact->comercio = $envios->comercio;
        $ticketact->save();
*/


        $entrega = new Entrega();
    $entrega->cajero = Auth::user()->name;
    $entrega->metodo = $metodo;
    $entrega->nota = $nota;
    $entrega->total = $total;
    $entrega->desceunto = $descuento;
    $entrega->subtotal = $subtotal;
    $entrega->entrega = $recibido;
    $entrega->cambio = $cambio;
    $entrega->agencia = $agencia;
    $entrega->save();


 $updateData = [
        'estado' => 'Entregado',
        //'fecha_entrega' => now(),
        'entrega2' => $entrega->id,
        'updated_at' => now(),
    ];

    // Si hay una foto base64, guardarla en el storage
    if ($fotoBase64) {
        $image = str_replace('data:image/png;base64,', '', $fotoBase64);
        $image = str_replace(' ', '+', $image);
        $imageName = 'entrega_' . time() . '.png';

        \Storage::disk('public')->put('fotos/' . $imageName, base64_decode($image));

        $updateData['fotoentrega'] = $imageName;
    }

// Actualizar el registro
    \DB::table('envios')->where('guia', $guia)->update($updateData);


$ticketact = Entrega::where('id', $entrega->id)
        ->get();
        $envios = Envio::where('entrega2', $entrega->id)
        ->get();

       $pdf = PDF::loadView('entregar.ticketentrega', ['ticketact'=>$ticketact, 'envios'=>$envios]);
       
        $customPaper = array(0,0,360,850);
       
        $pdf->setPaper($customPaper );
        return $pdf->stream();

    //return redirect()->route('entregarenvio')->with('success', 'Entrega registrada correctamente.');
}

    public function entregarenlote()
    {
         $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('entregar.entregarenlote', compact('empleado'));
    }

    public function buscarEnvio($guia)
{
    $envio = \DB::table('envios')->where('guia', $guia)->first();
    if (!$envio) {
        return response()->json(['error' => 'Guia no encontrada'], 404);
    }
    return response()->json($envio);
}


public function guardarLote(Request $request)
{
    $guias = json_decode($request->input('guias'), true);
    $total = $request->input('total');
    $descuento = $request->input('descuento');
    $metodo = $request->input('metodo');
    $nota = $request->input('nota');
    $subtotal = $request->input('subtotal');
    //dd( $subtotal);
    $recibido = $request->input('recibido');
    $cambio = $request->input('cambio');
    $agencia = $request->input('agencia');

    $entrega = new Entrega();
    $entrega->cajero = Auth::user()->name;
    $entrega->metodo = $metodo;
    $entrega->nota = $nota;
    $entrega->total = $total;
    $entrega->desceunto = $descuento;
    $entrega->subtotal = $subtotal;
    $entrega->entrega = $recibido;
    $entrega->cambio = $cambio;
    $entrega->agencia = $agencia;
    $entrega->save();

    foreach ($guias as $guia) {
        \DB::table('envios')->where('guia', $guia)->update([
            'estado' => 'Entregado',
            'entrega2' => $entrega->id,
            
        ]);
    }

$ticketact = Entrega::where('id', $entrega->id)
        ->get();
        $envios = Envio::where('entrega2', $entrega->id)
        ->get();

        
    
    
    $pdf = PDF::loadView('entregar.ticketentrega', ['ticketact'=>$ticketact, 'envios'=>$envios]);

        $customPaper = array(0,0,360,850);
       
        $pdf->setPaper($customPaper );
        return $pdf->stream();

   // return redirect()->back()->with('success', 'Entrega en lote registrada correctamente.');
}

public function verificarGuia(Request $request)
{
    $codigo = $request->codigo;

    $envio = Envio::where('guia', $codigo)->first();

    if (!$envio) {
        return response()->json([
            'exists' => false,
            'message' => 'No existe el envío'
        ]);
    }

    if ($envio->estado === "Entregado") {
        return response()->json([
            'exists' => true,
            'entregado' => true,
            'message' => 'Este envío ya fue entregado'
        ]);
    }

    return response()->json([
        'exists' => true,
        'entregado' => false
    ]);
}



    public function verificar(Request $request)
    {
        $guia = $request->guia;

        $envio = Envio::where('guia', $guia)->first();

        if (!$envio) {
            return response()->json(['exists' => false]);
        }

        return response()->json([
            'exists' => true,
            'envio'  => $envio
        ]);
    }


    public function actualizarLote(Request $request)
    {
         $guias = json_decode($request->guias, true);

    if (!$guias || !is_array($guias)) {
        return back()->with('error', 'No se recibieron guías válidas.');
    }

    foreach ($guias as $guia) {

        $envio = Envio::where('guia', $guia)->first();
        if (!$envio) continue;

        $envio->estado = "No entregado";
        $envio->ubicacion = $request->ubicacion;
        $envio->save();

        Hestado::create([
            'idenvio' => $envio->id,
            'estado' => "No entregado",
            'usuario' => auth()->user()->name
        ]);
    }

    return back()->with('success', 'Envíos actualizados correctamente.');
    }

    public function verificarEntregaMultiple(Request $request)
{
    $codigo = $request->codigo;

    $envio = Envio::where('guia', $codigo)->first();

    if (!$envio) {
        return response()->json([
            'exists' => false,
            'message' => 'No existe este envío.'
        ]);
    }

    if ($envio->estado === 'Entregado') {
        return response()->json([
            'exists' => true,
            'entregado' => true,
            'message' => 'Este envío ya fue entregado.'
        ]);
    }

    return response()->json([
        'exists' => true,
        'entregado' => false,
        'envio' => $envio
    ]);
}




}
