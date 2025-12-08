<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\{
    FromCollection, WithHeadings, WithMapping, WithColumnFormatting,
    ShouldAutoSize, WithEvents, WithDrawings, WithCustomStartCell
};
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;
use Illuminate\Support\Carbon;

class TicketlistaExport implements
    FromCollection, WithHeadings, WithMapping, WithColumnFormatting,
    ShouldAutoSize, WithEvents, WithDrawings, WithCustomStartCell
{
    public function __construct(
        private Collection $rows
    ) {
        $this->rows = $this->rows->values();
    }

    /** Dejamos espacio para el encabezado; la tabla arranca en A8 */
    public function startCell(): string { return 'A8'; }

    /** Logo */
    public function drawings()
    {
        $path = public_path('fotos/logoticket.jpeg'); // ajusta si tu ruta cambia
        if (!file_exists($path)) return [];
        $d = new Drawing();
        $d->setName('Logo');
        $d->setDescription('Logo');
        $d->setPath($path);
        $d->setHeight(60);
        $d->setCoordinates('A1');
        $d->setOffsetX(5);
        $d->setOffsetY(5);
        return [$d];
    }

    public function collection() { return $this->rows; }

    /** Encabezados EXACTOS como el PDF */
    public function headings(): array
    {
        return [
            'Id de ticket', 'Fecha', 'Estado'
        ];
    }

    /** Mapeo 1:1 con tus campos de Ticktpago */
    public function map($row): array
    {
        return [
            $row->codigo,                 // # de ticket
            $this->toExcelDate($row->created_at ?? null), // Fecha
            $row->estado,                 // Estado
        ];
    }
          

    /** Formatos (moneda y fecha) */
    public function columnFormats(): array
    {
        return [
            
            'B' => NumberFormat::FORMAT_DATE_DDMMYYYY,       // Fecha
        ];
    }

    /** Encabezado (título, dirección, web, fecha/hora) + estilos de la fila de títulos */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $e) {
                $s = $e->sheet->getDelegate();
                $lastCol = 'C'; // 3 columnas (A..C)

                // Alturas y merges
                $s->getRowDimension(1)->setRowHeight(50);
                foreach ([3,4,5,6] as $r) {
                    $s->mergeCells("A{$r}:{$lastCol}{$r}");
                }

                // Título
                $s->setCellValue('A3', 'Reporte de tickets');
                $s->getStyle('A3')->getFont()->setBold(true)->setSize(14);
                $s->getStyle('A3')->getAlignment()->setHorizontal('center');

                // Dirección
                $s->setCellValue('A4', 'Centro Comercial Metrogaleria local 3-9 - San Salvador');
                $s->getStyle('A4')->getAlignment()->setHorizontal('center');

                // Web
                $s->setCellValue('A5', 'WWW.MELOEXPRESS.COM.SV');
                $s->getStyle('A5')->getAlignment()->setHorizontal('center');

                // Fecha y hora (alineado al centro, como en el PDF)
                $s->setCellValue('A6', 'Fecha: ' . Carbon::now('America/El_Salvador')->format('d/m/Y')
    . '    Hora: ' . Carbon::now('America/El_Salvador')->format('h:i A'));

$s->getStyle('A6')->getAlignment()->setHorizontal('center');
                // Estilos de encabezados de la tabla (fila 8)
                $s->getStyle("A8:{$lastCol}8")->getFont()->setBold(true);
                $s->getStyle("A8:{$lastCol}8")->getAlignment()->setHorizontal('center');
                $s->getStyle("A8:{$lastCol}8")->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('FFEDEDED');
                $s->getStyle("A8:{$lastCol}8")->getBorders()->getAllBorders()
                    ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

                // (Opcional) Autofiltro
                $s->setAutoFilter("A8:{$lastCol}8");
            },
        ];
    }

    /** Helper: convierte string/DateTime a número de fecha de Excel o null */
    private function toExcelDate($value)
    {
        if (!$value) return null;
        if ($value instanceof \DateTimeInterface) {
            return ExcelDate::dateTimeToExcel($value);
        }
        try {
            return ExcelDate::dateTimeToExcel(Carbon::parse($value));
        } catch (\Throwable $e) {
            // si no parsea, devuélvelo como texto
            return $value;
        }
    }
}
