<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    
    <script type="text/javascript">
     function printHTML() { 
  if (window.print) { 
    window.print();
  }
}
document.addEventListener("DOMContentLoaded", function(event) {
  printHTML(); 
});
 </script>
</head> 
<body>
<style>
        .margen{
            margin: 5px;
        }
        .margenint{
            padding: 5px;
        }
        
.columna{
    width:350px;
}
.centrar{
    
    text-align: center;
}

    </style>
<div style="width:100%; " class="text-center centrar">
    <img src="../public/fotos/logoticket.jpeg" alt="Melo Express" style="max-width: 55mm; height: auto;">
    <br>
            <div class="margen "> <span class="page__heading melo" >Expertos en paqueteria</span></div>
            
           <!-- <img alt="image" src="/public/img/logo.png" > -->
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">Comprobante de cobro</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>
            
        </div >
        <div style="margin-top:10px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
       <br>

                        <div class="fecha centrar " style="font-weight: bolder;">
   TICKET Nº {{ $ticketact[0]->codigo }}
  
   
   </div>
   Comercio: <span style="font-weight: bolder;">{{ $ticketact[0]->comercio }}</span> 
   <hr>
   
   <div class="fecha ">
   <span > Fecha: {{ now()->Format('d/m/Y')}} </span>
   <span style="float:right; ">Hora: {{ now()->Format('H:i A')}}</span> 
   </div>

   
   
   <div class="centrar">
<table class="centrar" style="width: 100%;">
    <thead class="centrar" style="border-top: 2px solid black; border-bottom: 2px solid black;">
        <tr>
        <th style="width: 200px;">DESCRIPCION</th>
        <TH>CANT</TH>
        <TH>IMPORTE</TH>
        </tr>

        <tbody>
            <tr>
                <td style="text-align: left;">Personalizado</td>
                <td>{{ $ticketact[0]->perso }}</td>
                <td>${{ $ticketact[0]->persoi }}</td>
            </tr>
            <tr>
                <td style="text-align: left;">Punto fijo</td>
                <td>{{ $ticketact[0]->punto }}</td>
                <td>${{ $ticketact[0]->puntoi }}</td>
            </tr>
            <tr>
                <td style="text-align: left;">Casillero</td>
                <td>{{ $ticketact[0]->casil }}</td>
                <td>${{ $ticketact[0]->casili }}</td>
            </tr>
            <tr>
                <td style="text-align: left;">Personalizado Departamental</td>
                <td>{{ $ticketact[0]->depar }}</td>
                <td>${{ $ticketact[0]->depari }}</td>
            </tr>
            <tr >
                <td style="text-align: left; border-bottom: 2px solid black;"> Guias</td>
                <td style="border-bottom: 2px solid black;">{{ $ticketact[0]->guias }}</td>
                <td style="border-bottom: 2px solid black;">${{ $ticketact[0]->guias }}<</td>
            </tr>
            <tr style="text-align: left;">
                    
                    
                    <td style=" " >Método de pago: {{ $ticketact[0]->metodo }} </td>
                    <td style="" class="centrar">
                     
                    </td>
                    
                    
                </tr>
            <tr >
                <td></td>
                <td>SUBTOTAL</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact[0]->persoi + $ticketact[0]->puntoi + $ticketact[0]->casili + $ticketact[0]->depari + $ticketact[0]->guias }}
                 
                </td>
                
            </tr>
            <tr >
                <td></td>
                <td>DESCUENTO</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact[0]->descuento }}
                 
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td style="font-weight: bolder;">TOTAL</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact[0]->total }}</td>
            </tr>
            <tr>
                
                <td colspan="2" style="text-align: right;">ENTREGA EFECTIVO:</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact[0]->entrega }}</td>
            </tr>
            <tr >
                <td></td>
                <td>CAMBIO:</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact[0]->cambio }}</td>
            </tr>
           
        </tbody>

    </thead>
</table>
<br>
<div>Le atendio: {{ Auth::user()->name }}</div>
<hr>
<div>¡¡GRACIAS POR PREFERIRNOS!!</div>
<hr>
<div style="padding-left: 75px;"> {!! DNS1D::getBarcodeHTML($ticketact[0]->codigo , 'C39') !!} <span style="padding-right: 80px; font-weight: bolder;"> {{ $ticketact[0]->codigo }} </span></div>
</div>



</body>
</html>










