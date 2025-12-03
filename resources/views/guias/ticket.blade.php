<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Guía</title>

  <style>
    /* Ajusta a tu impresora:
       - 80mm suele ser ~ 72-76mm útiles según márgenes.
       - Prueba 76mm o 72mm si te corta. */
    @page { margin: 0; }
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      color: #000;
    }

    .ticket {
      width: 80mm;
      padding: 6mm 5mm;
      box-sizing: border-box;
    }

    .center { text-align: center; }
    .bold { font-weight: 700; }
    .sm { font-size: 11px; }
    .md { font-size: 12px; }
    .lg { font-size: 14px; }

    .sep {
      border: 0;
      border-top: 1px solid #000;
      margin: 6px 0;
    }

    .row {
      display: flex;
      gap: 8px;
      align-items: flex-start;
      justify-content: space-between;
    }

    .col {
      flex: 1;
      min-width: 0;
    }

    .label { font-weight: 700; }
    .value { font-weight: 400; }

    .kv { margin: 2px 0; line-height: 1.15; }

    .qr {
      width: 28mm;
      height: 28mm;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 0;
    }

    .barcode {
      margin-top: 8px;
      text-align: center;
    }

    /* evita que algunos navegadores reduzcan el tamaño al imprimir */
    * { -webkit-print-color-adjust: exact; print-color-adjust: exact; }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      if (window.print) window.print();
    });
  </script>
</head>

<body>
@php
  // Si te llega como $ticketact[0], puedes mapear aquí o pasar $guia ya listo desde el controlador.
  // Ejemplo de campos esperados:
  // $guia->codigo, $guia->comercio, $guia->origen_direccion, $guia->origen_tel, $guia->origen_wa,
  // $guia->destinatario, $guia->entrega_direccion, $guia->dest_tel, $guia->dest_wa,
  // $guia->nota, $guia->total_cobrar, $guia->qr_text (opcional)
@endphp

<div class="ticket">

  {{-- Header --}}
  <div class="center">
    {{-- Ajusta ruta del logo según tu proyecto --}}
    <img src="../public/fotos/logoticket.jpeg" alt="Melo Express" style="max-width: 55mm; height: auto;">
  

    <div class="sm" style="margin-top: 6px;">
      <div class="bold">www.meloexpress.com.sv</div>
      <div>Centro Comercial Metrogaleria local 3-9</div>
    </div>

    <div class="md bold" style="margin-top: 6px;">
      7164 4480 - 2233 8690
    </div>
  </div>

<br>

  {{-- Guia + QR --}}
  <table style="width:100%; border-collapse:collapse;">
  <tr>
    <td style="vertical-align:top; width:70%;">
      <div class="kv md">
        <span class="label">Guía:</span>
        <span class="value">{{ $guia->codigo ?? '' }}</span>
      </div>

      <div class="kv md" style="margin-top:4px;">
        <span class="label">Comercio:</span>
        <span class="value">{{ $guia->comercio ?? '' }}</span>
      </div>

      <div class="kv md" style="margin-top:4px;">
        <span class="label">Dirección de origen:</span>
        <span class="value"> {{ $guia->origen_direccion ?? '' }}</span>
      </div>
      <div class="kv md" style="margin-top:4px;">
        <span class="label">Dirección de origen:</span>
        <span class="value"> {{ $guia->origen_direccion ?? '' }}</span>
      </div>
      <div class="kv md" style="margin-top:4px;">
        <span class="label">Teléfono de origen:</span> <br>
        <span class="value"> {{ $guia->origen_tel ?? '' }}</span>
      </div>
      <div class="kv md" style="margin-top:4px;">
        <span class="label">WhatsApp de origen:</span> <br>
        <span class="value"> {{ $guia->origen_wa ?? '' }}</span>
      </div>

    </td>


    <td style="vertical-align:top; width:30%; text-align:right;">
      <div style="display:inline-block;">
        {!! DNS2D::getBarcodeHTML((string)($guia->codigo ?? ''), 'QRCODE', 4, 4) !!}
      </div>
    </td>


  </tr>
</table>


  <hr class="sep">

  {{-- Destinatario --}}
  <div class="md bold" style="margin-bottom: 3px;">Destinatario:</div>
  <div class="md" style="margin-bottom: 6px;">
    <span class="value bold">{{ $guia->destinatario ?? '' }}</span>
  </div>

  <div class="md bold" style="margin-bottom: 3px;">Dirección de entrega:</div>
  <div class="md" style="margin-bottom: 6px;">
    {{ $guia->entrega_direccion ?? '' }}
  </div>

  <div class="kv md">
    <span class="label">Teléfono</span><br>
    <span class="value">{{ $guia->dest_tel ?? '' }}</span>
  </div>

  <div class="kv md" style="margin-top: 4px;">
    <span class="label">WhatsApp</span><br>
    <span class="value">{{ $guia->dest_wa ?? '' }}</span>
  </div>

  <div class="kv md" style="margin-top: 6px;">
    <span class="label">Nota:</span><br>
    <span class="value">{{ $guia->nota ?? '' }}</span>
  </div>

  <hr class="sep">

 <div class="md bold" style="text-align:center; font-size:20px;">
  Total a cobrar: ${{ number_format((float)($guia->total_cobrar ?? 0), 2) }}
</div>

  {{-- Barcode --}}
  <div class="barcode">
    @if (!empty($guia->codigo))
      {!! DNS1D::getBarcodeHTML($guia->codigo, 'C39', 1.2, 42) !!}
      <div class="sm bold" style="margin-top: 3px;">{{ $guia->codigo }}</div>
    @endif
    <div class="sm" style="margin-top: 6px;">¡¡Gracias por preferirnos!!</div>
  </div>

</div>

</body>
</html>
