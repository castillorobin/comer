<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Envio;
use App\Models\Envioscomer;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Ticktpago;
use App\Models\Ticketc;
use App\Models\Entrega;
use Illuminate\Support\Facades\Auth;
use PDF; 
use Carbon\Carbon;
use App\Models\Hestado;
use App\Models\Comercio;
use App\Models\Rutas;
use App\Models\Agencia;
use App\Exports\EnviolistaExport;
use App\Exports\TicketlistaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Notificacion;
use App\Models\Destino;


use Imagick;


class EnvioController extends Controller
{

    public function inicio()
    {

        $puntos = Rutas::all();

        $comercio = Comercio::where('comercio', Auth::user()->name)->first();
        $agencias = Agencia::all();

        return view('guias.crearguia', compact('comercio', 'agencias', 'puntos'));
    }

    public function generadas(Request $request)
{
    $tz = 'America/El_Salvador';

    $comercio = Comercio::where('comercio', Auth::user()->name)->first();

    // Por defecto: hoy
    $rango = $request->get('rango', 'hoy');

    // Calculamos inicio/fin según selección
    $hoy = now($tz);

    switch ($rango) {
        case 'ayer':
            $inicio = $hoy->copy()->subDay()->startOfDay();
            $fin    = $hoy->copy()->subDay()->endOfDay();
            break;

        case 'ultimos7dias':
            $inicio = $hoy->copy()->subDays(6)->startOfDay(); // incluye hoy (7 días)
            $fin    = $hoy->copy()->endOfDay();
            break;

        case 'ultimos15dias':
            $inicio = $hoy->copy()->subDays(14)->startOfDay(); // incluye hoy (15 días)
            $fin    = $hoy->copy()->endOfDay();
            break;

        case 'hoy':
        default:
            $inicio = $hoy->copy()->startOfDay();
            $fin    = $hoy->copy()->endOfDay();
            break;
    }

    $envios = Envioscomer::where('comercio', $comercio->comercio)
    ->whereBetween('created_at', [$inicio, $fin])
    ->with('rutaPunto:id,punto') // solo lo necesario
    ->orderBy('created_at', 'desc')
    ->take(10)
    ->get();

    return view('guias.guiasgeneradas', compact('envios', 'comercio', 'rango'));
}

    public function reportelistapdf(Request $request)
    {
        $comercio = Comercio::where('comercio', Auth::user()->name)->first();
        $idticket = $request->input('ticketid');
        $envios = Envio::where('ticketc', $idticket)
                        ->orderBy('created_at', 'desc')
                        ->take(100)
                        ->get();

        $pdf = PDF::loadView('guias.exportarlistapdf', compact('envios', 'comercio'))->setPaper('letter', 'landscape');;

        //$customPaper = array(0,0,612,792,'landscape'); // Carta
        ///$pdf->setPaper($customPaper);

        return $pdf->stream();
    }
    public function reportelistaexcel(Request $request)
    {
         $idticket = $request->input('ticketid');

    $tickets = Envio::where('ticketc', $idticket)
        ->select(['guia','destinatario','direccion','tipo','estado','agenciaubi','created_at'])
        ->orderBy('created_at', 'desc')
        ->take(100)
        ->get();

    $filename = 'reporte_guias_' . now()->format('Ymd_His') . '.xlsx';

    return Excel::download(new EnviolistaExport($tickets), $filename);
}

public function reporteticketpdf(Request $request)
    {
        $comercio = Comercio::where('comercio', Auth::user()->name)->first();
        $idticket = $request->input('ticketid');

        $envios = Ticketc::where('comercio', $comercio->comercio)
                        ->where('created_at', '>=', Carbon::now()->subDays(7))
                        ->orderBy('created_at', 'desc')
                        ->take(100)
                        ->get();

        $pdf = PDF::loadView('guias.exportarticketpdf', compact('envios', 'comercio'))->setPaper('letter', 'landscape');;

        //$customPaper = array(0,0,612,792,'landscape'); // Carta
        ///$pdf->setPaper($customPaper);

        return $pdf->stream();
    }

    public function reporteticketexcel(Request $request)
    {
        $comercio = Comercio::where('comercio', Auth::user()->name)->first();
        $idticket = $request->input('ticketid');

       

       $tickets = Ticketc::where('comercio', $comercio->comercio)
       ->where('created_at', '>=', Carbon::now()->subDays(7))
        ->select(['codigo','created_at','estado'])
        ->orderBy('created_at', 'desc')
        ->take(100)
        ->get();

    $filename = 'reporte_tickets_' . now()->format('Ymd_His') . '.xlsx';

    return Excel::download(new TicketlistaExport($tickets), $filename);
    }




        


    


    public function mistickets()
    {
        $comercio = Comercio::where('comercio', Auth::user()->name)->first();
        $envios = Envio::where('comercio', Auth::user()->name)
                        ->orderBy('created_at', 'desc')
                        ->take(10)
                        ->get();
       $ticketpago = Ticketc::where('comercio', Auth::user()->name)
    ->where('created_at', '>=', now()->subDays(7)->startOfDay())
    ->orderBy('created_at', 'desc')
    ->take(10)
    ->get();

        return view('guias.mistickets', compact('envios', 'comercio', 'ticketpago'));
    }

    public function misenvios($id)
    {

        $comercio = Comercio::where('comercio', Auth::user()->name)->first();
        $envios = Envio::where('ticketc', $id)
        ->with('rutaPunto:id,punto') // solo lo necesario
                        ->orderBy('created_at', 'desc')
                        ->take(10)
                        ->get();

        return view('guias.guiaslista', compact('envios', 'comercio', 'id'));
    }

    public function filtrarestado(Request $request, $id)
{
    $comercio = Comercio::where('comercio', Auth::user()->name)->first();

    $query = Envio::where('ticketc', $id);

    // Si no viene "todos", aplico filtro por estado
    if ($request->filled('estado') && $request->estado !== 'todos') {
        $query->where('estado', $request->estado);
    }

    $envios = $query->orderBy('created_at', 'desc')
                    ->take(10)
                    ->get();

    return view('guias.guiaslista', compact('envios', 'comercio', 'id'));
}

    public function filtrarTicket(Request $request)
{
    $comercio = Comercio::where('comercio', Auth::user()->name)->first();
        

    $query = Ticketc::where('comercio', Auth::user()->name);

    if ($request->filled('rango')) {
        // "11/20/2025 - 12/04/2025"
        [$start, $end] = array_map('trim', explode('-', $request->rango));

        // OJO: el formato que viene es m/d/Y (11/20/2025)
        $startDate = Carbon::createFromFormat('m/d/Y', $start)->startOfDay();
        $endDate   = Carbon::createFromFormat('m/d/Y', $end)->endOfDay();

        // Si tu fecha real del pago es fechapago:
        $query->whereBetween('created_at', [$startDate, $endDate]);

        // Si en vez de fechapago quieres created_at, usa:
        // $query->whereBetween('created_at', [$startDate, $endDate]);
    }

    $ticketpago = $query->orderBy('created_at', 'desc')->take(10)->get();

    // Regresas la misma vista que lista tickets
    return view('guias.mistickets', compact('ticketpago' , 'comercio', ));
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


public function store(Request $request)
{

 
     //  dd('ENTRÓ', $request->all());
    $request->validate([
        'comercio' => 'required|string|max:255',
        'direccion_recolecta' => 'nullable|string|max:255',
        'destinatario' => 'required|string|max:255',
        'telefono' => 'nullable|string|max:30',
        'whatsapp' => 'nullable|string|max:30',
        'tipo' => 'required|in:Punto fijo,Personalizado,Personalizado departamental,Casillero',
        'punto' => 'nullable|required_if:tipo,Punto fijo',
        'agencia' => 'nullable|required_if:tipo,Casillero',
        'direccionp' => 'nullable|required_if:tipo,Personalizado|required_if:tipo,Personalizado departamental',
        'fecha_entrega' => 'nullable|date',
        'nota' => 'nullable|string',
        'total' => 'required|numeric|min:0',
    ]);

    // Armar la "direccion final" según el tipo
    $direccionFinal = null;

    if ($request->tipo === 'Punto fijo') {
        // Aquí puedes guardar el ID del punto o también traer el nombre del punto si quieres

        $direccionFinal =  $request->punto;
    } elseif ($request->tipo === 'Casillero') {
        $direccionFinal = $request->agencia;
    } else {
        $direccionFinal = $request->direccionp;
    }

    $envio = Envioscomer::create([
        'comercio' => $request->comercio,
        'dircomercio' => $request->direccion_recolecta,
        'destinatario' => $request->destinatario,
        'telefono' => $request->telefono,
        'whatsapp' => $request->whatsapp,
        'tipo' => $request->tipo,
        'direccion' => $direccionFinal,
        'fecha_entrega' => $request->fecha_entrega,
        'nota' => $request->nota,
        'total' => $request->total,
        'estado' => 'Creado', // o el estado inicial que uses
        'usuario' => Auth::user()->name, // si tienes ese campo
    ]);

    $envio->guia = 'MEL-C' . now()->year . '-' . $envio->id;
    $envio->save();

   

   // return redirect()->back()->with('success', 'Envío creado correctamente. ID: ' . $envio->id);

   
    // Si NO quiere imprimir, igual que hoy
    if ((int)$request->input('print', 0) !== 1) {
        $envio->estadoco = "Generada";
    $envio->save();
        return redirect()->back()->with('success', 'Envío creado correctamente. ID: ' . $envio->id);
    }

    if ($request->tipo === 'Punto fijo') {
        $direccionFinal = Rutas::where('id', $request->punto)->value('punto');
    }

    // Si sí quiere imprimir: armar data para tu plantilla
    // Ajusta estos textos fijos si quieres (origen por ejemplo).
    $envio->estadoco = "Impresa";
    $envio->save();
    $guia = (object)[
        // Si tienes un campo "codigo/guia" úsalo aquí. Si no, puedes usar el ID con prefijo:
        'codigo'            => $envio->guia,

        'comercio'          => $envio->comercio,

        // En tu form esto es recolecta (origen)
        'origen_direccion'  => $envio->dircomercio ?? 'AGENCIA METROGALERIA',
        'origen_tel'        => $envio->telefono,
        'origen_wa'         => $envio->whatsapp,

        'destinatario'      => $envio->destinatario,
        // En tu tabla "direccion" es la entrega final (punto/agencia/direccionp)
        'entrega_direccion' => $direccionFinal,
        'dest_tel'          => $envio->telefono,
        'dest_wa'           => $envio->whatsapp,
        'tipo'              => $envio->tipo ?? '',

        'nota'              => $envio->nota ?? '',
        'total_cobrar'      => $envio->total ?? 0,

        // QR: puede ser el mismo código o un link si luego tienes tracking
        'qr_text'           => $envio->guia,
    ];

    $pdf = PDF::loadView('guias.ticket', compact('guia'));

    $customPaper = [0, 0, 250, 600];
    $pdf->setPaper($customPaper);

    // Abre el PDF en el navegador (más cómodo para imprimir)
    return $pdf->stream('ticket-'.$guia->codigo.'.pdf');

    // Si prefieres descarga directa:
    // return $pdf->download('ticket-'.$guia->codigo.'.pdf');



}
public function print($id)
{
    $envio = Envioscomer::findOrFail($id);
    // Armar la "direccion final" según el tipo
    $direccionFinal = null;
 if ($envio->tipo === 'Punto fijo') {
 
        $direccionFinal = Rutas::where('id', $envio->direccion)->value('punto');
         
    } else {
        $direccionFinal = $envio->direccion;
    }

   

    // Armar data para tu plantilla
    $guia = (object)[
        'codigo'            => $envio->guia,
        'comercio'          => $envio->comercio,
        'origen_direccion'  => $envio->dircomercio ?? 'AGENCIA METROGALERIA',
        'origen_tel'        => $envio->telefono,
        'origen_wa'         => $envio->whatsapp,
        'destinatario'      => $envio->destinatario,
        'entrega_direccion' => $direccionFinal,
        'dest_tel'          => $envio->telefono,
        'dest_wa'           => $envio->whatsapp,
        'tipo'              => $envio->tipo ?? '',
        'nota'              => $envio->nota ?? '',
        'total_cobrar'      => $envio->total ?? 0,
        'qr_text'           => $envio->guia,
    ];

    $envio->estadoco = "Impresa";
    $envio->save();

    $pdf = PDF::loadView('guias.ticket', compact('guia'));

    

    $customPaper = [0, 0, 250, 600];
    $pdf->setPaper($customPaper);

    return $pdf->stream('ticket-'.$guia->codigo.'.pdf');
    }

    public function imprimirti(Request $request)
    {
        $ticketnum = $request->get('idticket');
        

       // $ticketc = Ticketc::find($ticketnum);

        $ticketact = Ticketc::where('codigo', $ticketnum)
        ->get();
       // dd( $ticketnum);

        $pdf = PDF::loadView('guias.ticketpagos', ['ticketact'=>$ticketact]);
        //return view('envios.ticketpagos');
        $customPaper = array(0,0,360,650);
        //$pdf->setPaper('b6', 'portrait');
        $pdf->setPaper($customPaper );
        return $pdf->stream();

    }

    public function compartir($id)
    {
        $envio = Envioscomer::findOrFail($id);

        // Nombre base de archivos (PDF/PNG)
        $baseName = 'guia_' . $envio->id;
        $pdfPath  = 'guias/' . $baseName . '.pdf';
        $pngPath  = 'guias/' . $baseName . '.png';

            $direccionFinal = null;
 if ($envio->tipo === 'Punto fijo') {
 
        $direccionFinal = Rutas::where('id', $envio->direccion)->value('punto');
         
    } else {
        $direccionFinal = $envio->direccion;
    }


        $guia = (object)[
        'codigo'            => $envio->guia,
        'comercio'          => $envio->comercio,
        'origen_direccion'  => $envio->dircomercio ?? 'AGENCIA METROGALERIA',
        'origen_tel'        => $envio->telefono,
        'origen_wa'         => $envio->whatsapp,
        'destinatario'      => $envio->destinatario,
        'entrega_direccion' => $direccionFinal,
        'dest_tel'          => $envio->telefono,
        'dest_wa'           => $envio->whatsapp,
        'tipo'              => $envio->tipo ?? '',
        'nota'              => $envio->nota ?? '',
        'total_cobrar'      => $envio->total ?? 0,
        'qr_text'           => $envio->guia,
    ];


        // 1) Generar el PDF (solo si aún no existe guardado)
        if (!Storage::disk('public')->exists($pdfPath)) {
             $pdf = PDF::loadView('guias.ticket', compact('guia'));
            $customPaper = [0, 0, 250, 600];
    $pdf->setPaper($customPaper);

            Storage::disk('public')->put($pdfPath, $pdf->output());
        }

        // 2) Generar la imagen PNG desde el PDF (solo si no existe)
        if (!Storage::disk('public')->exists($pngPath)) {
            $pdfFullPath = Storage::disk('public')->path($pdfPath);

            $imagick = new \Imagick();

            // Leer el PDF (solo la primera página: [0])
            $imagick->setResolution(150, 150);      // calidad
            $imagick->readImage($pdfFullPath . '[0]');
            $imagick->setImageFormat('png');
            $imagick->setImageCompressionQuality(90);

            $imageBlob = $imagick->getImageBlob();
            $imagick->clear();
            $imagick->destroy();

            Storage::disk('public')->put($pngPath, $imageBlob);
        }

        // 3) Obtener URL pública de la imagen
        $imageUrl = asset('storage/' . $pngPath);

        // 4) Armar el mensaje de WhatsApp
        $mensaje = "Hola! Te saludamos de Melo Express, aqui te compartimos la guía: {$envio->guia} \n{$imageUrl}";

        // 5) URL de WhatsApp con mensaje prellenado
        $whatsUrl = 'https://api.whatsapp.com/send?text=' . urlencode($mensaje);

        // 6) Redirigir a WhatsApp
        return redirect()->away($whatsUrl);
    }
    public function compartirticket($id)
    {
        $ticket = Ticketc::findOrFail($id);

        // Nombre base de archivos (PDF/PNG)
        $baseName = 'ticket_' . $ticket->codigo;
        $pdfPath  = 'tickets/' . $baseName . '.pdf';
        $pngPath  = 'tickets/' . $baseName . '.png';

        $ticketact = Ticketc::where('codigo', $ticket->codigo)
        ->get();

        // 1) Generar el PDF (solo si aún no existe guardado)
        if (!Storage::disk('public')->exists($pdfPath)) {
             $pdf = PDF::loadView('guias.ticketpagos', ['ticketact'=>$ticketact]);
            $customPaper = array(0,0,360,650);
            $pdf->setPaper($customPaper );

            Storage::disk('public')->put($pdfPath, $pdf->output());
        }

        // 2) Generar la imagen PNG desde el PDF (solo si no existe)
        if (!Storage::disk('public')->exists($pngPath)) {
            $pdfFullPath = Storage::disk('public')->path($pdfPath);

            $imagick = new \Imagick();

            // Leer el PDF (solo la primera página: [0])
            $imagick->setResolution(150, 150);      // calidad
            $imagick->readImage($pdfFullPath . '[0]');
            $imagick->setImageFormat('png');
            $imagick->setImageCompressionQuality(90);

            $imageBlob = $imagick->getImageBlob();
            $imagick->clear();
            $imagick->destroy();

            Storage::disk('public')->put($pngPath, $imageBlob);
        }

        // 3) Obtener URL pública de la imagen
        $imageUrl = asset('storage/' . $pngPath);

        // 4) Armar el mensaje de WhatsApp
        $mensaje = "Hola! Te saludamos de Melo Express, aqui te compartimos el ticket: {$ticket->codigo} \n{$imageUrl}";

        // 5) URL de WhatsApp con mensaje prellenado
        $whatsUrl = 'https://api.whatsapp.com/send?text=' . urlencode($mensaje);

        // 6) Redirigir a WhatsApp
        return redirect()->away($whatsUrl);
    }
    public function notificaciones(Request $request)
{
    $comercio = Comercio::where('comercio', Auth::user()->name)->first();

    $rango = $request->get('rango', 'hoy');

    if ($rango === 'ayer') {
        $inicio = Carbon::yesterday()->startOfDay();
        $fin    = Carbon::yesterday()->endOfDay();
    } else { // hoy
        $inicio = Carbon::today()->startOfDay();
        $fin    = Carbon::today()->endOfDay();
    }

    $inicio2 = Carbon::today()->startOfDay();
    $fin2   = Carbon::today()->endOfDay();

    $notificaciones = Notificacion::with('ruta')
        ->whereBetween('created_at', [$inicio, $fin])
        ->orderBy('created_at', 'desc')
        ->get();
    
    $notis = Notificacion::with('ruta')
        ->whereBetween('created_at', [$inicio2, $fin2])
        ->orderBy('created_at', 'desc')
        ->get();

        $noLeidas = Notificacion::where('leida', false)
    ->whereBetween('created_at', [$inicio2, $fin2])   // si querés solo hoy
    ->count();

    return view('guias.notificaciones', compact('comercio', 'notificaciones', 'rango', 'notis', 'noLeidas'));
}

public function marcarLeidas(Request $request)
{

  
    Notificacion::where('leida', false)
        ->whereDate('created_at', now()) // si solo quieres hoy
        ->update([
            'leida' => true,
            'leida_at' => now(),
        ]);

    return response()->json(['ok' => true]);
}




    
public function compartirGuia($id)
{
    $envio = \App\Models\Envio::findOrFail($id);
    $guia  = (string) $envio->guia;

    // Donde se guardará la imagen final
    $dir      = "whatsapp/guias";
    $fileName = $guia . ".png";
    $path     = "{$dir}/{$fileName}";

    // 1) Si ya existe, solo comparte (evita regenerar)
    if (!Storage::disk('public')->exists($path)) {

        // --- Generar QR como PNG (base64 -> binario) ---
        // Ajusta tamaños a tu gusto
        $qrBase64 = \DNS2D::getBarcodePNG($guia, 'QRCODE', 8, 8);
        $qrBinary = base64_decode($qrBase64);

        // --- Generar código de barras 1D como PNG ---
        // C128 suele aceptar letras/números con buena compatibilidad
        $barBase64 = \DNS1D::getBarcodePNG($guia, 'C128', 2, 80);
        $barBinary = base64_decode($barBase64);

        // --- Crear canvas y “armar” diseño ---
        $manager = new ImageManager(new Driver());

        // Tamaño aproximado como tu ejemplo
        $canvas = $manager->create(600, 700)->fill('#ffffff');

        // Logo (si lo tienes en public/fotos/logomelo.png)
        // Ojo: asset() es URL, aquí ocupamos path físico
        $logoPath = public_path('fotos/logomelonegro.png');
        if (file_exists($logoPath)) {
            $logo = $manager->read($logoPath)->scale(width: 140);
            $canvas->place($logo, 'top-left', 40, 30);
        }

        // Texto
        // (si tu versión de Intervention no soporta font() así,
        // te lo adapto; pero normalmente funciona)
        $canvas->text('Tu número de guía', 300, 130, function ($font) {
    $font->file(public_path('fonts/Inter-Regular.ttf'));
    $font->size(42); // sube más
    $font->color('#111111');
    $font->align('center');
    $font->valign('top');
});

        $canvas->text($guia, 300, 175, function ($font) {
            $font->file(public_path('fonts/Inter-Bold.ttf'));
            $font->size(34);
            $font->color('#111111');
            $font->align('center');
            $font->valign('top');
        });

        // QR centrado
        $qrImg = $manager->read($qrBinary)->scale(width: 230);
        $canvas->place($qrImg, 'top-center', 0, 250);

        // Barcode centrado
        $barImg = $manager->read($barBinary)->scale(width: 420);
        $canvas->place($barImg, 'top-center', 0, 510);

        // Texto del barcode debajo (solo si quieres)
        $canvas->text($guia, 300, 645, function ($font) {
          $font->file(public_path('fonts/Inter-Bold.ttf'));
            $font->size(20);
            $font->color('#111111');
            $font->align('center');
            $font->valign('top');
        });

        // Guardar en storage public
        Storage::disk('public')->put($path, (string) $canvas->toPng());
    }

    // URL pública para compartir
    $imageUrl = asset("storage/{$path}");

    // WhatsApp share: solo abre chat con texto + link a la imagen
    $text = "Tu guía: {$guia}\n{$imageUrl}";
    $waUrl = "https://wa.me/?text=" . urlencode($text);

    return redirect()->away($waUrl);
}

public function destinos()
{
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
        ->whereBetween('created_at', [$inicio2, $fin2])
        ->orderBy('created_at', 'desc')
        ->get();



    return view('guias.destinos', compact('notis', 'noLeidas', 'destinos'));

  
}


public function compartirDestino($id)
{
    $destino = Destino::with('ruta')->findOrFail($id);
    
    // Configuración de archivo
    $dir = "whatsapp/destinos";
    $fileName = "destino_" . $id . ".png";
    $path = "{$dir}/{$fileName}";

    // 1) Generar imagen si no existe
    if (!Storage::disk('public')->exists($path)) {
        
        $manager = new ImageManager(new Driver());
        // Creamos un canvas más alto para que quepa todo el texto cómodamente
        $canvas = $manager->create(600, 700)->fill('#ffffff');

        // --- 1. Logo Centrado ---
        $logoPath = public_path('fotos/logoticket.jpeg');
        if (file_exists($logoPath)) {
            $logo = $manager->read($logoPath)->scale(width: 250);
            $canvas->place($logo, 'top-center', 0, 40);
        }

        // --- 2. Texto de Saludo ---
       // $saludo = "¡Hola! Te saludamos de Melo Express,\nte compartimos nuestro punto de entrega:";
        /*
        $canvas->text($saludo, 300, 220, function ($font) {
            $font->file(public_path('fonts/Inter-Regular.ttf'));
            $font->size(22);
            $font->color('#444444');
            $font->align('center');
            $font->lineHeight(1.5);
        });
        */

        // --- 3. Punto de Entrega (Título) ---
        $puntoNombre = $destino->ruta->punto ?? 'Sin punto';
        $canvas->text(strtoupper($puntoNombre), 60, 220, function ($font) {
            $font->file(public_path('fonts/Inter-Bold.ttf'));
            $font->size(25);
            $font->color('#111111');
            
        });

        // --- 4. Detalles (Horas y Lugar) ---
        // Dibujamos una línea separadora opcional
        /*
        $canvas->drawRectangle(50, 380, function ($draw) {
            $draw->background('#5083bd');
            $draw->size(500, 2);
        });
        */

        $yPos = 300;
        $detalles = [
            ['label' => 'Hora de llegada:', 'value' => $destino->hora_llegada_ampm],
            ['label' => 'Hora de retirada:', 'value' => $destino->hora_retirada_ampm],
            ['label' => 'Lugar de entrega:', 'value' => $destino->lugar_entrega],
        ];

        foreach ($detalles as $item) {
            // Etiqueta (Label)
            $canvas->text($item['label'], 60, $yPos, function ($font) {
                $font->file(public_path('fonts/Inter-Bold.ttf'));
                $font->size(20);
                $font->color('#000000ff');
            });
            // Valor
            $canvas->text($item['value'], 250, $yPos, function ($font) {
                $font->file(public_path('fonts/Inter-Regular.ttf'));
                $font->size(22);
                $font->color('#000000ff');
            });
            $yPos += 40;
        }

        // --- 5. Días de Entrega ---
        $canvas->text("Días de entrega:", 60, $yPos + 40, function ($font) {
            $font->file(public_path('fonts/Inter-Bold.ttf'));
            $font->size(20);
        });

        $canvas->text($destino->dias, 60, $yPos + 80, function ($font) {
            $font->file(public_path('fonts/Inter-Bold.ttf'));
            $font->size(28);
            $font->color('#000000ff');
        });

        // Guardar la imagen
        Storage::disk('public')->put($path, (string) $canvas->toPng());
    }

    // 2) Preparar Link de WhatsApp
    $imageUrl = asset("storage/{$path}");
    $mensajeWa = "Hola! Te saludamos de Melo Express, te compartimos nuestro punto de entrega:\n\n" . $imageUrl;
    
    $waUrl = "https://wa.me/?text=" . urlencode($mensajeWa);

    return redirect()->away($waUrl);
}






}
